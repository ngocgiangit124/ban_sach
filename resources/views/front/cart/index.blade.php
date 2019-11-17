@extends('/front/template')
@section('title')
    Cart
@stop
@section('css')
    <style>
        /*.photo-product img {*/
            /*height: auto!important;*/
        /*}*/

    </style>
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="/front/css/style.css">
    <script src="/front/js/modernizr.js"></script>

@stop

@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
            <h2 class="color_dark m_bottom_25">Cart</h2>
            <!--cart table-->
            <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
                <thead>
                <tr class="f_size_large">
                    <!--titles for td-->
                    <th>Product Image &amp; Name</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($show_cart as $show)
                <tr id="id-{{$show['Id']}}">
                    <!--Product name and image-->
                    <td data-title="Product Image &amp; name" class="t_md_align_c">
                        <img src="{{$show['Product']['Photo']['Small']}}" alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">
                        <a href="#" class="d_inline_b m_left_5 color_dark">{{$show['Product']['Name']}}</a>
                    </td>
                    <!--product key-->
                    <td data-title="SKU">{{$show['Product']['Code']}}</td>
                    <!--product price-->
                    <td data-title="Price">
                        {{--<s>{{$show['Product']['Price']}}</s>--}}
                        <p class="f_size_large color_dark">{{$show['Product']['Price']}} VNĐ</p>
                    </td>
                    <!--quanity-->
                    <td data-title="Quantity">
                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
                            <button class="bg_tr d_block f_left cart_quantity_down"  data-check="0" data-id="{{$show['Id']}}" data-direction="down">-</button>
                            <input type="text" name="" readonly value="{{$show['Amount']}}" class="f_left">
                            <button class="bg_tr d_block f_left cart_quantity_up" data-check="1" data-id="{{$show['Id']}}"  data-direction="up">+</button>
                        </div>
                        <div>
                            <a href="/cart" class="color_dark"><i class="fa fa-check f_size_medium m_right_5"></i>Update</a><br>
                            <a href="javascript:" class="color_dark cart_quantity_delete" data-id="{{$show['Id']}}"><i class="fa fa-times f_size_medium m_right_5 "></i>Remove</a><br>
                        </div>
                    </td>
                    <!--subtotal-->
                    <td data-title="Subtotal">
                        <p class="f_size_large fw_medium scheme_color">{{$show['Product']['Price']}} VNĐ</p>
                    </td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="4">
                        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Tax Total:</p>
                    </td>
                    <td colspan="1">
                        <p class="fw_medium f_size_large color_dark">{{$total}} VNĐ</p>
                    </td>
                </tr>
                <!--total-->
                <tr>
                    <td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
                        <!--coupon-->
                        <form class="d_ib_offset_0 d_inline_middle half_column d_xs_block w_xs_full m_xs_bottom_5">
                            <input type="text" placeholder="Enter your coupon code" name="" class="r_corners f_size_medium">
                            <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Save</button>
                        </form>
                        <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Total:</p>
                    </td>
                    <td colspan="1" class="v_align_m">
                        <p class="fw_medium f_size_large scheme_color m_xs_bottom_10">{{$total}} VNĐ</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--tabs-->
            @if(!$auth)
            <div class="tabs m_bottom_45">
                <!--tabs navigation-->
                <nav>
                    <ul class="tabs_nav horizontal_list clearfix">
                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
                    </ul>
                </nav>
                <section class="tabs_content shadow r_corners">
                    <div id="tab-1">
                        <!--login form-->
                        <h5 class="fw_medium m_bottom_15">I am Already Registered</h5>
                        <form>
                            <ul>
                                <li class="clearfix m_bottom_15">
                                    <div class="half_column type_2 f_left">
                                        <label for="username" class="m_bottom_5 d_inline_b">Username</label>
                                        <input type="text" id="username" name="" class="r_corners full_width m_bottom_5">
                                        <a href="#" class="color_dark f_size_medium">Forgot your username?</a>
                                    </div>
                                    <div class="half_column type_2 f_left">
                                        <label for="pass" class="m_bottom_5 d_inline_b">Password</label>
                                        <input type="password" id="pass" name="" class="r_corners full_width m_bottom_5">
                                        <a href="#" class="color_dark f_size_medium">Forgot your password?</a>
                                    </div>
                                </li>
                                <li class="m_bottom_15">
                                    <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4">Remember me</label>
                                </li>
                                <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                            </ul>
                        </form>
                    </div>
                </section>
            </div>
            <div class="tabs m_bottom_45">
                <!--tabs navigation-->
                <nav>
                    <ul class="tabs_nav horizontal_list clearfix">
                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>
                    </ul>
                </nav>
                <section class="tabs_content shadow r_corners">
                    <div id="tab-2">
                        <form>
                            <ul>
                                <li class="m_bottom_25">
                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Displayed Name</label>
                                    <input type="text" id="d_name" name="" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_5">
                                    <input type="checkbox" class="d_none" name="checkbox_5" id="checkbox_5"><label for="checkbox_5">Register</label>
                                </li>
                                <li class="m_bottom_15">
                                    <label for="u_name" class="d_inline_b m_bottom_5 required">Username</label>
                                    <input type="text" id="u_name" name="" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Email</label>
                                    <input type="email" id="u_email" name="" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Password</label>
                                    <input type="password" id="u_pass" name="" class="r_corners full_width">
                                </li>
                                <li>
                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Confirm Password</label>
                                    <input type="password" id="u_repeat_pass" name="" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4">Remember me</label>
                                </li>
                                <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>

                            </ul>
                        </form>
                    </div>
                </section>
            </div>
            @endif
            <h2 class="color_dark m_bottom_25">Bill To &amp; Shipment Information</h2>

            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                        <h5 class="fw_medium m_bottom_15">Bill To</h5>
                        <form action="/cart" method="post" id="form-cart">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Id" value="{{$auth?$auth->NguoiDungId:''}}">
                            <ul>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">Họ Tên</label>
                                    <input type="text" id="c_name_1" name="Name"  value="{{$auth?$auth->Ten:''}}" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="phone_1" class="d_inline_b m_bottom_5">Email</label>
                                    <input type="email" id="phone_1" name="Email"  {{$auth?'readonly':''}} value="{{$auth?$auth->Email:''}}" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="m_phone_1" class="d_inline_b m_bottom_5">Số điện thoại</label>
                                    <input type="number" id="m_phone_1"  name="Phone" value="{{$auth?$auth->SDT:''}}" class="r_corners full_width">
                                </li>
                                <li>
                                    <label for="fax_1" class="d_inline_b m_bottom_5">Địa Chỉ</label>
                                    <input type="text" id="fax_1" name="Address"  value="{{$auth?$auth->DiaChi:''}}" class="r_corners full_width">
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <h2 class="color_dark m_bottom_30">Notes and special requests</h2>
            <!--requests table-->
            <table class="table_type_5 full_width r_corners wraper shadow t_align_l">
                <tr>
                    <td class="t_align_r">
                        <p class="f_size_large fw_medium scheme_color">Total:</p>
                    </td>
                    <td>
                        <p class="f_size_large fw_medium scheme_color">{{$total}} VNĐ</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="checkbox_8" id="checkbox_8" class="d_none"><label for="checkbox_8">I agree to the Terms of Service (Terms of service)</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20 confirm_purchase">Confirm Purchase</button>
                    </td>
                </tr>
            </table>
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
                        <li class="active">
                            <a href="#" class="f_size_large scheme_color d_block relative">
                                <b>Women</b>
                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                            </a>
                            <!--second level-->
                            <ul>
                                <li class="active">
                                    <a href="#" class="d_block f_size_large color_dark relative">
                                        Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                    <!--third level-->
                                    <ul>
                                        <li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
                                        <li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
                                        <li><a href="#" class="color_dark d_block">Party Dresses</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="d_block f_size_large color_dark relative">
                                        Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d_block f_size_large color_dark relative">
                                        Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="f_size_large color_dark d_block relative">
                                <b>Men</b>
                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                            </a>
                            <!--second level-->
                            <ul class="d_none">
                                <li>
                                    <a href="#" class="d_block f_size_large color_dark relative">
                                        Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                    <!--third level-->
                                    <ul class="d_none">
                                        <li><a href="#" class="color_dark d_block">Evening</a></li>
                                        <li><a href="#" class="color_dark d_block">Casual</a></li>
                                        <li><a href="#" class="color_dark d_block">Party</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="f_size_large color_dark d_block relative">
                                <b>Kids</b>
                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </figure>
            <!--banner-->
            <a href="#" class="d_block r_corners m_bottom_30">
                <img src="/front/images/banner_img_6.jpg" alt="">
            </a>
            <!--New products-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">New Products</h3>
                </figcaption>
                <div class="widget_content">
                    <div class="clearfix m_bottom_15">
                        <img src="/front/images/new_products_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block m_bottom_5 bt_link">Ut tellus dolor dapibus</a>
                        <p class="scheme_color">$61.00</p>
                    </div>
                    <hr class="m_bottom_15">
                    <div class="clearfix m_bottom_15">
                        <img src="/front/images/new_products_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block m_bottom_5 bt_link">Elementum vel</a>
                        <p class="scheme_color">$57.00</p>
                    </div>
                    <hr class="m_bottom_15">
                    <div class="clearfix m_bottom_5">
                        <img src="/front/images/new_products_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                        <a href="#" class="color_dark d_block m_bottom_5 bt_link">Crsus eleifend elit</a>
                        <p class="scheme_color">$24.00</p>
                    </div>
                </div>
            </figure>
            <!--Specials-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
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
                                <img class="tr_all_long_hover" src="/front/images/product_img_6.jpg" alt="">
                            </a>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                            <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                            <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                        </div>
                        <!--carousel item-->
                        <div class="specials_item">
                            <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                <img class="tr_all_long_hover" src="/front/images/product_img_7.jpg" alt="">
                            </a>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">Integer rutrum ante </a></h5>
                            <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                            <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                        </div>
                        <!--carousel item-->
                        <div class="specials_item">
                            <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                <img class="tr_all_long_hover" src="/front/images/product_img_5.jpg" alt="">
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




    {{--@include('front.menu',['danhmuc_theloais'=>$danhmuc_theloais])--}}
