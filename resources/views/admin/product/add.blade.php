@extends('layouts.admin.layout')
@section('content')
    <!-- Main content -->
    <section class="content appTuyenSinh">
        <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
        <style>
            .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
                padding: 3px 0px;
                height: 30px;
            }
            .select2-container {
                margin-top: -5px;
            }

            option {
                white-space: nowrap;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #aaa;
                border-radius: 0px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                color: #216992;
            }
            .select2-container--default .select2-selection--multiple{
                margin-top:10px;
                border-radius: 0;
            }
            .select2-container--default .select2-results__group{
                background-color: #eeeeee;
            }
        </style>

        <?php //Hiển thị thông báo thành công?>
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <?php //Hiển thị thông báo lỗi?>
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif

        <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Tên sản phẩm<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="product_name" id="name" class="form-control" value="">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-md-3 col-sm-4 control-label">Danh mục sản phẩm<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <select name="category_id" id="category">
                                    @foreach($listCate as $l)
                                    <option value="{{$l->id}}">{{$l->cate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Giá gốc<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="product_price" id="name" class="form-control" value="">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Giá khuyến mãi<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="promo_price" id="name" class="form-control" value="">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Số luượng<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="number" id="name" class="form-control" value="">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Trạng thái<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="radio" id="html" name="status" value="1">
                            <label for="html">Còn hàng</label><br>
                                <input type="radio" id="css" name="status" value="0">
                            <label for="css">Hết hàng</label><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Mô tả<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <textarea name="product_des" rows="8" cols="90"></textarea>
                                <span id="mes_sdt"></span>
                            </div>
                        </div>

{{--                        Anh--}}
                        <div class="form-group">
                            <label class="col-md-3 col-sm-4 control-label">Ảnh sản phẩm</label>
                            <div class="col-md-9 col-sm-8">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img id="mat_truoc_preview" src="https://www.pngitem.com/pimgs/m/27-272007_transparent-product-icon-png-product-vector-icon-png.png" alt="your image"
                                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                                        <input type="file" name="product_image" accept="image/*"
                                               class="form-control-file @error('cmt_mat_truoc') is-invalid @enderror" id="cmt_truoc">
                                        <label for="cmt_truoc"></label><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="" class="btn btn-default">Cancel</a>
            </div>
            <!-- /.box-footer -->
        </form>

    </section>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script>
        $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_truoc").change(function () {
                readURL(this, '#mat_truoc_preview');
            });
        });
    </script>
@endsection


