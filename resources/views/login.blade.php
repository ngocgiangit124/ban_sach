<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Angle </title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/css/app.css" id="maincss">
</head>

<body>
<div class="wrapper">
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
                <a href="#">
                    <img class="block-center img-rounded" width="100" src="/front/images/logo.png" alt="Image">
                </a>
            </div>
            <div class="panel-body">
                <p class="text-center pv">SIGN IN TO CONTINUE.</p>
                <form class="mb-lg" role="form" action="/admin/login" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <div class="form-group has-feedback">
                        <input class="form-control" value="{{old('Email')}}" name="Email" id="exampleInputEmail1" type="email" placeholder="Enter email" autocomplete="off" required>
                        <span class="fa fa-envelope form-control-feedback text-muted"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control" name="Password" id="exampleInputPassword1" type="password" placeholder="Password" required>
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                    </div>
                    <div class="clearfix">
                        <div class="checkbox c-checkbox pull-left mt0">
                            <label>
                                <input type="checkbox" value="" name="remember">
                                <span class="fa fa-check"></span>Remember Me</label>
                        </div>
                        <div class="pull-right"><a class="text-muted" href="recover.html">Forgot your password?</a>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary mt-lg" type="submit">Login</button>
                </form>
                {{--<p class="pt-lg text-center">Need to Signup?</p><a class="btn btn-block btn-default" href="register.html">Register Now</a>--}}
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2019</span>
            <span>-</span>
            <span>Spectre</span>
            <br>
            <span>Khoa CNTT-NAEM</span>
        </div>
    </div>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="/vendor/modernizr/modernizr.custom.js"></script>
<!-- JQUERY-->
<script src="/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
<!-- PARSLEY-->
<script src="/vendor/parsleyjs/dist/parsley.min.js"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="/js/app.js"></script>
</body>

</html>