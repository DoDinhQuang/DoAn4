@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng nhập</h4>
                    <div class="space20">&nbsp;</div>

                    <form action="{{URL::to('home/login-customer')}}" method="POST">
                        @csrf
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" name="email_account" id="email" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="text" name="password_account" id="phone" required>
                    </div>
                    <div class="form-block">
                        <button type="submit"  class="btn btn-primary">Login</button>
                    </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@stop
