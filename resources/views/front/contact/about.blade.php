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
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10">About US</h2>
                        <p class="f_size_medium">25 January, 2013, <a href="#" class="color_dark">12 comments</a>, on <a href="#" class="color_dark">Fashion</a></p>
                    </div>
                </div>
                <a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_15">
                    <img src="/front/images/blog_img_4.jpg" class="tr_all_long_hover" alt="">
                </a>
                <!--post content-->
                {{--{{$about['Content']}}--}}
                <p class="m_bottom_15">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. <a href="#" class="color_dark">Sed laoreet aliquam</a> leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                <ul class="vertical_list_type_2 m_left_20">
                    <li class="m_bottom_15">Alesuada at, neque. Vivamus eget nibh. </li>
                    <li class="m_bottom_15">Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </li>
                    <li class="m_bottom_15">Vestibulum ante ipsum primis in faucibus orci.</li>
                </ul>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <a href="#" class="color_dark">Suspendisse sollicitudin</a> velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede </p>
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
        </section>
        <!--right column-->
    </div>
@stop
@section('js')
@stop