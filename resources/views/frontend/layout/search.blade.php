@extends('frontend.layout.layout')
@section('content')
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>

									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
										<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/banner-v21-web.jpg" data-src="assets/dest/images/banner-v21-web.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/banner-v21-web.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
										</div>
									</div>
                                    </li>
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div  class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/banner-web-s21-1.jpg" data-src="assets/dest/images/banner-web-s21-1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/banner-web-s21-1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                    </div>
                                    </li>
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/banner-band-6-web.jpg" data-src="assets/dest/images/banner-band-6-web.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/banner-band-6-web.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                            </div>
                                        </div>
                                    </li>

								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        <li><h3>Hãng sản xuất</h3></li>
                        @foreach ($manufacturer as $manu)
                        <li style="text-align: center;font-size: 15px;"><a href="{{URL::to('home/manufacturer_type',$manu->manufacturer_id)}}">{{$manu->manufacturer_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Kết quả tìm kiếm</h4>
                        <div class="row">
                            @foreach ($product as $item)
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

                                        <a href="#" class="add-to-cart pull-left add_to_cart" data-url="{{URL::to('home/add-to-cart',$item->product_id)}}" >
                                            <i class="fa fa-shopping-cart "></i>
                                        </a>
                                        <a class="beta-btn primary" href="{{URL::to('home/type_details',$item->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

@stop
