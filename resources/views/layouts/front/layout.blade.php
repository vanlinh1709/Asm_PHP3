@php
    $objUser = \Illuminate\Support\Facades\Auth::user();
    $numberProductofCart = \Gloudemans\Shoppingcart\Facades\Cart::content()->count();
@endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from real-web.pro/html/allstore/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2022 03:36:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('default/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/ion.rangeSlider.skinFlat.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/media.css')}}">
    @yield('css')
</head>
<body>
<!-- Header - start -->
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +7 777 123 1575
                </li>
                <li>
                    <i class="fa fa-envelope"></i>linhtvph18589@fpt.edu.vn
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com/" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com/" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com/" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com/" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com/" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="/">
                    <img src="/img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>
                    <li class="topauth" >
                        <a href="/signUp">
                            <i class="fa fa-lock"></i>
                            <span class="" @isset($objUser){{'hidden'}}@endisset>Đăng ký</span>
                        </a>
                        <a href="/login">
                            <span class="" @isset($objUser){{'hidden'}}@endisset >Đăng nhập</span>
                        </a>
                            <span class="" >@isset($objUser){{$objUser->name}}@endisset </span>
                           @isset($objUser)
                                <a href="{{route('route_Auth_Client_logout')}}">
                                    | Đăng xuất
                                </a>
                                    @endisset
                    </li>

                    <li>
                        <div class="h-cart">
                            <a href="{{route('route_FrontEnd_Cart_index')}}">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Giỏ hàng</span>
                                (<b>{{$numberProductofCart}}</b>)
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-list.html"><span>Tất cả</span> Danh mục</a>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="index-2.html" class="active">
                            Trang chủ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="catalog-list.html">
                            Danh mục sản phẩm <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            @foreach($listCate as $c)
                            <li>
                                <a href="/category/{{$c->id}}">
                                    {{$c->cate_name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="product.html">
                            Sản phẩm <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">

                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">

                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->
<!-- Main Content - start -->
<main>
    <section class="container">
        @yield('content')
    </section>
</main>
<!-- Main Content - end -->
<!-- Footer - start -->
<footer class="footer-wrap">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="companyinfo">
                    <a href="index-2.html">
                        <img src="/img/logo-b.png" alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
                        AllStore
                    </a>
                </div>
                <div class="f-block-list">
                    <div class="f-block-wrap">
                        <div class="f-block">
                            <a href="#" class="f-block-btn" data-id="#f-block-modal-1">
                                <div class="iframe-img">
                                    <img src="/img/footer/1.jpg" alt="About us">
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                            </a>
                            <p class="f-info-ttl">Về chúng tôi</p>
                        </div>
                    </div>
                    <div class="f-block-wrap">
                        <div class="f-block">
                            <a href="#" class="f-block-btn" data-id="#f-block-modal-2">
                                <div class="iframe-img">
                                    <img src="/img/footer/2.jpg" alt="Ask questions">
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </a>
                            <p class="f-info-ttl">Đặt câu hỏi</p>
                        </div>
                    </div>
                    <div class="f-block-wrap">
                        <div class="f-block">
                            <a href="#" class="f-block-btn" data-id="#f-block-modal-3" data-content="<iframe width='853' height='480' src='https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0' allowfullscreen></iframe>">
                                <div class="iframe-img">
                                    <img src="/img/footer/3.jpg" alt="Video (2 min)">
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle"></i>
                                </div>
                            </a>
                            <p class="f-info-ttl">Video (2 phút)</p>
                        </div>
                    </div>
                    <div class="f-block-wrap">
                        <div class="f-block">
                            <a href="#" class="f-block-btn" data-id="#f-block-modal-4">
                                <div class="iframe-img">
                                    <img src="/img/footer/4.jpg" alt="Our address">
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </a>
                            <p class="f-info-ttl">Địa chỉ của chúng tôi</p>
                        </div>
                    </div>
                </div>

                <div class="stylization f-block-modal f-block-modal-content" id="f-block-modal-1">
                    <img class="f-block-modal-img" src="/img/footer/modal.jpg" alt="About us">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam natus iste ullam vero, tenetur ab ipsa consectetur deleniti officiis ex debitis incidunt alias voluptatum, maxime placeat dolores veniam sunt at atque velit, soluta. Neque ea alias quia provident molestias, ratione aut esse placeat beatae sequi sed laudantium. Unde animi nihil esse, repellendus exercitationem dicta harum ab labore, voluptates explicabo in, quidem dolorum voluptas!
                </div>
                <div class="stylization f-block-modal f-block-modal-callback" id="f-block-modal-2">
                    <div class="modalform">
                        <form action="#" method="POST" class="form-validate">
                            <p class="modalform-ttl">Callback</p>
                            <input type="text" placeholder="Your name" data-required="text" name="name">
                            <input type="text" placeholder="Your phone" data-required="text" name="phone">
                            <button type="submit"><i class="fa fa-paper-plane"></i> Send</button>
                        </form>
                    </div>
                </div>
                <div class="stylization f-block-modal f-block-modal-video" id="f-block-modal-3">

                </div>
                <div class="stylization f-block-modal f-block-modal-map" id="f-block-modal-4">
                    <div class="allstore-gmap">
                        <div class="marker" data-zoom="15" data-lat="-37.81485261872975" data-lng="144.95655298233032" data-marker="/img/marker.png">534-540 Little Bourke St, Melbourne VIC 3000, Australia</div>
                    </div>
                </div>
                <div class="f-delivery">
                    <img src="/img/map.png" alt="">
                    <h4>/h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container f-menu-list">
        <div class="row">
            <div class="f-menu">
                <h3>Về chúng tôi
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="index-2.html">Trang chủ</a></li>
                    <li><a href="catalog-list.html">Danh mục</a></li>
                    <li><a href="elements.html">Bộ phận</a></li>
                    <li><a href="blog.html">Tin tức</a></li>
                </ul>
            </div>
            <div class="f-menu">
                <h3>
                    Shop
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="catalog-list.html">Phụ nữ</a></li>
                    <li><a href="catalog-list.html">Đàn ông</a></li>
                    <li><a href="catalog-list.html">Trẻ em</a></li>
                    <li><a href="catalog-list.html">Baby</a></li>
                </ul>
            </div>
            <div class="f-menu">
                <h3>
                    Thông tin
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="blog.html">Tin tức</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="reviews.html">Đánh giá</a></li>
                    <li><a href="blog.html">Bài viết</a></li>
                </ul>
            </div>
            <div class="f-menu">
                <h3>
                    Trang
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="contacts.html">Về chung tôi</a></li>
                    <li><a href="contacts.html">Vận chuyển</a></li>
                    <li><a href="contacts.html">Tình nguyện</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>
                </ul>
            </div>
            <div class="f-subscribe">
                <h3>Đăng ký nhận tin tức</h3>
                <form class="f-subscribe-form" action="#">
                    <input placeholder="Email của bạn" type="text">
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <ul class="social-icons nav navbar-nav">
                    <li>
                        <a href="http://facebook.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://google.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://vk.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <div class="footer-copyright">
                    <i><a href="https://themeforest.net/user/real-web?ref=real-web"></a></i> © Copyright 2022
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer - end -->
@yield('script')
<!-- jQuery plugins/scripts - start -->
<script src="{{ asset('front/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('front/js/jquery.bxslider.min.js')}}"></script>
<script src="{{ asset('front/js/fancybox/fancybox.js')}}"></script>
<script src="{{ asset('front/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{ asset('front/js/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('front/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('front/js/progressbar.min.js')}}"></script>
<script src="{{ asset('front/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{ asset('front/js/chosen.jquery.min.js')}}"></script>
<script src="{{ asset('front/js/jQuery.Brazzers-Carousel.js')}}"></script>
<script src="{{ asset('front/js/plugins.js')}}"></script>
<script src="{{ asset('front/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="{{ asset('front/js/gmap.js')}}"></script>
<!-- jQuery plugins/scripts - end -->

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42088244 = new Ya.Metrika({ id:42088244, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../../../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42088244" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>

<!-- Mirrored from real-web.pro/html/allstore/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2022 03:37:56 GMT -->
</html>
