@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">

        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Gửi thông tin liên hệ</h2>
                <div class="space20">&nbsp;</div>
                <form action="#" method="post" class="contact-form">
                    <div class="form-block">
                        <input name="Tên" type="text" placeholder="Tên">
                    </div>
                    <div class="form-block">
                        <input name="your-email" type="email" placeholder="Email">
                    </div>
                    <div class="form-block">
                        <input name="your-subject" type="text" placeholder="Chủ đề">
                    </div>
                    <div class="form-block">
                        <textarea name="your-message" placeholder="Lời nhắn"></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Thông tin liên hệ</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">Địa chỉ</h6>
                <p>
                    Đội 4 - Xóm Bình Tân - Phường Bần - Mỹ Hào - Hưng Yên
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@stop
