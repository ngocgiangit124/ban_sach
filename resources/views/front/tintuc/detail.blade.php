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
                        <p class="f_size_medium">{{$news['Created_at']}}, <a href="#" class="color_dark">12 comments</a>, on <a href="#" class="color_dark">Fashion</a></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 t_align_r t_xs_align_l">
                        <p class="f_size_medium d_xs_inline_middle">Rate this item</p>
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
                        <a href="#" class="d_inline_middle f_size_medium default_t_color m_left_5">(1 Vote)</a>
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
                <p class="d_inline_middle">Share this:</p>
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
            <hr class="divider_type_3 m_bottom_10">
            <p class="m_bottom_10">More in this category: <a href="#" class="color_dark">Phasellus ullamcorper blandit leo, id pharetra leo » </a></p>
            <hr class="divider_type_3 m_bottom_45">
            <!--comments-->
            <h2 class="color_dark m_bottom_30">Comments</h2>
            <div class="m_bottom_45">
                <!--comment first level-->
                <div class="clearfix comment_wrap m_bottom_25">
                    <!--comment author photo-->
                    <img src="/front/images/testimonial_img_1.jpg" class="f_left circle" alt="">
                    <div class="comment_content_wrap">
                        <header class="m_bottom_5">
                            <a href="#" class="color_dark"><b>Marta Healy</b></a> - 2014-01-19 17:15
                            <a href="#" class="f_right color_dark">Quote</a>
                        </header>
                        <div class="comment relative bg_light_color_3 r_corners shadow">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</div>
                    </div>
                </div>
                <!--comment second level-->
                <div class="clearfix comment_wrap m_left_20 m_bottom_25">
                    <!--comment author photo-->
                    <img src="/front/images/testimonial_img_2.jpg" class="f_left circle" alt="">
                    <div class="comment_content_wrap">
                        <header class="m_bottom_5">
                            <a href="#" class="color_dark"><b>Alan Smith</b></a> - 2014-01-19 17:15
                            <a href="#" class="f_right color_dark">Quote</a>
                        </header>
                        <div class="comment relative bg_light_color_3 r_corners shadow">Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                    </div>
                </div>
                <!--comment first level-->
                <div class="clearfix comment_wrap">
                    <!--comment author photo-->
                    <img src="/front/images/testimonial_img_3.jpg" class="f_left circle" alt="">
                    <div class="comment_content_wrap">
                        <header class="m_bottom_5">
                            <a href="#" class="color_dark"><b>Anna Johnson</b></a> - 2014-01-19 17:15
                            <a href="#" class="f_right color_dark">Quote</a>
                        </header>
                        <div class="comment relative bg_light_color_3 r_corners shadow">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa.</div>
                    </div>
                </div>
            </div>
            <!--add comment-->
            <h2 class="color_dark m_bottom_30">Add Comment</h2>
            <form class="bs_inner_offsets full_width bg_light_color_3 r_corners shadow m_xs_bottom_30">
                <ul>
                    <li class="clearfix m_bottom_15">
                        <div class="f_left half_column f_xs_none w_xs_full p_xs_hr_0 m_xs_bottom_15">
                            <label for="name" class="d_inline_b m_bottom_5">Name (required)</label><br>
                            <input type="text" id="name" name="" class="r_corners full_width">
                        </div>
                        <div class="f_left half_column f_xs_none w_xs_full p_xs_hr_0">
                            <label for="email" class="d_inline_b m_bottom_5">Email (required, but will not display)</label><br>
                            <input type="email" id="email" name="" class="r_corners full_width">
                        </div>
                    </li>
                    <li class="m_bottom_15">
                        <label for="website" class="d_inline_b m_bottom_5">Website</label><br>
                        <input type="url" id="website" name="" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_15">
                        <label for="comments" class="d_inline_b m_bottom_5">Comments</label><br>
                        <textarea id="comments" name="" class="r_corners full_width"></textarea>
                    </li>
                    <li class="m_bottom_15">
                        <input type="checkbox" class="d_none" id="checkbox_1"><label for="checkbox_1">Notify me of follow-up comments</label>
                    </li>
                    <li class="m_bottom_20">
                        <img src="/front/images/capcha.jpg" alt="" class="v_align_bottom">
                        <a href="#" class="color_dark d_inline_b m_left_10 v_align_bottom"><i class="fa fa-refresh m_right_5"></i>Refresh</a>
                    </li>
                    <li class="m_bottom_20">
                        <input type="text" id="capcha" name="" class="r_corners full_width">
                    </li>
                    <li class="m_bottom_10">
                        <button class="r_corners button_type_4 bg_light_color_2 mw_0 color_dark tr_all_hover">Submit</button>
                    </li>
                </ul>
            </form>
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
            <a href="#" class="d_block r_corners m_bottom_30">
                <img src="/front/images/banner_img_6.jpg" alt="">
            </a>
            <!--Popular articles-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Popular Articles</h3>
                </figcaption>
                <div class="widget_content">
                    <article class="clearfix m_bottom_15">
                        <img src="/front/images/article_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
                        <p class="f_size_medium">50 comments</p>
                    </article>
                    <hr class="m_bottom_15">
                    <article class="clearfix m_bottom_15">
                        <img src="/front/images/article_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
                        <p class="f_size_medium">34 comments</p>
                    </article>
                    <hr class="m_bottom_15">
                    <article class="clearfix m_bottom_5">
                        <img src="/front/images/article_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
                        <p class="f_size_medium">21 comments</p>
                    </article>
                </div>
            </figure>
            <!--Bestsellers-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Bestsellers</h3>
                </figcaption>
                <div class="widget_content">
                    <div class="clearfix m_bottom_15">
                        <img src="/front/images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
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
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Latest Articles</h3>
                </figcaption>
                <div class="widget_content">
                    <article class="clearfix m_bottom_15">
                        <img src="/front/images/article_img_4.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
                        <p class="f_size_medium">25 January, 2013</p>
                    </article>
                    <hr class="m_bottom_15">
                    <article class="clearfix m_bottom_15">
                        <img src="/front/images/article_img_5.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
                        <p class="f_size_medium">21 January, 2013</p>
                    </article>
                    <hr class="m_bottom_15">
                    <article class="clearfix m_bottom_5">
                        <img src="/front/images/article_img_6.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
                        <p class="f_size_medium">18 January, 2013</p>
                    </article>
                </div>
            </figure>
            <!--tags-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">Tags</h3>
                </figcaption>
                <div class="widget_content">
                    <div class="tags_list">
                        <a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
                        <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
                        <a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
                        <a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">short,</a>
                        <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
                        <a href="#" class="color_dark d_inline_b v_align_b">top,</a>
                        <a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
                    </div>
                </div>
            </figure>
        </aside>
    </div>
@stop
@section('js')
@stop