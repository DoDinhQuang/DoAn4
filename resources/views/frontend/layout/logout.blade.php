@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                <form action="{{URL::to('home/add-customer')}}" method="POST">
                        {{ csrf_field() }}
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" name="customer_email" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="text" name="customer_password" id="phone" placeholder="Mật khẩu" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name">Fullname*</label>
                        <input type="text" name="customer_name" id="your_last_name" placeholder="Tên" required>
                    </div>


                    <div class="form-block">
                        <label for="phone">Phone*</label>
                        <input type="text" name="customer_phone" id="phone" placeholder="Số điện thoại" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Address*</label>
                        <input type="text" name="customer_address" id="adress" placeholder="Địa chỉ"  required>
                    </div>

                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@stop
