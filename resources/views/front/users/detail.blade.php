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
            <h2 class="color_dark m_bottom_25">Thông tin</h2>
            <!--cart table-->
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
                                        {{--<a href="/registration" style="float: right;text-align: center" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Đăng ký</a>--}}
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
                            <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đăng ký</a></li>
                        </ul>
                    </nav>
                    <section class="tabs_content shadow r_corners" style="">
                        <div id="tab-2">
                            <form action="/registration" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <ul>
                                    {{--<li class="m_bottom_25">--}}
                                        {{--<label for="d_name" class="d_inline_b m_bottom_5 required">Name</label>--}}
                                        {{--<input type="text" id="d_name" name="" class="r_corners full_width">--}}
                                    {{--</li>--}}
                                    <li class="m_bottom_15">
                                        <label for="u_name" class="d_inline_b m_bottom_5 required">Họ tên</label>
                                        <input type="text" id="u_name" name="Name" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_phone_1" class="d_inline_b m_bottom_5">Số điện thoại</label>
                                        <input type="number" id="m_phone_1"  name="Phone" value="{{$auth?$auth->SDT:''}}" class="r_corners full_width">
                                    </li>
                                    <li>
                                        <label for="fax_1" class="d_inline_b m_bottom_5">Địa Chỉ</label>
                                        <input type="text" id="fax_1" name="Address"  value="{{$auth?$auth->DiaChi:''}}" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="u_email" class="d_inline_b m_bottom_5 required">Email</label>
                                        <input type="email" id="u_email" name="Email" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="u_pass" class="d_inline_b m_bottom_5 required">Mật khẩu</label>
                                        <input type="password" id="u_pass" name="Password" class="r_corners full_width">
                                    </li>
                                    <li>
                                        <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Xác nhận mật khẩu</label>
                                        <input type="password" id="u_repeat_pass" name="" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15" style="margin-top: 15px">
                                        <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4"> Tôi chấp nhận với các điều khoản của web </label>
                                    </li>
                                    <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Đăng ký</button></li>

                                </ul>
                            </form>
                        </div>
                    </section>
                </div>
            @else
                <div class="tabs m_bottom_45">
                    <!--tabs navigation-->
                    <section class="tabs_content shadow r_corners" style="">
                        <div id="tab-2">
                            <form action="/user/update" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <ul>
                                    {{--<li class="m_bottom_25">--}}
                                    {{--<label for="d_name" class="d_inline_b m_bottom_5 required">Name</label>--}}
                                    {{--<input type="text" id="d_name" name="" class="r_corners full_width">--}}
                                    {{--</li>--}}
                                    <li class="m_bottom_15">
                                        <label for="u_name" class="d_inline_b m_bottom_5 required">Họ tên</label>
                                        <input type="text" id="u_name" name="Name" value="{{$auth?$auth->Ten:''}}" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_phone_1" class="d_inline_b m_bottom_5">Số điện thoại</label>
                                        <input type="number" id="m_phone_1"  name="Phone" value="{{$auth?$auth->SDT:''}}" class="r_corners full_width">
                                    </li>
                                    <li>
                                        <label for="fax_1" class="d_inline_b m_bottom_5">Địa Chỉ</label>
                                        <input type="text" id="fax_1" name="Address"  value="{{$auth?$auth->DiaChi:''}}" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="u_email" class="d_inline_b m_bottom_5 required">Email</label>
                                        <input type="email" id="u_email" name="Email" value="{{$auth?$auth->Email:''}}" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="u_pass" class="d_inline_b m_bottom_5 required">Mật khẩu</label>
                                        <input type="password" id="u_pass" name="Password" class="r_corners full_width">
                                    </li>
                                    <li>
                                        <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Xác nhận mật khẩu</label>
                                        <input type="password" id="u_repeat_pass" name="" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15" style="margin-top: 15px">
                                        {{--<input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4"> Tôi chấp nhận với các điều khoản của web </label>--}}
                                    </li>
                                    <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Cập nhật</button></li>

                                </ul>
                            </form>
                        </div>
                    </section>
                </div>
            @endif
        </section>
        <!--right column-->
        <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
            <div class="container" style="background: #ffffff;padding: 20px;text-align: center">
                <h2>Danh sách hóa đơn</h2>
                <table class="table" style="width: 100%;padding: 10px">
                    <thead style="width: 100%;padding: 10px">
                    <tr style="margin: 15px">
                        <th style="width: 5%">Stt</th>
                        <th style="width: 15%">Mã hóa đơn</th>
                        <th style="width: 15%">Số lượng</th>
                        <th style="width: 15%">Tổng tiền</th>
                        <th style="width: 15%">Thời gian</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $index =>$order)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$order['Code']}}</td>
                            <td>{{$order['Amount']}}</td>
                            <td>{{number_format($order['Total'])}} VNĐ</td>
                            <td>{{$order['Created_at']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

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
