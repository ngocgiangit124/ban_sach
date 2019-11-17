@extends('/front/template')
@section('title')
    Liên Hệ
@stop
@section('css')
@stop

@section('content')
<section class="bandner fix-all">
    <div class="bandner-wellcome" style="   ">
        <img src="/img/bands/banner-product.png" alt="">
    </div>
    <div class="page-title">
        <h2 class="text-uppercase text-center">Liên hệ</h2>
    </div>
    <!--background-image: url(img/bands/bandner-about.jpg);-->
</section>
<section class="main-contact" style="padding: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-top: 10px">
                <div class="menu-about">
                    <ul class="breadcrumb">
                        <li><a href="">  <i class="fa fa-home" style="color: #E2851B;" ></i></a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info-gps">
                    <div class="title-company">
                        <label> Công ty tnhh Anpo Việt nam</label>
                    </div>
                    <div class="info-gps-company">
                        <p><i class="fa fa-user"></i>
                            Nguyễn Thị Mỹ An</p>
                        <p><i class="fa fa-home"></i>
                            Cụm CN Cầu Xây, Tân Lập, Huyện Đan PHượng, Tp.Hà Nội
                        </p>
                        <p><i class="fa fa-phone"></i>
                            04 33663771 - 099 515 8716
                        </p>
                        <p><i class="fa fa-envelope"></i>
                            wecare@anpovietnam.com
                        </p>
                        <p><i class="fa fa-globe"></i>
                            anpovietnam.com
                        </p>
                    </div>
                </div>
                <!-- Map -->
                <div id="contact-us-map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                    <br />
                    <small>
                        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                    </small>
                </div>
                <!-- End Map -->
            </div>
            <div class="col-md-6">
                <div class="info-gps">
                    <div class="title-company">
                        <label>Liên hệ góp ý</label>
                    </div>
                    <div class="input-form-contact">
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Họ tên">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Tiêu đề">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea type="text" class="form-control" name="name" placeholder=" Nội dung tin nhắn" style="height: 150px"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-danger btn-contact">Gửi tin nhắn cho chúng tôi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map -->
                <!--<div id="contact-us-map">-->
                <!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>-->
                <!--<br />-->
                <!--<small>-->
                <!--<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>-->
                <!--</small>-->
                <!--</div>-->
                <!-- End Map -->
            </div>
        </div>
    </div>
</section>
@stop
@section('js')
@stop