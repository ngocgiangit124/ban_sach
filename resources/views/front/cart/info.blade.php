@extends('/front/template')
@section('title')
    Cart
@stop
@section('css')
    <style>
        .photo-product img {
            height: auto!important;
        }
    </style>
@stop

@section('content')
<section class="bandner fix-all">
    <div class="bandner-wellcome" style="   ">
        <img src="img/bands/banner-product.png" alt="">
    </div>
    <div class="page-title">
        <h2 class="text-uppercase text-center">Đặt hàng</h2>
    </div>
    <!--background-image: url(img/bands/bandner-about.jpg);-->
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 45px;padding-top: 10px">
                <div class="menu-about">
                    <ul class=" buy-item">
                        <li class="active"><a href="">Đăng nhập</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>Địa chỉ giao hàng</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>thanh toán </a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>hoàn tất </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart-main">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <div class="form-login-buy">
                    <b>Đặt hàng </b>
                    <div class="login-buy">
                        <form action="/cart" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Id" value="{{$auth?$auth->NguoiDungId:''}}">
                            <div class="form-group">
                                <input type="text" name="Name"  value="{{$auth?$auth->Ten:''}}" class="form-control" {{$auth?'readonly':''}} required placeholder="Họ và Tên">
                            </div>
                            <div class="form-group">
                                <input type="email" name="Email"  {{$auth?'readonly':''}} value="{{$auth?$auth->Email:''}}" class="form-control" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="number" name="Phone" value="{{$auth?$auth->SDT:''}}" class="form-control" required placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Address"  value="{{$auth?$auth->DiaChi:''}}" class="form-control" required placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-add-cart text-uppercase">Mua</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="total-price-item">
                    <div class="info-total">
                        <table>
                            <tr>
                                <th class="info-name-item">Thông tin đơn hàng <i>(2 sản phẩm)</i></th>
                                <th class="info-price"> <a href="/cart"><i class="fa fa-edit"></i>Sửa đơn hàng</a>

                                </th>
                            </tr>
                            @foreach($show_cart as $show)
                                <tr>
                                    <td>
                                        <p>
                                            <span class="quantity-item">{{$show['Amount']}} x
                                            </span>{{$show['Product']['Name']}}
                                        </p>
                                    </td>
                                    <td class="info-price">{{$show['Price']}} VNĐ</td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                <div class="total-price-item">
                    <div class="info-total">
                        <table style="width: 100%">
                            <tr style="width: 100%">
                                <td>Tổng tiền</td>
                                <td style="text-align: right">{{$total}}USD</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @stop
@section('js')
    @stop