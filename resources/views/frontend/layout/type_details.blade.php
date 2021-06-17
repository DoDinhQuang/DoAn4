@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('storage/app/upload/'.$typ->product_img)}}" alt="" height="300px">
                    </div>
                    <div class="col-sm-8">

                    <div class="single-item-body">
                        <p class="single-item-title"><h2>{{$typ->product_name}}</h2></p>
                        <p class="single-item-price" style="margin-top: 10px;">
                            <span><b>{{number_format($typ->getPrice->configuration_price)}}đ</b></span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="space20">&nbsp;</div>
                    <div class="space20">&nbsp;</div>
                    <p>Lựa chọn</p>
                    <div class="single-item-options">
                        <input type="number " class="qty" name="qty" style="height: 35px;width: 40px;" value="1" min="1">

                        <a class="add-to-cart addCart_detail" href="#" data-id="{{$typ->product_id}}" data-url="{{asset('home/save-cartdetalis')}}"><i class="fa fa-shopping-cart"></i></a>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        <li><a href="#tab-reviews">Bình luận</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <b style="font-size: 20px;">Mua điện chính hãng giá tốt tại Shop Mobile</b>
                        <p style="margin-top: 20px; margin-bottom: 20px;">  Là một chiếc điện thoại giá rẻ, Masstel Hapi 10 đáp ứng đầy đủ nhu cầu liên lạc, duyệt web và giải trí nhẹ nhàng của người dùng một cách mượt mà.</p>
                        <b style="font-size: 20px;">Phong cách cổ điển, màn hình rộng</b>
                        <p style="margin-top: 20px; margin-bottom: 20px;">  Masstel Hapi 10 được thiết kế chủ yếu với chất liệu nhựa polycarbonate. Vỏ sau của máy được xử lý nhám, tạo cảm giác cầm thân thiện với da tay, chống bám dấu vân tay và bụi bẩn khá hiệu quả. Ở đây ta cũng thấy cụm camera kép, đèn flash LED cùng loa ngoài.<br/>Mặt trước của chiếc máy này là màn hình IPS LCD có kích thước 5 inch tỉ lệ 16:9 – một tỉ lệ tối ưu cho việc xem video. Màn hình này có độ phân giải HD, vừa đủ dùng cho những tác vụ giải trí thông thường. Phía dưới màn hình là dải ba phím điều hướng quen thuộc của Android.<br/>Phím nguồn và tăng/giảm âm lượng được đặt ở cạnh phải của máy. Cổng sạc micro USB và cổng tai nghe 3.5mm được đặt ở cạnh dưới. Một điểm thú vị nữa là để thay SIM cho sản phẩm, bạn cần phải tháo nắp lưng ra. Bạn cũng có thể dễ dàng trang bị thêm thẻ nhớ ngoài và pin của máy, điều mà ít smartphone Android nào có thể làm.</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>Không có bình luận</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm tương tự</h4>
                    <div class="row">
                        @foreach ($sp_similar as $item)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{URL::to('home/type_details',$item->product_id)}}"><img src="{{asset('storage/app/upload/'.$item->product_img)}}" alt="" height="300px"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$item->product_name}}</p>
                                    <p class="single-item-price">
                                        <span>{{number_format($item->getPrice->configuration_price)}}đ</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{URL::to('home/type_details',$item->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

						</div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm hot</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($hot as $ite)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{URL::to('home/type_details',$ite->product_id)}}"><img src="{{asset('storage/app/upload/'.$ite->product_img)}}" alt="" ></a>
                                <div class="media-body">
                                    {{$ite->product_name}}
                                    <span class="beta-sales-price">{{number_format($ite->getPrice->configuration_price)}}đ</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($new as $it)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{URL::to('home/type_details',$it->product_id)}}"><img src="{{asset('storage/app/upload/'.$it->product_img)}}" alt="" ></a>
                                <div class="media-body">
                                    {{$it->product_name}}
                                    <span class="beta-sales-price">{{number_format($it->getPrice->configuration_price)}}đ</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@stop

