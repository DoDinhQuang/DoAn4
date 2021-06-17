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
            <h1><i class="fa fa-th-list"></i> Chi tiết đơn hàng</h1>
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
                          <th style="text-align: center">Ảnh</th>
                          <th style="text-align: center">Số lượng</th>
                          <th style="text-align: center">Giá</th>
                          <th style="text-align: center">Tổng tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php
                              $total=0;
                          @endphp
                          @foreach ($order->order_view as $item)
                          @php
                            $total += $item->quantily*$item->price;
                          @endphp
                        <tr>
                          <td style="vertical-align: middle; text-align: center">{{$item->order_details_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_view->product_name}}</td>
                          <td style="vertical-align: middle; text-align: center"><img src="{{asset('storage/app/upload/'.$item->product_view->product_img)}}" alt="" height="100" width="100" ></td>
                          <td style="vertical-align: middle; text-align: center">{{$item->quantily}}</td>
                          <td style="vertical-align: middle; text-align: center">{{number_format($item->price)}}</td>
                          <td style="vertical-align: middle; text-align: center">{{number_format($item->quantily*$item->price)}}đ</td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                        <div class="col-12" style="text-align: right">
                            <h2>Tổng hóa đơn : {{number_format($total)}}đ</h2>
                        </div>
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
