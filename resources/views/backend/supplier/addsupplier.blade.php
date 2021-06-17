@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="{{ URL::to('admin/supplier/save_supplier')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Thêm nhà cung cấp</legend>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">supplier_name</label>
    <div class="col-md-4">
    <input id="product_name" name="supplier_name" placeholder="Tên nhà cung cấp" class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">supplier_address</label>
  <div class="col-md-4">
  <input id="product_name" name="supplier_address" placeholder="Địa chỉ" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">supplier_phone</label>
  <div class="col-md-4">
  <input id="available_quantity" name="supplier_phone" placeholder="Số điện thoại" class="form-control input-md" required="" type="text">

  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">supplier_email</label>
    <div class="col-md-4">
    <input id="available_quantity" name="supplier_email" placeholder="Email" class="form-control input-md" required="" type="text">

    </div>
  </div>


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="addsupplier"  class="btn btn-primary"  value="Thêm">
  </div>
  </div>

</fieldset>
</form>
@stop
