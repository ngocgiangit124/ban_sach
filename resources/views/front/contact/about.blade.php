@extends('/front/template')
@section('title')
    Giới thiệu
@stop
@section('css')
@stop

@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-12 col-md-12 col-sm-12">
            <!--blog post-->
            <article class="m_bottom_15" >
                <div class="row clearfix m_bottom_15" style="text-align: center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10">Giới thiệu về chúng tôi</h2>
                        {{--<p class="f_size_medium">25 January, 2013, <a href="#" class="color_dark">12 comments</a>, on <a href="#" class="color_dark">Fashion</a></p>--}}
                    </div>
                </div>
                <a href="javascript:" class="d_block photoframe r_corners wrapper shadow m_bottom_15" style="text-align: center">
                    <img src="{{$gioithieu['Photos']['Large']}}" class="tr_all_long_hover" alt="">
                </a>
                <!--post content-->
                {!! $gioithieu['Description'] !!}
                <p>

                </p>
            </article>
            <div class="m_bottom_30">
                <p class="d_inline_middle">Chia sẻ</p>
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
    </div>
@stop
@section('js')
@stop