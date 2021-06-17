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
            <h1><i class="fa fa-th-list"></i> Sản phẩm</h1>
          </div>
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{asset('admin/product/add_product')}}" style="font-size:25px; color:black" >Thêm sản phẩm</a></li>
          </ul>
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
                          <th style="text-align: center">Tên sản phẩm</th>
                          <th style="text-align: center">Mã hãng sản xuất</th>
                          <th style="text-align: center">Ảnh</th>
                          <th style="text-align: center">Kích thước</th>
                          <th style="text-align: center">Độ phân giải</th>
                          <th style="text-align: center">Dung lượng pin</th>
                          <th style="text-align: center">Edit</th>
                          <th style="text-align: center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $sp as $item )
                        <tr>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_name}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->manufacturer_id}}</td>
                          <td style="vertical-align: middle; text-align: center"><img src="{{asset('storage/app/upload/'.$item->product_img)}}" alt="" height="100" width="100" ></td>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_screen_size}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_resolution}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->product_battery_capacity}}</td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/product/edit_product/'.$item->product_id)}}"><i class="fas fa-edit" ></i></a></td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/product/delete/'.$item->product_id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                                    {{ $sp->links() }}
                                </div>
                            </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </main>

@stop


