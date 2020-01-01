@extends('/front/template')
@section('title')
   Tin tức
@stop
@section('css')
@stop

@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-9 col-md-9 col-sm-9">
            <!--blog post-->
            <article class="m_bottom_15">
                <div class="row clearfix m_bottom_15">
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10">{{$news['Name']}}</h2>
                        <p class="f_size_medium">{{$news['Created_at']}}, <a href="#" class="color_dark"></a></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 t_align_r t_xs_align_l">
                        <!--rating-->
                    </div>
                </div>
                <a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_15">
                    <img src="{{$news['Photos']['Large']}}" class="tr_all_long_hover" alt="">
                </a>
                <!--post content-->
                <p>
                    {!! $news['Description'] !!}
                </p>
            </article>
            <div class="m_bottom_30">
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
            {{--<hr class="divider_type_3 m_bottom_10">--}}
            {{--<p class="m_bottom_10">More in this category: <a href="#" class="color_dark">Phasellus ullamcorper blandit leo, id pharetra leo » </a></p>--}}
            <hr class="divider_type_3 m_bottom_45">
            <!--comments-->
        </section>
        <!--right column-->
        <aside class="col-lg-3 col-md-3 col-sm-3">
            <!--banner-->
            <a href="#" class="d_block r_corners m_bottom_30">
                <img src="/front/images/banner_img_6.jpg" alt="">
            </a>
            <!--Popular articles-->
            <!--Bestsellers-->
            <figure class="widget shadow r_corners wrapper m_bottom_30" style="display: none">
                <figcaption>
                    <h3 class="color_light">Bestsellers</h3>
                </figcaption>
                <div class="widget_content">
                    <div class="clearfix m_bottom_15">
                        <img src="/front/images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                        <!--rating-->
                        <p class="scheme_color">$61.00</p>
                    </div>
                    <hr class="m_bottom_15">
                    <div class="clearfix m_bottom_15">
                        <img src="/front/images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link">Elementum vel</a>
                        <!--rating-->
                        <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
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
                        <p class="scheme_color">$57.00</p>
                    </div>
                    <hr class="m_bottom_15">
                    <div class="clearfix m_bottom_5">
                        <img src="/front/images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
                        <!--rating-->
                        <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
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
                        <p class="scheme_color">$24.00</p>
                    </div>
                </div>
            </figure>
            <!--Latest articles-->
            <!--tags-->
        </aside>
    </div>
@stop
@section('js')
@stop