@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Thanh toán thành công</li>
        </ol>
    </div>
    <div style="margin-bottom: 50px">
        <h3 style="color: brown;font-weight: 500;line-height: 50px;text-align: center; ">Thành công. Cảm ơn bạn đã mua sản phẩm bên shop mình</h3>
    </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <a href="{{URL::to('home')}}" class="btn btn-block btn-light" style="margin-left: 300px; background: gainsboro;">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>


</div>
@stop
