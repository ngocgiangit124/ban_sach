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
            <h2 class="color_dark m_bottom_25">Giỏ hàng</h2>
            <!--cart table-->
            <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
                <thead>
                <tr class="f_size_large">
                    <!--titles for td-->
                    <th>Ảnh &amp; Tên sản phẩm</th>
                    <th>Thể loại</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
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
                            <a href="/cart" class="color_dark"><i class="fa fa-check f_size_medium m_right_5"></i>Cập nhật</a><br>
                            <a href="javascript:" class="color_dark cart_quantity_delete" data-id="{{$show['Id']}}"><i class="fa fa-times f_size_medium m_right_5 "></i>Xóa</a><br>
                        </div>
                    </td>
                    <!--subtotal-->
                    <td data-title="Subtotal">
                        <p class="f_size_large fw_medium scheme_color">{{number_format($show['Product']['Price'])}} VNĐ</p>
                    </td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="4">
                        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Tổng tiền:</p>
                    </td>
                    <td colspan="1">
                        <p class="fw_medium f_size_large color_dark">{{number_format($total)}} VNĐ</p>
                    </td>
                </tr>
                <!--total-->

                </tbody>
            </table>
            <!--tabs-->
            @if(!$auth)
            <div class="tabs m_bottom_45">
                <!--tabs navigation-->
                <nav>
                    <ul class="tabs_nav horizontal_list clearfix">
                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đăng nhập</a></li>
                    </ul>
                </nav>
                <section class="tabs_content shadow r_corners">
                    <div id="tab-1">
                        <!--login form-->
                        <h5 class="fw_medium m_bottom_15">Tôi đã có tài khoản</h5>
                        <form action="/login" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <ul>
                                <li class="clearfix m_bottom_15">
                                    <div class="half_column type_2 f_left">
                                        <label for="username" class="m_bottom_5 d_inline_b">Email</label>
                                        <input type="text" id="username" name="Email" class="r_corners full_width m_bottom_5">
                                    </div>
                                    <div class="half_column type_2 f_left">
                                        <label for="pass" class="m_bottom_5 d_inline_b">Mật khẩu</label>
                                        <input type="password" id="pass" name="Password" class="r_corners full_width m_bottom_5">
                                    </div>
                                </li>

                                <li>
                                    <button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Đăng nhập</button>
                                    <a href="/registration" style="float: right;text-align: center" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Đăng ký</a>
                                </li>

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
                <section class="tabs_content shadow r_corners" style="display: none">
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
            <h2 class="color_dark m_bottom_25">Thông tin khách mua hàng</h2>

            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                        <h5 class="fw_medium m_bottom_15">Thông tin</h5>
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
            <h2 class="color_dark m_bottom_30">Thanh toán</h2>
            <!--requests table-->
            <table class="table_type_5 full_width r_corners wraper shadow t_align_l">
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="checkbox_8" id="checkbox_8" class="d_none"><label for="checkbox_8">Tôi đồng ý với điều khoản của cửa hàng</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20 confirm_purchase">Xác nhận mua hàng</button>
                    </td>
                </tr>
            </table>
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
