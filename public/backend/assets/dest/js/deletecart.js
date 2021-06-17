function cartDelete(event){
    event.preventDefault();
    let urlDelede = $('.row').data('url');
    let id = $(this).data('id');
    $.ajax({
        type:"GET",
        url: urlDelede,
        data: {id: id },
        success: function(data){
            if(data.code === 200){
                $('.cart_wrapper').html(data.cart_conpondent);
                location.reload();
            }
        },
        error: function(){

        }
    });
}







$(function(){
    $(document).on('click' , '.cart-delete' , cartDelete);
});
