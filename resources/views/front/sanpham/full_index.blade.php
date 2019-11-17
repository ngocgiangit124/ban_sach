@extends('/front/template')
@section('title')
    Danh mục sản phẩm
@stop
@section('css')
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/settings.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/jquery.custom-scrollbar.css">
@stop

@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-9 col-md-9 col-sm-9">
            <!--categories nav-->
            <!--sort-->
            <div class="row clearfix m_bottom_15">
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 m_xs_bottom_10">
                    <p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Results 1 - 5 of 45</p>
                    <p class="d_inline_middle f_size_medium m_left_20 m_xs_left_0">Show:</p>
                    <!--show items per page select-->
                    <div class="custom_select f_size_medium relative d_inline_middle m_left_5">
                        <div class="select_title r_corners relative color_dark">9</div>
                        <ul class="select_list d_none"></ul>
                        <select name="show">
                            <option value="Manufacture 1">6</option>
                            <option value="Manufacture 2">3</option>
                            <option value="Manufacture 3">1</option>
                        </select>
                    </div>
                    <p class="d_inline_middle f_size_medium m_left_5">items per page</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4 t_align_r t_xs_align_l">
                    <!--pagination-->
                    <a role="button" href="{{$paginate['prev_page_url']}}" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
                    <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                        @for($i=1 ; $i<=$paginate['last_page'];$i++)
                            <li class="{{$i==$paginate['from']?'active':''}} m_right_10"><a class="{{$i==$paginate['from']?'scheme_color':'color_dark'}}" href="{{$i!=$paginate['from'] ? $paginate['path'].'?'.'page='.$i : 'javascript:'}}">{{$i}}</a></li>
                        @endfor
                    </ul>
                    <a role="button" href="{{$paginate['next_page_url']}}" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!--products-->
            <section class="products_container category_grid clearfix m_bottom_15">
                <!--product item-->
                @foreach($sanphams as $sanpham)
                    <div class="product_item hit w_xs_full">
                        <figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">
                            <!--product preview-->
                            <a href="/sanphams/{{$sanpham['Slug']}}" class="d_block relative wrapper pp_wrap m_bottom_15">
                                <img src="{{$sanpham['Photo']['Medium']}}" class="tr_all_hover" alt="">
                                <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">{{$sanpham['Name']}}</a></h5>
                                <!--rating-->
                                <ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
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
                                <p class="scheme_color f_size_large m_bottom_15">VNĐ {{$sanpham['Price']}}</p>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15  add-cart" data-id="{{$sanpham['Id']}}">Add to Cart</button>
                            </figcaption>
                        </figure>
                    </div>
            @endforeach
            <!--product item-->
            </section>
            <hr class="m_bottom_10 divider_type_3">
            <div class="row clearfix m_bottom_15 m_xs_bottom_30">
                <div class="col-lg-7 col-md-7 col-sm-8 m_xs_bottom_10">
                    <p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Results 1 - 5 of 45</p>
                    <p class="d_inline_middle f_size_medium m_left_20 m_xs_left_0">Show:</p>
                    <!--show items per page select-->
                    <div class="custom_select f_size_medium relative d_inline_middle m_left_5">
                        <div class="select_title r_corners relative color_dark">9</div>
                        <ul class="select_list d_none"></ul>
                        <select name="show_second">
                            <option value="Manufacture 1">6</option>
                            <option value="Manufacture 2">3</option>
                            <option value="Manufacture 3">1</option>
                        </select>
                    </div>
                    <p class="d_inline_middle f_size_medium m_left_5">items per page</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4 t_align_r t_xs_align_l">
                    <!--pagination-->
                    <a role="button" href="{{$paginate['prev_page_url']}}" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
                    <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                        @for($i=1 ; $i<=$paginate['last_page'];$i++)
                            <li class="{{$i==$paginate['from']?'active':''}} m_right_10"><a class="{{$i==$paginate['from']?'scheme_color':'color_dark'}}" href="{{$i!=$paginate['from'] ? $paginate['path'].'?'.'page='.$i : 'javascript:'}}">{{$i}}</a></li>
                        @endfor
                    </ul>
                    <a role="button" href="{{$paginate['next_page_url']}}" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </section>
        <!--right column-->
        <aside class="col-lg-3 col-md-3 col-sm-3">
            <!--widgets-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Categories</h3>
                </figcaption>
                <div class="widget_content">
                    <!--Categories list-->
                    <ul class="categories_list">
                        @foreach($danhmuc_theloais as $danhmuc_theloai)
                            <li class="">
                                <a href="/theloai/{{$danhmuc_theloai['Slug']}}/sanpham" class="f_size_large scheme_color d_block relative">
                                    <b>{{$danhmuc_theloai['Name']}}</b>
                                </a>
                                <!--second level-->
                            </li>
                        @endforeach
                    </ul>
                </div>
            </figure>
            <!--compare products-->
            <!--banner-->
            <a href="#" class="d_block r_corners m_bottom_30">
                <img src="/front/images/banner_img_6.jpg" alt="">
            </a>
            <!--Bestsellers-->
        </aside>
    </div>


    {{--///------------------}}
@stop
@section('js')
    <script src="/front/js/jquery-ui.min.js"></script>
    {{--<script src="/front/js/retina.js"></script>--}}
    <script src="/front/js/waypoints.min.js"></script>
    <script src="/front/js/jquery.isotope.min.js"></script>
    <script src="/front/js/jquery.tweet.min.js"></script>
    <script src="/front/js/owl.carousel.min.js"></script>
    <script src="/front/js/jquery.custom-scrollbar.js"></script>
    <script src="/front/js/scripts.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#product').change(function () {
                console.log($('#product').val());
//                ??
            });
        });

    </script>
@stop