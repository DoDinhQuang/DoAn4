@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="{{ URL::to('admin/configuration/save_configuration')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Thêm cấu hình</legend>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">product_id</label>
    <div class="col-md-4">
    <input id="product_name" name="product_id" placeholder="Mã sản phẩm" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">configuration_ram</label>
  <div class="col-md-4">
  <input id="product_name" name="configuration_ram" placeholder="Ram" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">configuration_interna_memory</label>
  <div class="col-md-4">
  <input id="available_quantity" name="configuration_interna_memory" placeholder="Bộ nhớ trong" class="form-control input-md" required="" type="text">

  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">configuration_price</label>
    <div class="col-md-4">
    <input id="available_quantity" name="configuration_price" placeholder="Giá" class="form-control input-md" required="" type="text">

    </div>
  </div>

<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">configuration_number</label>
    <div class="col-md-4">
    <input id="available_quantity" name="configuration_number" placeholder="Số lượng" class="form-control input-md" required="" type="text">

    </div>
  </div>


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="addconfiguration"  class="btn btn-primary"  value="Thêm">
  </div>
  </div>

</fieldset>
</form>
@stop
