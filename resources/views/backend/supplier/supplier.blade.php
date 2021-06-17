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
            <h1><i class="fa fa-th-list"></i> Nhà cung cấp</h1>
          </div>
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{asset('admin/supplier/add_supplier')}}" style="font-size:25px; color:black" >Thêm nhà cung cấp</a></li>
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
                          <th style="text-align: center">Tên nhà cung cấp</th>
                          <th style="text-align: center">Địa chỉ</th>
                          <th style="text-align: center">Số điện thoại</th>
                          <th style="text-align: center">Email</th>
                          <th style="text-align: center">Edit</th>
                          <th style="text-align: center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $sp as $item )
                        <tr>
                          <td style="vertical-align: middle; text-align: center ">{{$item->supplier_id}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->supplier_name}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->supplier_address}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->supplier_phone}}</td>
                          <td style="vertical-align: middle; text-align: center">{{$item->supplier_email}}</td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/supplier/edit_supplier/'.$item->supplier_id)}}"><i class="fas fa-edit" ></i></a></td>
                          <td style="vertical-align: middle; text-align: center"><a href="{{URL::to('admin/supplier/delete/'.$item->supplier_id)}}"><i class="fas fa-trash-alt"></i></a></td>
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
