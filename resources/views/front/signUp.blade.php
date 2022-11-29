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
                <h2>Đăng ký</h2>
                <form method="post" class="register">
                    <p>
                        <label for="reg_email">Email <span class="required">*</span></label><input type="email" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_password">Mật khẩu <span class="required">*</span></label><input type="password" id="reg_password">
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Đăng ký">
                    </p>
                </form>
            </div>
        </div>



    </section>
@endsection