@stop
@section('js')
    <script src="/front/js/retina.js"></script>
    <script src="/front/js/owl.carousel.min.js"></script>
    <script src="/front/js/waypoints.min.js"></script>
    <script src="/front/js/jquery.tweet.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.cart_quantity_up,.cart_quantity_down').click(function () {
                var id =  $(this).attr('data-id');
                var check =  $(this).attr('data-check');
                var url = '';
                if(check == '1') {
                    url = '/edit-cart' + '?id='+id+'&check=1';
                } else {
                    url = '/edit-cart' + '?id='+id+'&check=0';
                }

                $.ajax({
                    type: "GET",
                    url: url,
                    data: {},
                }).done(function (res) {
                    console.log(res);
                    if(res.status == 200 && res.data == 1) {
                        var v = $('#input-'+id).val();
                        var a = parseInt(v)+1;
                        $('#input-'+id).val(a);
                    }
                    if(res.status == 200 && res.data == 0) {
                        var v1 = $('#input-'+id).val();
                        var a1 = parseInt(v1)-1;
                        $('#input-'+id).val(a1);
                    }
                    else {
                        console.log('xx');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.cart_quantity_delete').click(function () {
                var id =  $(this).attr('data-id');
                console.log('xxx');
                var url = "delete-cart?id="+id;
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {}
                }).done(function (res) {
                    if(res.status==200) {
                        $('#id-'+id).remove();
                    }
                });
            });
            $(".confirm_purchase").click(function () {
                console.log('xxx');
               $("#form-cart").submit();
            });
        });
    </script>
@stop
