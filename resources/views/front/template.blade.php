<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <title>Flatastic - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="/front/image/ico" href="/front/images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/settings.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/jquery.custom-scrollbar.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/style.css?v=1">
    <!--font include-->
    <link href="/front/css/font-awesome.min.css" rel="stylesheet">
    <script src="/front/js/modernizr.js"></script>
    <style type="text/css">
        @media (min-width: 1200px) {
            .container {
                max-width: 1170px;
            }
        }
        .divider_type_6 {
            margin-bottom: 0;
        }
        {{ Request::segment(1) }}
        .qv_carousel.d_inline_middle img {
            width: 90px;
            height: 90px;
        }
        blockquote::before {
            content: '';
        }
    </style>
</head>
<body>
<div class="wide_layout relative w_xs_auto">
    <header role="banner" class="type_5">
        <!--header top part-->
        <section class="h_top_part">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                        <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                            @if(!$auth)
                                <li><a href="#" class="default_t_color" data-popup="#login_popup">Đăng nhập</a></li>
                                {{--<a href="/login">--}}
                                    {{--<img src="/front/img/icon/user.png" alt="">--}}
                                {{--</a>--}}
                                {{--<a href="/login" >--}}
                                    {{--Đăng nhập--}}
                                {{--</a>--}}
                            @else
                                <li><a href="/my-profile" class="default_t_color"> {{$auth->Ten}}</a></li>
                                <li><a href="/logout" class="default_t_color"> Đăng xuất</a></li>
                            @endif
                            <li><a href="/cart" class="default_t_color">Thanh toán</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                        <p class="f_size_small">Gọi cho chúng tôi miễn phí: <b class="color_dark">(123) 456-7890</b></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                    </div>
                </div>
            </div>
        </section>
        <!--header bottom part-->
        <section class="h_bot_part">
            <div class="menu_wrap">
                <div class="container">
                    <div class="clearfix row">
                        <div class="col-lg-2 t_md_align_c m_md_bottom_15">
                            <a href="/" class="logo d_md_inline_b">
                                <img src="/front/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-10 clearfix t_sm_align_c">
                            <div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">
                                <!--button for responsive menu-->
                                <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5">
                                    <span class="centered_db r_corners"></span>
                                    <span class="centered_db r_corners"></span>
                                    <span class="centered_db r_corners"></span>
                                </button>
                                <!--main menu-->
                                <nav role="navigation" class="f_left f_xs_none d_xs_none m_right_35 m_md_right_30 m_sm_right_0">
                                    <ul class="horizontal_list main_menu type_2 clearfix">
                                        <li class=" {{ Request::segment(1) == ''?'current':'' }} relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="/" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Trang chủ</b></a>
                                            <!--sub menu-->
                                        </li>
                                        <li class="{{ Request::segment(1) == 'about'?'current':'' }} relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="/about" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Giới thiệu</b></a></li>

                                        <li class="{{ (Request::segment(1) == 'sanphams' || Request::segment(1) == 'theloai')?'current':'' }} relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="/sanphams" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Sản phẩm</b></a>
                                            <!--sub menu-->
                                            <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                                <ul class="sub_menu">
                                                    @foreach($danhmuc_theloais as $theloai)
                                                        <li><a class="color_dark tr_delay_hover" href="/theloai/{{$theloai['Slug']}}/sanpham">{{$theloai['Name']}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="{{ Request::segment(1) == 'tintuc'?'current':'' }} relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="/tintuc" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Tin tức</b></a>
                                            <!--sub menu-->
                                            {{--<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">--}}
                                                {{--<ul class="sub_menu">--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="category_grid.html">Grid View Category Page</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="category_list.html">List View Category Page</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="category_no_products.html">Category Page Without Products</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="product_page_sidebar.html">Product Page With Sidebar</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="full_width_product_page.html">Full Width Product Page</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="wishlist.html">Wishlist</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="compare_products.html">Compare Products</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="checkout.html">Checkout</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="manufacturers.html">Manufacturers</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="manufacturer_details.html">Manufacturer Page</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="orders_list.html">Orders List</a></li>--}}
                                                    {{--<li><a class="color_dark tr_delay_hover" href="order_details.html">Order Details</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        </li>
                                        {{--<li class="{{ Request::segment(1) == 'contact'?'current':'' }} relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="/contact" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Liên hệ</b></a>--}}
                                            {{--<!--sub menu-->--}}
                                        {{--</li>--}}
                                    </ul>
                                </nav>
                                <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                                    <i class="fa fa-search"></i>
                                </button>
                                <!--search form-->
                                <div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">
                                    <div class="container vc_child h_inherit relative w_inherit">
                                        <form action="/search" role="search" class="d_inline_middle full_width">
                                            {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                                            <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large p_hr_0">
                                        </form>
                                        <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="f_right horizontal_list d_sm_inline_b f_sm_none clearfix t_align_l site_settings">
                                <!--like-->
                                {{--<li>--}}
                                    {{--<a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">12</span></a>--}}
                                {{--</li>--}}
                                {{--<li class="m_left_5">--}}
                                    {{--<a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c">3</span></a>--}}
                                {{--</li>--}}
                                <!--shopping cart-->
                                <li class="m_left_5 relative container3d" id="shopping_button">
                                    <a role="button" href="/cart" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
												<span class="d_inline_middle shop_icon">
													<i class="fa fa-shopping-cart"></i>
													<span id="amount-spec" class="count tr_delay_hover type_2 circle t_align_c">{{$cart}}</span>
												</span>
                                        {{--<b>$35500000</b>--}}
                                        <b>Giỏ hàng</b>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="divider_type_6">
            </div>
        </section>
    </header>
    <!--slider-->
@yield('slider')
{{--///////////--}}

    <div class="page_content_offset">
        <div class="container">
            @yield('content')
        </div>
    </div>

{{--///////////--}}
<footer id="footer">
    <div class="footer_top_part p_vr_0">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-5 m_xs_bottom_30 m_bottom_40">
                    <h3 class="color_light_2 m_bottom_20">Giới thiệu </h3>
                    <p class="m_bottom_15">Trang web bán sách được xây dựng dưới nền tảng php và mysql , với các trang sách hay , với nhiều thể loại...</p>
                    <a href="/about" class="color_light">Xem thêm<i class="fa fa-angle-right m_left_5"></i></a>
                </div>
                {{--<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_40">--}}
                    {{--<h3 class="color_light_2 m_bottom_20">Dịch vụ</h3>--}}
                    {{--<ul class="vertical_list">--}}
                        {{--<li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>--}}
                        {{--<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>--}}
                        {{--<li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>--}}
                        {{--<li><a class="color_light tr_delay_hover" href="#">Categories<i class="fa fa-angle-right"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="col-lg-7 col-md-7 col-sm-7 m_xs_bottom_30 m_bottom_40">
                    <h3 class="color_light_2 m_bottom_20">Thông tin</h3>
                    <ul class="vertical_list">
                        <li><a class="color_light tr_delay_hover" href="#"> Nguyễn Thị Mỹ An<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">Cụm CN Cầu Xây, Tân Lập, Huyện Đan PHượng, Tp.Hà Nội<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#"> 04 33663771 - 099 515 8716<i class="fa fa-angle-right"></i></a></li>
                        <li><a class="color_light tr_delay_hover" href="#">minh@fasific.com<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="divider_type_4 m_bottom_25">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_10">
                    <!--social icons-->
                    <ul class="clearfix horizontal_list social_icons">
                        <li class="facebook m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
                            <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="google_plus m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="rss m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                        <li class="pinterest m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li class="instagram m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="linkedin m_bottom_5 m_left_5 m_sm_left_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="vimeo m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
                        <li class="youtube m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                        <li class="flickr m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-flickr"></i>
                            </a>
                        </li>
                        <li class="envelope m_left_5 m_bottom_5 relative">
                            <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
                            <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_30">
                    <h3 class="color_light_2 d_inline_middle m_md_bottom_15 d_xs_block">Bản tin</h3>
                    <form id="newsletter" class="d_inline_middle m_left_5 subscribe_form_2 m_md_left_0">
                        <input type="email" placeholder="Your email address" class="r_corners f_size_medium w_sm_auto m_mxs_bottom_15" name="newsletter-email">
                        <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover m_left_5 m_mxs_left_0">Theo dõi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--copyright part-->
    <div class="footer_bottom_part">
        <div class="container clearfix t_mxs_align_c">
            <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2019 <span class="color_light">Flatastic</span>. All Rights Reserved.</p>
            <ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                <li><img src="/front/images/payment_img_1.png" alt=""></li>
                <li class="m_left_5"><img src="/front/images/payment_img_2.png" alt=""></li>
                <li class="m_left_5"><img src="/front/images/payment_img_3.png" alt=""></li>
                <li class="m_left_5"><img src="/front/images/payment_img_4.png" alt=""></li>
                <li class="m_left_5"><img src="/front/images/payment_img_5.png" alt=""></li>
            </ul>
        </div>
    </div>
</footer>
</div>
<!--social widgets-->
<ul class="social_widgets d_xs_none">
    <!--facebook-->
    {{--<li class="relative">--}}
        {{--<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>--}}
        {{--<div class="sw_content">--}}
            {{--<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>--}}
            {{--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>--}}
        {{--</div>--}}
    {{--</li>--}}
    <!--twitter feed-->
    {{--<li class="relative">--}}
        {{--<button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>--}}
        {{--<div class="sw_content">--}}
            {{--<h3 class="color_dark m_bottom_20">Latest Tweets</h3>--}}
            {{--<div class="twitterfeed m_bottom_25"></div>--}}
            {{--<a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>--}}
        {{--</div>--}}
    {{--</li>--}}
    <!--contact form-->
    <li class="relative">
        <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Liên hệ với chúng tôi</h3>
            <p class="f_size_medium m_bottom_15">Hãy cho chúng tôi biết ý kiến cửa bạn về sản phẩm</p>
            <form id="" class="mini" action="/report" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" required placeholder="Tên bạn">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" required placeholder="Email">
                <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Lời nhắn" name="cf_message" required maxlength="300"></textarea>
                <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Gửi</button>
            </form>
        </div>
    </li>
    <!--contact info-->
    {{--<li class="relative">--}}
        {{--<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>--}}
        {{--<div class="sw_content">--}}
            {{--<h3 class="color_dark m_bottom_20">Store Location</h3>--}}
            {{--<ul class="c_info_list">--}}
                {{--<li class="m_bottom_10">--}}
                    {{--<div class="clearfix m_bottom_15">--}}
                        {{--<i class="fa fa-map-marker f_left color_dark"></i>--}}
                        {{--<p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>--}}
                    {{--</div>--}}
                    {{--<iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>--}}
                {{--</li>--}}
                {{--<li class="m_bottom_10">--}}
                    {{--<div class="clearfix m_bottom_10">--}}
                        {{--<i class="fa fa-phone f_left color_dark"></i>--}}
                        {{--<p class="contact_e">800-559-65-80</p>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="m_bottom_10">--}}
                    {{--<div class="clearfix m_bottom_10">--}}
                        {{--<i class="fa fa-envelope f_left color_dark"></i>--}}
                        {{--<a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="clearfix">--}}
                        {{--<i class="fa fa-clock-o f_left color_dark"></i>--}}
                        {{--<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}
</ul>
<!--custom popup-->
<div class="popup_wrap d_none" id="quick_view_product">
    {{--@include('front.sanpham.detil_popup')--}}
</div>
<!--login popup-->
<div class="popup_wrap d_none" id="login_popup">
    <section class="popup r_corners shadow">
        <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
        <h3 class="m_bottom_20 color_dark">Đăng nhập</h3>
        <form action="/login" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <ul>
                <li class="m_bottom_15">
                    <label for="username" class="m_bottom_5 d_inline_b">Email</label><br>
                    <input type="text" name="Email" id="username" class="r_corners full_width">
                </li>
                <li class="m_bottom_25">
                    <label for="password" class="m_bottom_5 d_inline_b">Mật khẩu</label><br>
                    <input type="password" name="Password" id="password" class="r_corners full_width">
                </li>
                <li class="m_bottom_15">
                    <input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Nhớ mật khẩu</label>
                </li>
                <li class="clearfix m_bottom_30">
                    <button type="submit" class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Đăng nhập</button>
                    <div class="f_right f_size_medium f_mxs_none">
                        <a href="#" class="color_dark">Quên mật khẩu?</a><br>
                        {{--<a href="#" class="color_dark">Forgot your username?</a>--}}
                    </div>
                </li>
            </ul>
        </form>
        <footer class="bg_light_color_1 t_mxs_align_c">
            <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">Khách mới?</h3>
            <a href="/registration" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Đăng ký</a>
        </footer>
    </section>
</div>

@if (session('status'))
    @if(session('status') == 'false')
    <div class="popup_wrap d_none" style="display: block" id="login_false">
        <section class="popup r_corners shadow" style="width: auto;top: 40%;left: 40%">
            <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
            <h3 class="m_bottom_20 color_dark" style="text-align: center;font-weight: 700">Đăng nhập thất bại</h3>
        </section>
    </div>
    @else
    <div class="popup_wrap d_none" style="display: block" id="login_success">
        <section class="popup r_corners shadow" style="width: auto;top: 40%;left: 40%">
            <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
            <h3 class="m_bottom_20 color_dark" style="text-align: center;font-weight: 700">Đăng nhập thành công</h3>
        </section>
    </div>
    @endif
@endif






<button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
<!--scripts include-->
<script src="/front/js/jquery-2.1.0.min.js"></script>
{{--<script src="/front/js/retina.js"></script>--}}
<script src="/front/js/jquery.themepunch.plugins.min.js"></script>
<script src="/front/js/jquery.themepunch.revolution.min.js"></script>
<script src="/front/js/waypoints.min.js"></script>
<script src="/front/js/owl.carousel.min.js"></script>
<script src="/front/js/jquery.tweet.min.js"></script>
<script src="/front/js/jquery.custom-scrollbar.js"></script>
@yield('js')
<script src="/front/js/scripts.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.add-cart').click(function () {
            var id =  $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "/add-cart?id="+id,
                data: {},
            }).done(function (res) {
                console.log(res);
                if(res.status == 200) {
                    alert('Bạn đã thêm thành công giỏ hàng');
                    $('#amount-spec').css('display','block');
                    $('#amount-spec').empty();
                    $('#amount-spec').html(res.total);
                }

            });
        });
        $('body').on('click','.view-quick',function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "/view-quick?id="+id,
                data: {},
            }).done(function (res) {
                console.log(res.Photos[0].Photos.Small);
                if(res.Id) {
                    console.log('oke');
                    $('#name-spec').empty();
                    $('#sanxuat-spec').empty();
                    $('#conlai-spec').empty();
                    $('#code-spec').empty();
                    $('#kichthuoc-spec').empty();
                    $('#gia-spec').empty();


                    $('#id-spec').attr('data-id',res.Id);
                    $('#id-spec').attr('data-slug',res.Slug);
                    $('.data-qty').attr('id',res.Slug);
                    $('#name-spec').html(res.Name);
                    $('#anhto-spec').attr('src',res.Photo.Large);
                    for (i=0;i<res.Photos.length;i++) {
                        $('.anhbe-spec-'+i).attr('src',res.Photos[''+i+''].Photos.Small);
                        $('.anhto-spec-'+i).attr('data-src',res.Photos[''+i+''].Photos.Large);
                    }
                    $('#sanxuat-spec').html(res.NhaSanXuat);
                    $('#conlai-spec').html(res.Amount);
                    $('#code-spec').html(res.Code);
                    $('#kichthuoc-spec').html(res.KichThuoc);
                    $('#gia-spec').html(res.Price);
                }

            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('click','.cart',function () {
            console.log('xxx');
            var id =  $(this).attr('data-id');
            var slug =  $(this).attr('data-slug');
            var qty =  $('#'+slug).val();
            var url = '/edit-cart' + '?id='+id+'&amount='+qty;
            console.log(url);
            $.ajax({
                type: "GET",
                url: url,
                data: {},
            }).done(function (res) {
                console.log(res);
                alert('Bạn đã thêm thành công giỏ hàng');
                $('#amount-spec').css('display','block');
                $('#amount-spec').empty();
                console.log(res.total);
                $('#amount-spec').html(res.total);

            });
        });
        $('body').on('change','.data-qty',function () {
            var value = $('.data-qty').val();
            var max = $('.data-qty').attr('max');
            console.log(value,max);
            if(parseInt(value)>parseInt(max)) {
                $('.data-qty').val(max);
            }
        });
    });
</script>

<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
</body>
</html>