@extends('layouts.front.layout')
@section('title', $_title);
@section('content')
    <!--Duong dan -->
    <ul class="b-crumbs">
        <li>
            <a href="index-2.html">
                Trang chủ
            </a>
        </li>
        <li>
            <a href="catalog-list.html">
                Danh mục
            </a>
        </li>
        <li>
            <a href="catalog-list.html">
                Phụ nữ
            </a>
        </li>
        <li>
            <span>{{$product->product_name}}</span>
        </li>
    </ul>
    <!---->
    <!-- Single Product - start -->
    <h1 class="main-ttl"><span>{{$product->product_name}}</span></h1>
    <div class="prod-wrap">
        <!-- Product Images -->
        <div class="prod-slider-wrap">
            <div class="prod-slider">
                <ul class="prod-slider-car">
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="{{ $product->product_image ? ''.Storage::url($product->product_image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}">
                            <img src="{{ $product->product_image ? ''.Storage::url($product->product_image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/2.jpg">
                            <img src="/img/product/2.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/3.jpg">
                            <img src="/img/product/3.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/4.jpg">
                            <img src="/img/product/4.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/5.jpg">
                            <img src="/img/product/5.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/6.jpg">
                            <img src="/img/product/6.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/7.jpg">
                            <img src="/img/product/7.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-fancybox-group="product" class="fancy-img" href="/img/product/8.jpg">
                            <img src="/img/product/8.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="prod-thumbs">
                <ul class="prod-thumbs-car">
                    <li>
                        <a data-slide-index="0" href="#">
                            <img src="/img/front/popular/1/{{$product->product_image}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="1" href="#">
                            <img src="/img/product/2.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="2" href="#">
                            <img src="/img/product/3.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="3" href="#">
                            <img src="/img/product/4.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="4" href="#">
                            <img src="/img/product/5.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="5" href="#">
                            <img src="/img/product/6.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="6" href="#">
                            <img src="/img/product/7.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="7" href="#">
                            <img src="/img/product/8.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Product Description/Info -->
        <div class="prod-cont">
            <div class="prod-cont-txt">
                {{$product->product_des}}
            </div>
            <p class="prod-actions">
                <a href="#" class="prod-favorites"><i class="fa fa-heart"></i>Yêu thích</a>
                <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> So sánh</a>
            </p>
            <div class="prod-skuwrap">
                <p class="prod-skuttl">Màu sắc</p>
                <ul class="prod-skucolor">
                    <li class="active">
                        <img src="/img/color/blue.jpg" alt="">
                    </li>
                    <li>
                        <img src="/img/color/red.jpg" alt="">
                    </li>
                    <li>
                        <img src="/img/color/green.jpg" alt="">
                    </li>
                    <li>
                        <img src="/img/color/yellow.jpg" alt="">
                    </li>
                    <li>
                        <img src="/img/color/purple.jpg" alt="">
                    </li>
                </ul>
                <p class="prod-skuttl">Chọn kích cỡ</p>
                <div class="offer-props-select">
                    <p>XL</p>
                    <ul>
                        <li><a href="#">XS</a></li>
                        <li><a href="#">S</a></li>
                        <li><a href="#">M</a></li>
                        <li class="active"><a href="#">XL</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">4XL</a></li>
                        <li><a href="#">XXL</a></li>
                    </ul>
                </div>
            </div>
            <div class="prod-info">
                <p class="prod-price">
                    <b class="item_current_price">${{$product->product_price}}</b>
                </p>
                <p class="prod-qnt">
                    <input value="1" type="text">
                    <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                    <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                </p>
                <p class="prod-addwrap">
                    <a href="{{route('route_FrontEnd_Cart_add', $product->id)}}" class="prod-add" rel="nofollow">Thêm vào giỏ hàng</a>
                </p>
            </div>

        </div>

        <!-- Product Tabs -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Mô tả</a></li>

            </ul>
            <div class="prod-tab-cont">

                <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Mô tả</p>
                <div class="prod-tab stylization" id="prod-tab-1">
                    {{$product->product_des}}
                </div>

            </div>
        </div>

    </div>
    <!-- Single Product - end -->

@endsection
