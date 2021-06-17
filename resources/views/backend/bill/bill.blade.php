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
            <h1><i class="fa fa-th-list"></i> Hóa đơn nhập</h1>
          </div>
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{asset('admin/bill/add_bill')}}" style="font-size:25px; color:black" >Thêm hóa đơn nhập</a></li>
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
                          <th style="text-align: center">Mã cung cấp</th>
                          <th style="text-align: center">Tổng tiền</th>
                          <th style="text-align: center">Thời gian</th>
                          <th style="text-align: center">Edit</th>
                          <th style="text-align: center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $sp as $item )
                        <tr>
                          <td style="vertical-align: middle; text-align: center">{{$item->bill_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->supplier_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{number_format($item->bill_total)}}</td>
                          <td style="vertical-align: middle; text-align: center">{{date('Y-m-d',strtotime($item->bill_time))}}</td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/bill/edit_bill/'.$item->bill_id)}}"><i class="fas fa-edit" ></i></a></td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/bill/delete/'.$item->bill_id)}}"><i class="fas fa-trash-alt"></i></a></td>
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
      </main>

@stop
