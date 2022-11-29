@extends('layouts.front.layout')
@section('title', $_title)
@section('content')
    <section class="container stylization maincont">
        <ul class="b-crumbs">
            <li>
                <a href="index-2.html">
                    Home
                </a>
            </li>
            <li>
                <span>Registration / Login</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Đăng ký tài khoản </span></h1>
        <div class="auth-wrap">
            <div class="auth-col">
                <form method="post" class="" action="">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label for="reg_name">Họ và tên <span class="required">*</span></label>
                            <input type="text" id="reg_name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="reg_email">Email<span class="required">*</span></label>
                            <input type="email" id="reg_email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="reg_password">Mật khẩu <span class="required">*</span></label>
                            <input type="password" id="reg_password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-4 control-label">Avatar</label>
                        <div class="col-md-9 col-sm-8">
                            <div class="row">
                                <div class="col-xs-6">
                                    <img id="mat_truoc_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                         style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                                    <input type="file" name="avatar" accept="image/*"
                                           class="form-control-file @error('avatar') is-invalid @enderror" id="cmt_truoc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                      <button>Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="auth-col">
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
                            <span class="sr-only">Đóng</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('default/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('default/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('default/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{ asset('default/dist/js/spx.js')}}?v=1"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection
