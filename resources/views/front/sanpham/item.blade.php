<!--left popup column-->
<link rel="stylesheet" type="text/css" media="all" href="/front/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="/front/css/settings.css">
<link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" media="all" href="/front/css/jquery.custom-scrollbar.css">
<link rel="stylesheet" type="text/css" media="all" href="/front/css/style.css?v=1">
<script src="/front/js/modernizr.js"></script>
<div class="f_left half_column">
    <div class="relative d_inline_b m_bottom_10 qv_preview">
        {{--<span class="hot_stripe"><img src="/front/images/sale_product.png" alt=""></span>--}}
        @foreach($sanpham['Photos'] as $index=>$photo)
            @if($index==0)
                <img src="{{$photo['Photos']['Large']}}" class="tr_all_hover" alt="">
            @endif
        @endforeach
    </div>
    <!--carousel-->
    <div class="relative qv_carousel_wrap m_bottom_20">
        <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
            <i class="fa fa-angle-left "></i>
        </button>
        <ul class="qv_carousel d_inline_middle">
            @foreach($sanpham['Photos'] as $index=>$photo)
                <li data-src="{{$photo['Photos']['Large']}}"><img src="{{$photo['Photos']['Small']}}" alt=""></li>
            @endforeach
        </ul>
        <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
            <i class="fa fa-angle-right "></i>
        </button>
    </div>
    <div class="d_inline_middle">Share this:</div>
    <div class="d_inline_middle m_left_5">
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
<!--right popup column-->
<div class="f_right half_column">
    <!--description-->
    <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">{{$sanpham['Name']}}</a></h2>
    <div class="m_bottom_10">
        <!--rating-->
        <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
    </div>
    <hr class="m_bottom_10 divider_type_3">
    <table class="description_table m_bottom_10">
        <tr>
            <td>Sản xuất:</td>
            <td><a href="#" class="color_dark">{{$sanpham['NhaSanXuat']}}</a></td>
        </tr>
        <tr>
            <td>Số sản phẩm:</td>
            <td>{{$sanpham['Amount']}} sản phẩm</td>
        </tr>
        <tr>
            <td>Mã Sản Phẩm:</td>
            <td>{{$sanpham['Code']}}</td>
        </tr>
    </table>
    <h5 class="fw_medium m_bottom_10">Kích thước và Khối lượng sản phẩm :</h5>
    <table class="description_table m_bottom_5">
        <tr>
            <td>Kích thước:</td>
            <td><span class="color_dark">{{$sanpham['KichThuoc']}}</span></td>
        </tr>
        <tr>
            <td>Khối lượng:</td>
            <td>0,5KG</td>
        </tr>
    </table>
    <hr class="divider_type_3 m_bottom_10">
    <p class="m_bottom_10">////</p>
    <hr class="divider_type_3 m_bottom_15">
    <div class="m_bottom_15">
        <span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">VNĐ {{ $sanpham['Price'] }}</span>
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
                    <input type="text" name="" readonly value="1" class="f_left">
                    <button class="bg_tr d_block f_left" data-direction="up">+</button>
                </div>
            </td>
        </tr>
    </table>
    <div class="clearfix m_bottom_15">
        <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large cart">Thêm vào giỏ</button>
        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
        <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
    </div>
</div>
<script src="/front/js/jquery-2.1.0.min.js"></script>
{{--<script src="/front/js/retina.js"></script>--}}
<script src="/front/js/jquery.themepunch.plugins.min.js"></script>
<script src="/front/js/jquery.themepunch.revolution.min.js"></script>
<script src="/front/js/waypoints.min.js"></script>
<script src="/front/js/owl.carousel.min.js"></script>
<script src="/front/js/jquery.tweet.min.js"></script>
<script src="/front/js/jquery.custom-scrollbar.js"></script>
<script src="/front/js/scripts.js"></script>