@extends('/template')
@section('title')
    Sản Phẩm
@stop
@section('css')
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- DATATABLES-->
    <link rel="stylesheet" href="/vendor/datatables-colvis/css/dataTables.colVis.css">
    <link rel="stylesheet" href="/vendor/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/vendor/dataTables.fontAwesome/index.css">
    <link rel="stylesheet" href="/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <!-- SLIDER CTRL-->
    <link rel="stylesheet" href="/vendor/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- CHOSEN-->
    <link rel="stylesheet" href="/vendor/chosen_v1.2.0/chosen.min.css">
    <!-- DATETIMEPICKER-->
    <link rel="stylesheet" href="/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <!-- COLORPICKER-->
    <link rel="stylesheet" href="/vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
    <!-- SELECT2-->
    <link rel="stylesheet" href="/vendor/select2/dist/css/select2.css">
@stop

@section('content')
    <h3>Thể Loại
        <small>??</small>
    </h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form id="form-spec" method="post" action="/admin/gioithieu/{{$about['Id']}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Sửa tin tức</div>
                        </div>
                        <div class="panel-body">
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label">Tiêu đề</label>--}}
                                {{--<input class="form-control" type="text" name="Name" value="{{$about['Name']}}" required>--}}
                            {{--</div>--}}
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <div class="btn-toolbar btn-editor" data-role="editor-toolbar" data-target="#editor">
                                            <div class="btn-group dropdown">
                                                <a class="btn btn-default" data-toggle="dropdown" title="Font">
                                                    <em class="fa fa-font"></em><b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="" data-edit="fontName Arial" style="font-family:'Arial';">Arial</a>
                                                    </li>
                                                    <li><a href="" data-edit="fontName Sans" style="font-family:'Sans';">Sans</a>
                                                    </li>
                                                    <li><a href="" data-edit="fontName Serif" style="font-family:'Serif';">Serif</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropdown">
                                                <a class="btn btn-default" data-toggle="dropdown" title="Font Size">
                                                    <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="" data-edit="fontSize 5" style="font-size:24px;">Huge</a>
                                                    </li>
                                                    <li><a href="" data-edit="fontSize 3" style="font-size:18px;">Normal</a>
                                                    </li>
                                                    <li><a href="" data-edit="fontSize 1" style="font-size:14px;">Small</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default" data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)">
                                                    <em class="fa fa-bold"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)">
                                                    <em class="fa fa-italic"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough">
                                                    <em class="fa fa-strikethrough"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)">
                                                    <em class="fa fa-underline"></em>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default" data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list">
                                                    <em class="fa fa-list-ul"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="insertorderedlist" data-toggle="tooltip" title="Number list">
                                                    <em class="fa fa-list-ol"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)">
                                                    <em class="fa fa-dedent"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="indent" data-toggle="tooltip" title="Indent (Tab)">
                                                    <em class="fa fa-indent"></em>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default" data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)">
                                                    <em class="fa fa-align-left"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)">
                                                    <em class="fa fa-align-center"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)">
                                                    <em class="fa fa-align-right"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)">
                                                    <em class="fa fa-align-justify"></em>
                                                </a>
                                            </div>
                                            <div class="btn-group dropdown">
                                                <a class="btn btn-default" data-toggle="dropdown" title="Hyperlink">
                                                    <em class="fa fa-link"></em>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <div class="input-group ml-xs mr-xs">
                                                        <input class="form-control input-sm" id="LinkInput" placeholder="URL" type="text" data-edit="createLink">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-default" type="button">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-default" data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink">
                                                    <em class="fa fa-cut"></em>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default" id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)">
                                                    <em class="fa fa-picture-o"></em>
                                                </a>
                                                <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px;">
                                            </div>
                                            <div class="btn-group pull-right">
                                                <a class="btn btn-default" data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)">
                                                    <em class="fa fa-undo"></em>
                                                </a>
                                                <a class="btn btn-default" data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)">
                                                    <em class="fa fa-repeat"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-control wysiwyg mt-lg input-show-spec" style="overflow:scroll; height:500px;max-height:500px;">
                                           {!! $about['Description'] !!}
                                        </div>
                                        <input type="hidden" class="input-hidden-spec" name="Description" value="{{$about['Description']}}">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label class="control-label">Ảnh update</label>
                                <input class="form-control" type="file" name="Image">
                            </div>
                            <div class="">
                                <label class="control-label">Ảnh Hiển thị</label><br>
                                <img src="{{$about['Photos']['Small']}}" alt="">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="checkbox c-checkbox">
                                        <label>
                                            {{--<input type="checkbox" name="agreements" required data-parsley-error-message="Please read and agree the terms">--}}
                                            {{--<span class="fa fa-check"></span>I agree with the <a href="#">terms</a>--}}
                                        </label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-primary submit-spec" type="button">Tạo mới</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END panel-->
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- DATATABLES-->
    <script src="/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
    <script src="/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.colVis.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.flash.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.html5.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.print.js"></script>
    <script src="/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="/vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
    <script src="/js/demo/demo-datatable.js"></script>
    <script src="/vendor/bootstrap-filestyle/src/bootstrap-filestyle.js"></script>
    <!-- TAGS INPUT-->
    <script src="/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <!-- CHOSEN-->
    <script src="/vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
    <!-- SLIDER CTRL-->
    <script src="/vendor/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
    <!-- INPUT MASK-->
    <script src="/vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
    <!-- WYSIWYG-->
    <script src="/vendor/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="/vendor/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script>
    <!-- MOMENT JS-->
    <script src="/vendor/moment/min/moment-with-locales.min.js"></script>
    <!-- DATETIMEPICKER-->
    <script type="text/javascript" src="/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- COLORPICKER-->
    <script type="text/javascript" src="/vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <!-- Demo-->
    <script src="/js/demo/demo-forms.js"></script>
    <!-- SELECT2-->
    <script src="/vendor/select2/dist/js/select2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.submit-spec').click(function () {
                var show = $('.input-show-spec').html();
                $('.input-hidden-spec').val(show);
                $('#form-spec').submit();
            });

        });
    </script>
@stop