@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>Sửa hãng sản xuất</legend>

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">manufacturer_id</label>
    <div class="col-md-4">
    <input id="product_name" name="manufacturer_id" value="{{ $edit->manufacturer_id }}" placeholder="id" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">manufacturer_name</label>
    <div class="col-md-4">
    <input id="product_name" name="manufacturer_name" value="{{ $edit->manufacturer_name }}" placeholder="Tên hãng sản xuất" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">manufacturer_img</label>
      <div class="col-md-4">
      <input id="img" type="file" multiple="multiple" value="{{ $edit->manufacturer_img }}" name="manufacturer_img"  class="form-control hidden" onchange="changeImg(this)">
      <img id="avatar" class="thumbnail"  width="300px" name src="{{asset('storage/app/upload/'.$edit->manufacturer_img)}}">
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
          //alert(input.val());
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
  <input id="available_quantity" name="manufacturer_description" value="{{ $edit->manufacturer_description }}" placeholder="Mô tả" class="form-control input-md" required="" type="text">

  </div>
</div>


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="editmanufacturer"  class="btn btn-primary"  value="Sửa">
  </div>
  </div>

</fieldset>
</form>
@stop
