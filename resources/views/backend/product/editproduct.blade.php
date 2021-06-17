@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
    @csrf

<!-- Form Name -->
<legend>Sửa sản phẩm</legend>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">product_id</label>
    <div class="col-md-4">
    <input id="product_name" name="product_id" value="{{ $edit->product_id }}" placeholder="id" class="form-control input-md" required="" type="text">

    </div>
  </div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">product_name</label>
  <div class="col-md-4">
  <input id="product_name" name="product_name" value="{{ $edit->product_name }}" placeholder="Tên sản phẩm" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">manufacturer_id</label>
    <div class="col-md-4">
    <input id="product_name" name="manufacturer_id" value="{{ $edit->manufacturer_id }}"  placeholder="Mã sản xuất" class="form-control input-md" required="" type="text">

    </div>
  </div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">product_img</label>
    <div class="col-md-4">
    <input id="img" type="file" multiple="multiple" value="{{ $edit->product_img }}" name="product_img"  class="form-control hidden" onchange="changeImg(this)">
    <img id="avatar" class="thumbnail"  width="300px" name src="{{asset('storage/app/upload/'.$edit->product_img)}}">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">product_screen_size</label>
  <div class="col-md-4">
  <input id="product_weight" name="product_screen_size" value="{{ $edit->product_screen_size }}" placeholder="Kích thước" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">product_resolution</label>
  <div class="col-md-4">
    <input class="form-control" id="product_description" value="{{ $edit->product_resolution }}" name="product_resolution" placeholder="Độ phẩn giải">
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_processor_chip</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_processor_chip }}" placeholder="Chíp xử lý" name="product_processor_chip">
    </div>
  </div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_operating</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_operating }}" placeholder="Hệ điều hành" name="product_operating">
    </div>
  </div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_front_camera</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_front_camera }}" placeholder="Camera trước" name="product_front_camera">
    </div>
  </div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_rear_camera</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_rear_camera }}" placeholder="Camera sau" name="product_rear_camera">
    </div>
  </div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_battery_capacity</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_battery_capacity }}" placeholder="Dung lượng pin" name="product_battery_capacity">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_sim</label>
    <div class="col-md-4">
      <input class="form-control" id="product_name_fr" value="{{ $edit->product_sim }}" placeholder="Thẻ sim" name="product_sim">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">product_hot</label>
    <div class="col-md-4" style="margin-top: 9px !important;">
        Có:<input type="radio" checked name="product_hot" value="1">
        Không:<input  type="radio" checked name="product_hot" value="0" >
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="product_new">product_new</label>
    <div class="col-md-4" style="margin-top: 9px !important;">
        Có:<input type="radio" checked name="product_new" value="1">
        Không:<input  type="radio" checked name="product_new" value="0" >
    </div>
</div>


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="editproduct"  class="btn btn-primary"  value="Sửa">
  </div>
  </div>

</fieldset>
</form>
@stop
