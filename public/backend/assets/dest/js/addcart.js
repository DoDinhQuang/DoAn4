function addToCart(event){
    event.preventDefault();
    let urlData = $(this).data('url');
    let quantity = $('.quantity_cart');
    $.ajax({
        type:"GET",
        url: urlData,
        dataType: 'json',
        success: function(data){
            if(data.code == 200){
                alert('thêm sản phẩm thành công');

                quantity.html('('+data.count+')');
            }
        },
        error: function(){

        }
    });
}
function addCart_detail(event){
    event.preventDefault();
    let id = $(this).data('id');
    let dataurl = $(this).data('url');
    let quantity = $('.qty').val();
    $.ajax({
        type:"GET",
        url:dataurl,
        data:{'id':id,'quantity':quantity},
        success:function(data){
            if(data.code==200){
                window.location.href = "http://localhost/DoAn/home/show-cart";
            }
        },error:function(){

        }
    });
}
$(function(){
    $('.add_to_cart').on('click',addToCart);
    $('.addCart_detail').on('click',addCart_detail);
});

