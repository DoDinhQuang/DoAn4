@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        <li><h3>Hãng sản xuất</h3></li>
                        @foreach ($type as $typ)
                        <li style="text-align: center;font-size: 15px;"><a href="{{URL::to('home/manufacturer_type',$typ->manufacturer_id)}}">{{$typ->manufacturer_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm </h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy được {{count($sp)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($sp as $prod)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{URL::to('home/type_details',$prod->product_id)}}"><img src="{{asset('storage/app/upload/'.$prod->product_img)}}" alt="" height="300px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$prod->product_name}}</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{URL::to('home/type_details',$prod->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->



                    <!--<div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy được   sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sp_other as $spo)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="{{asset('storage/app/upload/'.$spo->product_img)}}" alt="" height="300px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$spo->product_name}}</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="space40">&nbsp;</div>

                    </div>-->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@stop

