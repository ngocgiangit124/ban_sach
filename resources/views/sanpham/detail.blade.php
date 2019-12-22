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
    {{--<link rel="stylesheet" href="/css/bootstrap.min.css?v=1.00">--}}
    <!-- SWEET ALERT-->
    <link rel="stylesheet" href="/vendor/sweetalert/dist/sweetalert.css">
    <style>
        .d-flex {
            display: -webkit-box!important;
            display: -ms-flexbox!important;
            display: flex!important;
        }
        .flex-wrap {
            -ms-flex-wrap: wrap!important;
            flex-wrap: wrap!important;
        }
    </style>
@stop

@section('content')
    <h3>Thể Loại
        <small>??</small>
    </h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" id="form-spec" action="/admin/sanpham/{{$sanpham['Id']}}/update" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Update San Pham</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">Tên</label>
                                <input class="form-control" type="text" name="Name" value="{{$sanpham['Name']}}" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Thuộc danh mục</label>
                                <input class="form-control" type="text" value="{{$sanpham['TheLoai']}}" readonly>
                                <input class="form-control" type="hidden" hidden="" name="TheLoaiId" value="{{$sanpham['TheLoaiId']}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mã sản phẩm</label>
                                <input class="form-control" id="id-password" value="{{$sanpham['Code']}}" type="text" name="Code" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control" type="number" value="{{$sanpham['Amount']}}" name="Amount" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Giá</label>
                                <input class="form-control" type="number" value="{{$sanpham['Price']}}" name="Price" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Chất Liệu</label>
                                <input class="form-control" type="text"  value="{{$sanpham['ChatLieu']}}" name="ChatLieu" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kích Thước</label>
                                <input class="form-control" type="text"  value="{{$sanpham['KichThuoc']}}" name="KichThuoc" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Màu Sắc</label>
                                <input class="form-control" type="text" value="{{$sanpham['MauSac']}}" name="MauSac" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Bảo Hành</label>
                                <input class="form-control" type="text" value="{{$sanpham['BaoHanh']}}" name="BaoHanh" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Giao Hàng</label>
                                <input class="form-control" type="text" value="{{$sanpham['GiaoHang']}}" name="GiaoHang" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nhà Sản Xuất</label>
                                <input class="form-control" type="text" value="{{$sanpham['NhaSanXuat']}}" name="NhaSanXuat" required >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mô tả</label>
                                <textarea class="form-control" style="height: 200px" type="text" name="Description" required >
                                     {!! $sanpham['Description'] !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Anh</label>
                                <input class="form-control" type="file" name="Image[]" multiple >
                            </div>
                            <div class="form-group">
                                <label class="control-label">Hình ảnh</label>
                                <div class="d-flex flex-wrap">
                                    @if(isset($sanpham['Photos']))
                                        @foreach($sanpham['Photos'] as $photo)
                                        <li id="{{$photo['Id']}}" style="list-style-type: none;text-align: center;margin-right: 20px">
                                            <i class="fa fa-window-close fa-2x" data-id="{{$photo['Id']}}" aria-hidden="true" style="color: red" ></i><br>
                                            <img style=" height: 100px;object-fit: cover" width="150px" src="{{$photo['Photos']['Small']}}" alt="">
                                        </li>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Xem</label>
                                <div class="col-sm-12">
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
                                    <div class="form-control wysiwyg mt-lg input-show-spec" style="overflow:scroll; height:300px;max-height:500px;">{!! $sanpham['Xem'] !!}</div>
                                    <input type="hidden" class="input-hidden-spec" name="Xem" value="{{$sanpham['Xem']}}">
                                </div>
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
    <script src="/vendor/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.fa-window-close').on('click', function (e) {
                var id = $(this).attr('data-id');
                e.preventDefault();
                swal({
                    title: "Bạn có chắc chắn xóa?",
                    text: "Bạn sẽ xóa product này , nó sẽ ko hiển thị nữa!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        var data = new FormData();
                        console.log(id);
                        data.append('_token',"{{csrf_token()}}");
//                        data.append('keyword',txtInput);
                        var url ='/admin/hinhanh/'+id+'/delete';
                        console.log(url);
                        $.ajax({
                            data:data,
                            url: url,
                            type: "post",
                            error: function (xhr) {
                                console.log('xhr');
                            },
                            processData: false,
                            contentType: false
                        })
                            .done(function( data) {
                                console.log(data.status);
                                console.log(data.aaa);
                                if(data.status===200)
                                {
                                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                    document.getElementById(id).remove();
                                }
                                else
                                {
                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                }
//                                 $('#myData').html(data.html);
//                        $('#div-content').append('<img src="'+'/'+data.src+'">');
                            });
                    }
                    else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });


            });

        });
    </script>
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