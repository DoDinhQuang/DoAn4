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
<legend>Sửửa màu sắc</legend>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">product_id</label>
    <div class="col-md-4">
    <input id="product_name" name="product_id" value="{{ $edit->product_id }}"  placeholder="Mã sản phẩm" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">phone_color_hue</label>
  <div class="col-md-4">
  <input id="product_name" name="phone_color_hue" value="{{ $edit->phone_color_hue }}" placeholder="Màu" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->


<!-- Text input-->


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="editphonecolor"  class="btn btn-primary"  value="Sửa">
  </div>
  </div>

</fieldset>
</form>
@stop
