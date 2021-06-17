@extends('backend.layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <main class="app-content">
        <div class="app-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Đơn hàng đã xử lý</h1>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                          <th style="text-align: center">ID</th>
                          <th style="text-align: center">Tên</th>
                          <th style="text-align: center">Địa chỉ</th>
                          <th style="text-align: center">Email</th>
                          <th style="text-align: center">Số điện thoại</th>
                          <th style="text-align: center">Ghi chú</th>
                          <th style="text-align: center">Trạng thái</th>
                          <th style="text-align: center">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($order as $it)
                        <tr>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_name}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_address}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_email}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_phone}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$it->order_note}}</td>
                          <td style="vertical-align: middle; text-align: center">
                            @if($it->order_status == 1)
                                <a href="" style="color: white;background: brown;font-size: 10px;">Đã xử lý...</a>
                            @else
                                <a href="" style="color: white;background: dimgray;font-size: 10px;">Chờ xử lý...</a>
                            @endif
                          </td>
                          <td style="vertical-align: middle; text-align: center">
                           <a class="btn btn-info" href="{{URL::to('admin/order/view-oder/'.$it->order_id)}} " style="background: dimgrey;color: aliceblue;margin: 4px;"><i class="fas fa-eye" style="margin: 4px;" ></i>Xem</a>
                           <a class="btn btn-success" href="{{URL::to('admin/order/del-order/'.$it->order_id)}}" style="color: antiquewhite;background: goldenrod;margin: 4px;"><i class="fas fa-hand-paper" style="margin: 4px;" ></i>Giao</a>
                           <a class="btn btn-danger" href="{{URL::to('admin/order/delete/'.$it->order_id)}}" style="color: antiquewhite;background: mediumturquoise;"><i class="fas fa-trash-alt" style="margin: 4px;" ></i>Hủy</a>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                            </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>


@stop
