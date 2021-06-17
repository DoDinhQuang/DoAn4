@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content">

        <form action="{{URL::to('home/saveInfoShoppingCart')}}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <h4>Đặt hàng</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="name">Họ tên*</label>
                        <input type="text" name="order_name" id="name"  required>
                    </div>

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" name="order_email" id="email" required >
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ*</label>
                        <input type="text" name="order_address" id="adress" required>
                    </div>


                    <div class="form-block">
                        <label for="phone">Điện thoại*</label>
                        <input type="text" name="order_phone" id="phone" required>
                    </div>

                    <div class="form-block">
                        <label for="notes">Ghi chú</label>
                        <textarea id="notes" name="order_note"></textarea>
                    </div>
                    <div class="your-order-head text-center"><button class="beta-btn primary" href="#" style="margin-top: 7px; width:200px">Đặt hàng</button></div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            @php
                            $total = 0;
                            @endphp
                            @foreach ($carts as $product_id => $cart_item)
                            @php
                            $total += $cart_item['price']*$cart_item['quantity'];
                            @endphp
                            <div class="your-order-item">
                                <div class="media">
                                    <img width="25%" src="{{asset('storage/app/upload/'.$cart_item['image'])}}" alt="" class="pull-left">
                                    <div class="media-body">
                                        <p class="font-large">Tên : {{$cart_item['name']}}</p>
                                        <p class="font-large">Số lượng : {{$cart_item['quantity']}}</p>
                                        <p class="font-large">Giá : {{number_format($cart_item['price'])}}đ</p>

                                    </div>
                                </div>
                            </div>
                                <div class="clearfix"></div>

                            @endforeach
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                                <div class="pull-right"><h5 class="color-black">{{number_format($total)}}đ</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->

@stop
