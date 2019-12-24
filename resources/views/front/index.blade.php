@extends('/front/template')
@section('title')
   Trang chủ
@stop
@section('css')
    <style type="text/css">
        .animate_ftr {
            visibility:hidden!important;
        }
    </style>
@stop
@section('slider')
    <section class="revolution_slider">
        <div class="r_slider">
            <ul>
                {{--<li class="f_left" data-transition="curtain-1" data-slotamount="7" data-custom-thumb="/front/images/slide_02.jpg">--}}
                {{--<img src="/front/images/fw_slide_03.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">--}}
                {{--<div class="caption sfl str f_size_large color_light tt_uppercase slider_title_3" data-x="736" data-y="97" data-speed="500" data-start="2500">Meet New Theme</div>--}}
                {{--<div class="caption sfr stl slider_divider" data-x="787" data-y="129" data-speed="500" data-start="2500"></div>--}}
                {{--<div class="caption lft stb color_light slider_title tt_uppercase t_align_c" data-x="588" data-y="140" data-speed="1500" data-easing="easeOutBounce"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>--}}
                {{--<div class="caption sft stb color_light slider_title_2" data-x="761" data-y="272" data-speed="900" data-start="2300">$<b>15.00</b></div>--}}
                {{--<div class="caption sft stb color_light" data-x="742" data-y="335" data-speed="900" data-start="2600">--}}
                {{--<a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>--}}
                {{--</div>--}}
                {{--</li>--}}
                @foreach($slides as $slide)
                    <li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="/front/images/slide_01.jpg">
                        <img src="{{$slide['Photos']['Large']}}" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
                        {{--<div class="caption lft ltb f_size_large tt_uppercase slider_title_3 scheme_color" data-x="264" data-y="126" data-speed="300" data-start="1700">New arrivals</div>--}}
                        {{--<div class="caption sfb stt slider_divider type_2" data-x="298" data-y="153" data-speed="400" data-start="1700"></div>--}}
                        {{--<div class="caption lft ltb color_light slider_title tt_uppercase t_align_c" data-x="95" data-y="170" data-speed="500" data-easing="ease" data-start="1400"><b><span class="scheme_color">Spring/Summer 2014</span><br><span class="color_dark">Ready-To-Wear</span></b></div>--}}
                        {{--<div class="caption lfb ltt color_light" data-x="206" data-y="318" data-speed="500" data-start="1700">--}}
                            {{--<a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">View Collection</a>--}}
                        {{--</div>--}}
                    </li>
                @endforeach

                {{--<li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="/front/images/slide_03.jpg">--}}
                {{--<img src="/front/images/fw_slide_01.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">--}}
                {{--<div class="caption lft ltt" data-x="center" data-y="58" data-speed="1500" data-start="1200" data-easing="easeOutBounce">--}}
                {{--<img src="/front/images/slider_layer_img.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="caption sfb stb color_light slider_title tt_uppercase t_align_c" data-x="center" data-y="246" data-speed="1000" data-easing="ease" data-start="2500"><b class="color_dark">up to 70% off</b></div>--}}
                {{--<div class="caption sfb stb color_light" data-x="center" data-y="352" data-speed="1000" data-start="2900">--}}
                {{--<a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Shop Now</a>--}}
                {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>
    </section>
@stop
@section('content')
    <div style="display: none" class="row clearfix m_xs_bottom_30">
        <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_50 m_xs_bottom_0">
            <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="/front/images/banner_img_3.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
									</span>
								</span>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="/front/images/banner_img_4.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Free Shipping</b><br><span class="color_dark">On All Items</span>
									</span>
								</span>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="/front/images/banner_img_5.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Great Daily Deals</b><br><span class="color_dark">Shop Now!</span>
									</span>
								</span>
            </a>
        </div>
    </div>
    <!--filter navigation-->
    <div class="clearfix">
        <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large f_left f_xs_none m_xs_bottom_15" data-carousel-filter=".wfilter_carousel">

            <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover box_s_none" data-filter="*">Tất cả</button></li>
            @foreach($theloais as $index=>$theloai)
            <li class=" m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover box_s_none" data-filter="filter_class_{{$theloai['Id']}}">{{$theloai['Name']}}</button></li>
            @endforeach
        </ul>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 f_xs_none">
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners wfilter_prev"><i class="fa fa-angle-left"></i></button>
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners wfilter_next"><i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <!--carousel with filter-->
    <div class="wfilter_carousel m_bottom_30 m_xs_bottom_15">
        @foreach($sanphams as $index=>$sanpham)
        <figure class="r_corners photoframe shadow relative tr_all_hover filter_class_{{$sanpham['TheLoaiId']}} {{$index==0 ?'animate_ftb long':''}}">
            <!--product preview-->
            <a href="/sanphams/{{$sanpham['Slug']}}" class="d_block relative pp_wrap">
                <!--hot product-->
                {{--<span class="hot_stripe"><img src="/front/images/hot_product.png" alt=""></span>--}}
                <img src="{{$sanpham['Photo']['Medium']}}" class="tr_all_hover" alt="">
                {{--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none view-quick" data-id="{{$sanpham['Id']}}">Quick View</span>--}}
            </a>
            <!--description and price of product-->
            <figcaption>
                <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">{{$sanpham['Name']}}</a></h5>
                <div class="clearfix">
                    <p class="scheme_color f_left f_size_large m_bottom_15">VNĐ {{number_format($sanpham['Price'])}}</p>
                    <!--rating-->
                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                    </ul>
                </div>
                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0  add-cart" data-id="{{$sanpham['Id']}}">Thêm vào giỏ hàng</button>
            </figcaption>
        </figure>
        @endforeach
    </div>
    <!--blog-->
    <div class="row clearfix m_bottom_45 m_md_bottom_35 m_xs_bottom_30">
        <div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                <h2 class="color_dark f_left" style="font-weight: 500">Tin tức</h2>
                <div class="f_right clearfix nav_buttons_wrap">
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <!--blog carousel-->
            <div class="blog_carousel">
                @foreach($tintucs as $tintuc)
                <div class="clearfix">
                    <!--image-->
                    <a href="/tintuc/{{$tintuc['Id']}}" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                        <img class="tr_all_long_hover" src="{{$tintuc['Photos']['Small']}}" alt="">
                    </a>
                    <!--post content-->
                    <div class="mini_post_content">
                        <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>{{$tintuc['Name']}}</b></a></h4>
                        <p class="f_size_medium m_bottom_10 animate_ftr">{{$tintuc['Created_at']}}</p>
                        {{--25 January, 2013, 5 comments--}}
                        <p class="m_bottom_10 animate_ftr">{{$tintuc['ContentShort']}}</p>
                        <a class="tt_uppercase f_size_large animate_ftr" href="/tintuc/{{$tintuc['Id']}}">Read More</a>
                    </div>
                </div>
                @endforeach
                <div class="clearfix">
                    <!--image-->
                    <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                        <img class="tr_all_long_hover" src="/front/images/blog_img_2.jpg" alt="">
                    </a>
                    <!--post content-->
                    <div class="mini_post_content">
                        <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Cursus eleifend, elit aenean set amet lorem</b></a></h4>
                        <p class="f_size_medium m_bottom_10 animate_ftr">30 January, 2013, 6 comments</p>
                        <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                        <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--testimonials-->
        <div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                <h2 class="color_dark f_left f_mxs_none m_mxs_bottom_15">Đánh giá</h2>
                <div class="f_right clearfix nav_buttons_wrap f_mxs_none">
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <!--testimonials carousel-->
            <div class="testiomials_carousel">
                @foreach($binhluans as $index=>$binhluan)
                <div class="">
                    <blockquote class="spec-blockquote r_corners shadow f_size_large relative m_bottom_15 {{$index==0?"animate_ftr":""}} ">{{$binhluan['Comment']}}</blockquote>
                    <img class="circle m_left_20 d_inline_middle animate_ftr" src="/front/images/testimonial_img_1.jpg" alt="">
                    <div class="d_inline_middle m_left_15 animate_ftr">
                        <h5 class="color_dark"><b>{{$binhluan['UserName']}}</b></h5>
                        {{--<p>Los Angeles</p>--}}
                    </div>
                </div>
                @endforeach
                {{--<div>--}}
                    {{--<blockquote class="r_corners shadow f_size_large relative m_bottom_15">Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</blockquote>--}}
                    {{--<img class="circle m_left_20 d_inline_middle" src="/front/images/testimonial_img_2.jpg" alt="">--}}
                    {{--<div class="d_inline_middle m_left_15">--}}
                        {{--<h5 class="color_dark"><b>Alan Smith</b></h5>--}}
                        {{--<p>New York</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="clearfix">
        <h2 class="color_dark f_left m_bottom_15 f_mxs_none heading5 animate_ftr" style="font-weight: 500">Sản phẩm bán chạy</h2>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners bestsellers_prev"><i class="fa fa-angle-left"></i></button>
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners bestsellers_next"><i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <!--bestsellers carousel-->
    <div class="bestsellers_carousel m_bottom_30 m_xs_bottom_15">
        @foreach($sanphamRandoms as $sanphamRandom)
            <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
            <!--product preview-->
            <a href="#" class="d_block relative pp_wrap">
                <!--hot product-->
                {{--<span class="hot_stripe type_2"><img src="images/hot_product_type_2.png" alt=""></span>--}}
                <img src="{{$sanphamRandom['Photo']['Medium']}}" class="tr_all_hover" alt="">
                {{--<span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>--}}
            </a>
            <!--description and price of product-->
            <figcaption>
                <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">{{$sanphamRandom['Name']}}</a></h5>
                <div class="clearfix">
                    <p class="scheme_color f_left f_size_large m_bottom_15">VNĐ {{ number_format($sanphamRandom['Price'])}}</p>
                    <!--rating-->
                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                    </ul>
                </div>
                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 add-cart" data-id="{{$sanphamRandom['Id']}}">Thêm vào giỏ hàng</button>
            </figcaption>
        </figure>
        @endforeach
    </div>
    <!--banners-->

@stop
@section('js')
@stop