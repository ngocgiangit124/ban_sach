@extends('/front/template')
@section('title')
    Giới thiệu
@stop
@section('css')
@stop

@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-9 col-md-9 col-sm-9">
            <h2 class="color_dark m_bottom_25">Tin tức</h2>
            <!--blog post-->
            @foreach($newss as $news)
            <article class="m_bottom_20 clearfix">
                <a href="/tintuc/{{$news['Slug']}}" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                    <img src="{{$news['Photos']['Medium']}}" class="tr_all_long_hover" alt="">
                </a>
                <div class="mini_post_content">
                    <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">{{$news['Name']}}</a></h4>
                    <p class="f_size_medium m_bottom_10">{{$news['Created_at']}} <a href="#" class="color_dark">33 comments</a>, on <a href="#" class="color_dark">New Arrivals</a></p>
                    <hr>
                    <div class="rating_min_article">
                        <p class="f_size_medium d_inline_middle d_sm_block d_xs_inline_middle">Rate this item</p>
                        <!--rating-->
                        <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover m_left_5 m_sm_left_0">
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
                        <a href="#" class="d_inline_middle f_size_medium default_t_color m_left_5">(3 Votes)</a>
                    </div>
                    <hr class="m_bottom_15">
                    <p class="m_bottom_10">{!! $news['ContentShort'] !!}</p>
                    <a href="/tintuc/{{$news['Slug']}}" class="tt_uppercase f_size_large">Read More</a>
                </div>
            </article>
            <hr class="divider_type_3 m_bottom_30">
            @endforeach
            <div class="row clearfix m_xs_bottom_30">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
                    <p class="d_inline_middle f_size_medium">Results 1 - 5 of 45</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-7 t_align_r">
                    <!--pagination-->
                    <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
                    <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                        <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                        <li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
                        <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                    </ul>
                    <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </section>
        <!--right column-->
        <aside class="col-lg-3 col-md-3 col-sm-3">
            <!--widgets-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Blog Categories</h3>
                </figcaption>
                <div class="widget_content">
                    <!--Categories list-->
                    <ul class="categories_list">
                        <li class="active">
                            <a href="#" class="f_size_large color_dark d_block">
                                <b>Fashion</b>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="f_size_large color_dark d_block">
                                <b>Trends</b>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="f_size_large color_dark d_block">
                                <b>New Arrivals</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </figure>
            <!--banner-->
            <a href="#" class="d_block d_xs_inline_b r_corners m_bottom_30">
                <img src="images/banner_img_6.jpg" alt="">
            </a>
            <!--Specials-->
            <figure class="widget shadow r_corners wrapper m_bottom_30" style="display: none">
                <figcaption class="clearfix relative">
                    <h3 class="color_light f_left f_sm_none m_sm_bottom_10 m_xs_bottom_0">Specials</h3>
                    <div class="f_right nav_buttons_wrap_type_2 tf_sm_none f_sm_none clearfix">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left tr_delay_hover r_corners sc_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left m_left_5 tr_delay_hover r_corners sc_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </figcaption>
                <div class="widget_content">
                    <div class="specials_carousel">
                        <!--carousel item-->
                        <div class="specials_item">
                            <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                <img class="tr_all_long_hover" src="images/product_img_6.jpg" alt="">
                            </a>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                            <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                            <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                        </div>
                        <!--carousel item-->
                        <div class="specials_item">
                            <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                <img class="tr_all_long_hover" src="images/product_img_7.jpg" alt="">
                            </a>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">Integer rutrum ante </a></h5>
                            <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                            <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                        </div>
                        <!--carousel item-->
                        <div class="specials_item">
                            <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                <img class="tr_all_long_hover" src="images/product_img_5.jpg" alt="">
                            </a>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                            <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                            <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </figure>
        </aside>
    </div>
@stop
@section('js')
@stop