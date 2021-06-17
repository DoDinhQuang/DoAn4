<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home </title>
    <base href="{{ asset('public/backend') }}/">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="assets/dest/css/style.css">
    <link rel="stylesheet" href="assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>
<body>
    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href=""><i class="fa fa-home"></i> Đội 4 Xóm Bình Tân, Phường Bần, Mỹ Hào, Hưng Yên</a></li>
                        <li><a href=""><i class="fa fa-phone"></i> 0356 831 447</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <?php
                        $customer_name =Session::get('customer_name');
                        ?>

                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL){
                        ?>
                            <li><a href="{{URL::to('home/login-user')}}"><i class="fa fa-user"></i><?php echo $customer_name ?></a></li>
                            <li><a href="{{URL::to('home/logout-user')}}">Đăng xuất</a></li>
                        <?php
                        }else {
                            ?>
                            <li><a href="{{URL::to('home/login-user')}}">Đăng nhập</a></li>
                            <?php
                        }
                        ?>
                        <li><a href="{{URL::to('home/logout')}}">Đăng Ký</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="{{URL::to('home')}}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="GET" id="searchform" action="{{URL::to('home/search')}}">
                            <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>

                    <div class="beta-comp">

                        <div class="cart ">
                            <a href="{{URL::to('home/show-cart')}}">Giỏ hàng <i class="fa fa-shopping-cart"></i>
                                <span class="quantity_cart"></span>
                                <?php
                                    $cart = session()->get('cart');
                                    if ($cart!=null) {?>
                                        (<span class="quantity_cart"><?php echo count($cart); ?></span>)
                                    <?php }
                                ?>
                            </a>

                        </div> <!-- .cart -->

                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color: #0277b8;">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="{{URL::to('home')}}">Trang chủ</a></li>
                        <li><a href="#">Hãng sản xuất</a>
                            <ul class="sub-menu">
                                @foreach ($manufacturer as $manu)
                                <li style="text-align: center"><a href="{{URL::to('home/manufacturer_type',$manu->manufacturer_id)}}">{{$manu->manufacturer_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        </li>
                        <li><a href="{{URL::to('home/about')}}">Giới thiệu</a></li>
                        <li><a href="{{URL::to('home/contact')}}">Liên hệ</a></li>

                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->

    @yield('content')
	<div id="footer" class="color-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Liên hệ</h4>
                        <div>
                            <ul>
                                <li><a href="blog_fullwidth_2col.html"></i> Facebook</a></li>
                                <li><a href="blog_fullwidth_2col.html"></i> Zalo</a></li>
                                <li><a href="blog_fullwidth_2col.html"></i> Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget">
                        <h4 class="widget-title">Hỗ trợ</h4>
                        <div>
                            <ul>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Bán hàng Online</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Chăm sóc khách hàng</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Hỗ trợ kỹ thuật</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Hỗ trợ bảo hành </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                 <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Địa chỉ</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p>Đội 4 Xóm Bình Tân Phường Bần Mỹ Hào Hưng Yên<br/> Phone: +0356 831 447</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Đăng ký</h4>
                        <form action="#" method="post">
                            <input type="email" name="your_email">
                            <button class="pull-right" type="submit">Đăng ký<i class="fa fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #footer -->

	<!-- include js files -->
    <script src="assets/dest/js/jquery.js"></script>
    <script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="assets/dest/vendors/animo/Animo.js"></script>
    <script src="assets/dest/vendors/dug/dug.js"></script>
    <script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/dest/js/waypoints.min.js"></script>
    <script src="assets/dest/js/wow.min.js"></script>
    <!--customjs-->
    <script src="assets/dest/js/custom2.js"></script>
    <script src="assets/dest/js/addcart.js"></script>
    <script src="assets/dest/js/editcart.js"></script>
    <script src="assets/dest/js/deletecart.js"></script>
    <script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
            $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
    </script>

<!--Cart -->
</body>
</html>
