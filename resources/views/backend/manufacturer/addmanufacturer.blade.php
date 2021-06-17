@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="{{ URL::to('admin/manufacturer/save_manufacturer')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Thêm hãng sản xuất</legend>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">manufacturer_name</label>
    <div class="col-md-4">
    <input id="product_name" name="manufacturer_name" placeholder="Tên hãng sản xuất" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">manufacturer_img</label>
    <div class="col-md-4">
      <input id="img" type="file" multiple="multiple" name="manufacturer_img"  class="form-control hidden" onchange="changeImg(this)">
      <img id="avatar" class="thumbnail"  width="250px" name src="{{asset('public/image/product/click.jfif')}}">
    </div>
  <script type="text/javascript">
      function changeImg(input){
          //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
          if(input.files && input.files[0]){
              var reader = new FileReader();
              //Sự kiện file đã được load vào website
              reader.onload = function(e){
                  //Thay đổi đường dẫn ảnh
                  $('#avatar').attr('src',e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $(document).ready(function() {
          $('#avatar').css('cursor','pointer');
          $('#avatar').click(function(){
              $('#img').click();
          });
      });
  </script>
</div>
<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">manufacturer_description</label>
  <div class="col-md-4">
  <input id="available_quantity" name="manufacturer_description" placeholder="Mô tả" class="form-control input-md" required="" type="text">
  </div>
</div>


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="addmanufacturer"  class="btn btn-primary"  value="Thêm">
  </div>
  </div>

</fieldset>
</form>
@stop
