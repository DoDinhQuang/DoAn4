<div class="container mb-4" >
    @if (isset($carts))
    <div class="row" data-url="{{route('deleteCart')}}">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped update_cart_url" data-url="{{route('updateToCart')}}">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">STT</th>
                            <th scope="col" style="text-align: center">Ảnh</th>
                            <th scope="col" style="text-align: center">Tên sản phẩm</th>
                            <th scope="col" class="text-center" style="text-align: center">Số lượng</th>
                            <th scope="col" class="text-right" style="text-align: center">Giá</th>
                            <th scope="col" class="text-right" style="text-align: center">Tổng tiền</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                        ?>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($carts as $product_id => $cart_item)
                        @php
                            $total += $cart_item['price']*$cart_item['quantity'];

                        @endphp
                        <tr>
                            <td style="text-align: center;vertical-align: middle" >#{{$i}}</td>
                            <td style="text-align: center"><img style="width:150px;" src="{{asset('storage/app/upload/'.$cart_item['image'])}}" alt=""></td>
                            <td style="text-align: center;vertical-align: middle" >{{$cart_item['name']}}</td>
                            <td style="text-align: center;vertical-align: middle"  ><input style="width: 40px;" type="number" value="{{$cart_item['quantity']}}" min="1" class="quatity"></td>
                            <td style="text-align: center;vertical-align: middle"  class="text-right">{{number_format($cart_item['price'])}}</td>
                            <td style="text-align: center;vertical-align: middle"  class="text-right">{{number_format($cart_item['price']*$cart_item['quantity'])}}đ</td>
                            <td style="text-align: center;vertical-align: middle"  class="text-right">
                                <button data-id="{{$product_id}}" class="btn btn-sm btn-edit cart-update"><i class="fas fa-edit"></i></button>
                                <button data-id="{{$product_id}}" class="btn btn-sm btn-danger cart-delete"><i class="fa fa-trash"></i> </button>
                            </td>
                        </tr>
                        <?php
                            $i ++
                        ?>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-12" style="text-align: right">
            <h2>Tổng tiền : {{number_format($total)}}đ</h2>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{URL::to('home')}}" class="btn btn-block btn-light">Tiếp tục mua sắm</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL){
                        ?>
                            <a href="{{URL::to('home/check-out')}}" class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</a>
                        <?php
                        }else {
                            ?>
                            <a href="{{URL::to('home/login-user')}}" class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</a>
                            <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    @else
    <h2>Giỏ hàng trống</h2>
    @endif
</div>
