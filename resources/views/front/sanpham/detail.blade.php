@extends('/front/template')
@section('title')
    Sản Phẩm
@stop
@section('css')
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/jquery.custom-scrollbar.css">
    <!--font include-->
    <link href="/front/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
    <div class="clearfix m_bottom_30 t_xs_align_c">
        <div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
            @foreach($sanpham['Photos'] as $index=>$photo)
                @if($index==0)
                    {{--<span class="hot_stripe"><img src="{{$photo['Photos']['Large']}}" alt=""></span>--}}
                    <div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
                        <img id="zoom_image" src="{{$photo['Photos']['Large']}}" data-zoom-image="{{$photo['Photos']['Large']}}" class="tr_all_hover" alt="">
                        {{--<a href="{{$photo['Photos']['Large']}}" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">--}}
                            {{--<i class="fa fa-expand"></i>--}}
                        {{--</a>--}}
                    </div>
                @endif
            @endforeach
            <!--carousel-->
            <div class="relative qv_carousel_wrap">
                <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
                    <i class="fa fa-angle-left "></i>
                </button>
                <ul class="qv_carousel_single d_inline_middle">
                    @foreach($sanpham['Photos'] as $index=>$photo)
                        <a href="#" data-image="{{$photo['Photos']['Large']}}" data-zoom-image="{{$photo['Photos']['Large']}}"><img src="{{$photo['Photos']['Small']}}" alt=""></a>
                    @endforeach
                    {{--<a href="#" data-image="/front/images/quick_view_img_8.jpg" data-zoom-image="/front/images/preview_zoom_2.jpg"><img src="/front/images/quick_view_img_11.jpg" alt=""></a>--}}
                    {{--<a href="#" data-image="/front/images/quick_view_img_9.jpg" data-zoom-image="/front/images/preview_zoom_3.jpg"><img src="/front/images/quick_view_img_12.jpg" alt=""></a>--}}
                    {{--<a href="#" data-image="/front/images/quick_view_img_16.jpg" data-zoom-image="/front/images/preview_zoom_4.jpg"><img src="/front/images/quick_view_img_13.jpg" alt=""></a>--}}
                    {{--<a href="#" data-image="/front/images/quick_view_img_17.jpg" data-zoom-image="/front/images/preview_zoom_5.jpg"><img src="/front/images/quick_view_img_14.jpg" alt=""></a>--}}
                    {{--<a href="#" data-image="/front/images/quick_view_img_18.jpg" data-zoom-image="/front/images/preview_zoom_6.jpg"><img src="/front/images/quick_view_img_15.jpg" alt=""></a>--}}
                </ul>
                <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
                    <i class="fa fa-angle-right "></i>
                </button>
            </div>
        </div>
        <div class="p_top_10 t_xs_align_l">
            <!--description-->
            <h2 class="color_dark fw_medium m_bottom_10">{{$sanpham['Name']}}</h2>
            <div class="m_bottom_10">
                <!--rating-->
                <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
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
                {{--<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>--}}
            </div>
            <hr class="m_bottom_10 divider_type_3">
            <table class="description_table m_bottom_10">
                <tr>
                    <td>Sản xuất:</td>
                    <td><a href="#" class="color_dark">{{$sanpham['NhaSanXuat']}}</a></td>
                </tr>
                <tr>
                    <td>Số sản phẩm còn lại </td>
                    <td> :   {{$sanpham['Amount']}} sản phẩm</td>
                </tr>
                <tr>
                    <td>Mã sản phẩm:</td>
                    <td>{{$sanpham['Code']}}</td>
                </tr>
            </table>
            <h5 class="fw_medium m_bottom_10">Kích thước và trọng lượng sản phẩm</h5>
            <table class="description_table m_bottom_5">
                <tr>
                    <td>Kích cỡ:</td>
                    <td><span class="color_dark">{{$sanpham['KichThuoc']}}</span></td>
                </tr>
                <tr>
                    <td>Khối lượng:</td>
                    <td>0,5KG</td>
                </tr>
            </table>
            <hr class="divider_type_3 m_bottom_10">
            <p class="m_bottom_10">Nhà Sản Xuất : {{$sanpham['NhaSanXuat']}}, Bảo Hành : {{$sanpham['BaoHanh']}}, Màu sắc : {{$sanpham['MauSac']}} </p>
            <hr class="divider_type_3 m_bottom_15">
            <div class="m_bottom_15">
                {{--<s class="v_align_b f_size_ex_large">VNĐ {{$sanpham['Price']}}</s>--}}
                <span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">VNĐ {{number_format($sanpham['Price'])}}</span>
            </div>
            <table class="description_table type_2 m_bottom_15">
                {{--<tr>--}}
                    {{--<td class="v_align_m">Size:</td>--}}
                    {{--<td class="v_align_m">--}}
                        {{--<div class="custom_select f_size_medium relative d_inline_middle">--}}
                            {{--<div class="select_title r_corners relative color_dark">s</div>--}}
                            {{--<ul class="select_list d_none"></ul>--}}
                            {{--<select name="product_name">--}}
                                {{--<option value="s">s</option>--}}
                                {{--<option value="m">m</option>--}}
                                {{--<option value="l">l</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                <tr>
                    <td class="v_align_m">Số lượng:</td>
                    <td class="v_align_m">
                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                            <button class="bg_tr d_block f_left" data-direction="down">-</button>
                            <input type="text" name=""  readonly value="1" class="f_left data-qty" id="{{$sanpham['Slug']}}">
                            <button class="bg_tr d_block f_right" data-direction="up">+</button>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="d_ib_offset_0 m_bottom_20">
                <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large cart" data-slug="{{$sanpham['Slug']}}" data-id="{{$sanpham['Id']}}">Thêm vào giỏ hàng</button>
                {{--<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span><i class="fa fa-heart-o f_size_big"></i></button>--}}
                {{--<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span><i class="fa fa-files-o f_size_big"></i></button>--}}
                {{--<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>--}}
            </div>
            <p class="d_inline_middle">Chia sẻ:</p>
            <div class="d_inline_middle m_left_5 addthis_widget_container">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </div>
    <!--tabs-->
    <div class="tabs m_bottom_45">
        <!--tabs navigation-->
        <nav>
            <ul class="tabs_nav horizontal_list clearfix">
                <li class="f_xs_none"><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Mô tả</a></li>
                <li class="f_xs_none"><a href="#tab-3" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đánh giá</a></li>
                <li class="f_xs_none"><a href="#tab-4" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đọc sách</a></li>
            </ul>
        </nav>
        <section class="tabs_content shadow r_corners">
            <div id="tab-1">
             {!! $sanpham['Description'] !!}
            </div>
            <div id="tab-3">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h5 class="fw_medium m_bottom_15">Đánh giá</h5>
                        <!--review-->
                        @foreach($sanpham['Comments'] as $cm)
                        <article>
                            <div class="clearfix m_bottom_10">
                                <p class="f_size_medium f_left f_mxs_none m_mxs_bottom_5">Bởi {{$cm['UserName']}} - {{$cm['Created_at']}} </p>
                                {{--Thursday, 26 December 2013--}}
                                <!--rating-->
                                <ul class="horizontal_list f_right f_mxs_none clearfix rating_list type_2">
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
                            <p class="m_bottom_15">{{$cm['Comment']}}</p>
                        </article>
                        <hr class="m_bottom_15">
                        @endforeach

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h5 class="fw_medium m_bottom_15">Viết Đánh Giá</h5>
                        <p class="f_size_medium m_bottom_15">Viết nhận xét của bạn về sản phẩm....( tối đa. 2000 từ)</p>
                        <form action="/comments" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Id" value="{{$auth?$auth->NguoiDungId:''}}" />
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="ProductId" value="{{$sanpham['Id']}}" />
                            <textarea name="Comment" class="r_corners full_width m_bottom_10 review_tarea"></textarea>
                            <p class="f_size_medium m_bottom_5">Chọn đánh giá sao 0 đến 5</p>
                            <div class="d_table full_width m_bottom_10 d_md_block">
                                <div class="d_table_cell m_md_bottom_5 v_align_m d_md_block">
                                    <p class="f_size_medium d_inline_middle m_right_5">Số Sao:</p>
                                    <!--rating-->
                                    <ul class="horizontal_list clearfix rating_list type_2 d_inline_middle">
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
                                {{--<div class="f_size_medium m_bottom_10 d_table_cell d_md_block t_md_align_l t_align_r">--}}
                                    {{--<p class="d_inline_middle">Characters written:</p>--}}
                                    {{--<input type="text" class="r_corners d_inline_middle type_2 m_left_5 m_sm_left_0 m_xs_left_5 mxw_0 small_field" value="0">--}}
                                {{--</div>--}}
                            </div>
                            <button type="submit" class="r_corners button_type_4 tr_all_hover mw_0 color_dark bg_light_color_2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="tab-4">
              {!! $sanpham['Xem'] !!}
            </div>
        </section>
    </div>
    <div class="clearfix">
        <h2 class="color_dark f_left m_bottom_15 f_mxs_none" style="font-weight: 500">Sản phẩm liên quan</h2>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <div class="related_projects product_full_width m_bottom_15">
        @foreach($sanphamRandoms as $sanphamRandom)
        <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
            <!--product preview-->
            <a href="#" class="d_block relative pp_wrap">
                <!--hot product-->
                {{--<span class="hot_stripe type_2"><img src="/front/images/hot_product_type_2.png" alt=""></span>--}}
                <img style="width: 240px" src="{{$sanphamRandom['Photo']['Small']}}" class="tr_all_hover" alt="">
                {{--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>--}}
            </a>
            <!--description and price of product-->
            <figcaption class="t_xs_align_l">
                <h5 class="m_bottom_10"><a href="/sanphams/{{$sanphamRandom['Id']}}" class="color_dark ellipsis">{{$sanphamRandom['Name']}}</a></h5>

                <div class="clearfix">
                    <p class="scheme_color f_left f_size_large m_bottom_15">VNĐ {{number_format($sanphamRandom['Price'])}}</p>
                    <!--rating-->

                </div>
                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 add-cart" data-id="{{$sanphamRandom['Id']}}">Thêm giỏ hàng</button>
            </figcaption>
        </figure>
        @endforeach
    </div>
    <hr class="divider_type_3 m_bottom_15">
    {{--<a href="category_grid.html" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>Back to: Woman</a>--}}



    {{--//--------------------------------}}
@stop
@section('js')
    <script src="/front/js/jquery-ui.min.js"></script>
    <script src="/front/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/front/js/retina.js"></script>
    <script src="/front/js/elevatezoom.min.js"></script>
    <script src="/front/js/waypoints.min.js"></script>
    <script src="/front/js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
    <script src="/front/js/owl.carousel.min.js"></script>
    <script src="/front/js/jquery.custom-scrollbar.js"></script>
    <script src="/front/js/jquery.fancybox-1.3.4.js"></script>
@stop