function cartUpdate(event){
    event.preventDefault();
    let upDateCart = $('.update_cart_url').data('url');
    let id = $(this).data('id');
    let quatity = $(this).parents('tr').find('input.quatity').val();
    $.ajax({
        type:"GET",
        url: upDateCart,
        data: {id: id, quatity: quatity },
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

    $(document).on('click' , '.cart-update' , cartUpdate);
});
