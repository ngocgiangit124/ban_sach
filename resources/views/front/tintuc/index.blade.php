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
                    <p class="f_size_medium m_bottom_10">{{$news['Created_at']}} <a href="#" class="color_dark"></a></p>
                    <hr>
                    <div class="rating_min_article">
                        <p class="f_size_medium d_inline_middle d_sm_block d_xs_inline_middle">Đánh giá</p>
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
                        <a href="#" class="d_inline_middle f_size_medium default_t_color m_left_5"></a>
                    </div>
                    <hr class="m_bottom_15">
                    <p class="m_bottom_10">{!! $news['ContentShort'] !!}</p>
                    <a href="/tintuc/{{$news['Slug']}}" class="tt_uppercase f_size_large">Xem thêm</a>
                </div>
            </article>
            <hr class="divider_type_3 m_bottom_30">
            @endforeach
            <div class="row clearfix m_xs_bottom_30">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
                    {{--<p class="d_inline_middle f_size_medium">Results 1 - 5 of 45</p>--}}
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
                    <h3 class="color_light">Danh mục</h3>
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
@stop
@section('js')
@stop