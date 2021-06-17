@extends('backend.layout.layout')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="{{ URL::to('admin/bill_details/save_billdetails')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Thêm chi tiết hóa đơn</legend>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">bill_id</label>
    <div class="col-md-4">
    <input id="product_name" name="bill_id" placeholder="Mã hóa đơn nhập " class="form-control input-md" required="" type="text">

    </div>
  </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">configuration_id</label>
  <div class="col-md-4">
  <input id="product_name" name="configuration_id" placeholder="Mã cấu hình" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">bill_details_quantily</label>
    <div class="col-md-4">
    <input id="available_quantity" name="bill_details_quantily" placeholder="Số lượng" class="form-control input-md" required="" type="text">

    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">bill_details_price</label>
    <div class="col-md-4">
    <input id="available_quantity" name="bill_details_price" placeholder="Giá" class="form-control input-md" required="" type="text">

    </div>
</div>



<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr"></label>
  <div class="col-md-4 ">
    <input type="submit" id="singlebutton"name="addbilldetails"  class="btn btn-primary"  value="Thêm">
  </div>
  </div>

</fieldset>
</form>
@stop
