@extends('layouts.front.layout')
@section('title', $_title)
@section('content')

    <!-- Slider -->
    <div class="fr-slider-wrap">
        <div class="fr-slider">
            <ul class="slides">
                <li>
                    <img src="img/front/slider/slide1.jpg" alt="">
                    <div class="fr-slider-cont">
                        <h3>Giảm giá -30%</h3>
                        <p>Bộ sựu tập quần áo mùa đông cho nữ. <br>Chúng tôi đã lựa chọn cho bạn, xem ngay!</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="#">Xem danh sách</a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/front/slider/slide2.jpg" alt="">
                    <div class="fr-slider-cont">
                        <h3>BỘ SƯU TẬP MỚI</h3>
                        <p>Bộ Sưu Tập Thu Đông QXU610 Áo Len Nữ Dệt Kim Cỡ Lớn Mới 2021 .<br> Váy Xếp Ly Thon Gọn Phong Cách Phương Tây</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="#">Mua ngay</a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/img/front/slider/slide3.jpg" alt="">
                    <div class="fr-slider-cont">
                        <h3>Xu hướng hot</h3>
                        <p>Phối áo len cổ lọ dáng rộng kết hợp cùng quần bò .<br>Phối đồ đông cho nữ thấp với chân váy xếp ly</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="#">Bắt đầu mua sắm</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Popular Products -->
    <div class="fr-pop-wrap">
        <h3 class="component-ttl"><span>Sản phẩm theo danh mục</span></h3>
        <ul class="fr-pop-tabs sections-show">
            @foreach($listCate as $i => $cate)
                <li>
                    <a data-frpoptab-num="{{$cate->id}}" data-frpoptab="#frpoptab-tab-{{$cate->id}}" href="#" class="@if($i == 0) echo active @endif">{{$cate->cate_name}}</a>
                </li>
            @endforeach
        </ul>
        <div class="fr-pop-tab-cont">
            {{--Load san pham(kem ten danh muc)--}}
            @foreach($allListCatesWithProduct as $i => $listCateWithProduct)
                    <?php $tab = ++$i?>
                <p data-frpoptab-num="{{$tab}}" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-{{$tab}}"></p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-{{$tab}}">
                    <ul class="slides">
                        @foreach($listCateWithProduct as $product)
                            <li class="prod-i">
                                <div class="prod-i-top">
                                    <a href="/productDetail/{{$product->id}}" class="prod-i-img"><!-- NO SPACE --><img src="{{ $product->product_image ? ''.Storage::url($product->product_image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                    <p class="prod-i-info">
                                        <a href="#" class="prod-i-favorites"><span>Yêu thích</span><i class="fa fa-heart"></i></a>
                                        <a href="#" class="qview-btn prod-i-qview"><span>Xem nhanh</span><i class="fa fa-search"></i></a>
                                        <a class="prod-i-compare" href="#"><span>So sánh</span><i class="fa fa-bar-chart"></i></a>
                                    </p>
                                    <p class="prod-i-addwrap">
                                        <a href="/productDetail/{{$product->id}}" class="prod-i-add">Xem chi tiết</a>
                                        <br>
                                        <a href="{{route('route_FrontEnd_Cart_add', $product->id)}}" class="prod-i-add">Thêm vào giỏ hàng</a>
                                    </p>
                                </div>
                                <h3>
                                    <a href="/productDetail/{{$product->id}}">{{$product->product_name}}</a>
                                </h3>
                                <p class="prod-i-price">
                                    <b>${{$product->product_price}}</b>
                                </p>
                                <div class="prod-i-skuwrapcolor">
                                    <ul class="prod-i-skucolor">
                                        <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                        <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div><!-- .fr-pop-tab-cont -->
    </div><!-- .fr-pop-wrap -->
    {{--Load danh muc san pham--}}
    <!-- Banners -->

    <div class="posts-wrap">
        <div class="posts-list">
            <div class="posts-i">
                <a class="posts-i-img" href="/category/1">
                    <span style="background: url(img/blog/blog1.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Reviews</a>
                    <h3 class="posts-i-ttl">
                        <a href="/category/1">Áo thun</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="/category/2">
                    <span style="background: url(img/blog/blog6.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Articles</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html"> Váy</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="/category/3">
                    <span style="background: url(img/blog/blog11.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">News</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Mũ len</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="reviews-wrap">
        <div class="reviewscar-wrap">
            <h3 class="text-center">Khách hàng đã mua</h3><br>
            <div class="swiper-container reviewscar-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/reviews/1.jpg" alt="Aureole Jayde">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                        <p class="reviewscar-post">Director</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/2.jpg" alt="Benjy Darrin">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                        <p class="reviewscar-post">Designer</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/3.jpg" alt="Jeni Margie">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Jeni Margie</a></h3>
                        <p class="reviewscar-post">Developer</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/4.jpg" alt="Edweena Chelsea">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Edweena Chelsea</a></h3>
                        <p class="reviewscar-post">Manager</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/5.jpg" alt="Sean Rudolph">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Sean Rudolph</a></h3>
                        <p class="reviewscar-post">Designer</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/6.jpg" alt="Brigham Murphy">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Brigham Murphy</a></h3>
                        <p class="reviewscar-post">Director</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/7.jpg" alt="Barrie Roderick">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Barrie Roderick</a></h3>
                        <p class="reviewscar-post">Developer</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/8.jpg" alt="John Doe">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">John Doe</a></h3>
                        <p class="reviewscar-post">Manager</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/9.jpg" alt="Shirlee Annabel">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Shirlee Annabel</a></h3>
                        <p class="reviewscar-post">Developer</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/10.jpg" alt="Lettice Alyce">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Lettice Alyce</a></h3>
                        <p class="reviewscar-post">Director</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/11.jpg" alt="Meriel Glory">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Meriel Glory</a></h3>
                        <p class="reviewscar-post">Manager</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/reviews/12.jpg" alt="Janene Alaina">
                        <h3 class="reviewscar-ttl"><a href="reviews.html">Janene Alaina</a></h3>
                        <p class="reviewscar-post">Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Form -->
    <div class="newsletter">
        <h3>Đăng ký với chúng tôi</h3>
        <p>Nhập email của bạn nếu bạn muốn nhận bản tin của chúng tôi</p>
        <form action="#">
            <input placeholder="Email của bạn" type="text">
            <input name="OK" value="Đăng ký" type="submit">
        </form>
    </div>
    <!-- Quick View Product - start -->
    <div class="qview-modal">
        <div class="prod-wrap">
            <a href="product.html">
                <h1 class="main-ttl">
                    <span>Reprehenderit adipisci</span>
                </h1>
            </a>
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/1.jpg">
                                <img src="img/popup/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/2.jpg">
                                <img src="img/popup/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/3.jpg">
                                <img src="img/popup/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/4.jpg">
                                <img src="img/popup/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/5.jpg">
                                <img src="img/popup/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/6.jpg">
                                <img src="img/popup/6.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/7.jpg">
                                <img src="img/popup/7.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        <li>
                            <a data-slide-index="0" href="#">
                                <img src="img/popup/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="1" href="#">
                                <img src="img/popup/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="2" href="#">
                                <img src="img/popup/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="3" href="#">
                                <img src="img/popup/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="4" href="#">
                                <img src="img/popup/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="5" href="#">
                                <img src="img/popup/6.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="6" href="#">
                                <img src="img/popup/7.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="prod-cont">
                <p class="prod-actions">
                    <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                    <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                </p>
                <div class="prod-skuwrap">
                    <p class="prod-skuttl">Color</p>
                    <ul class="prod-skucolor">
                        <li class="active">
                            <img src="img/color/blue.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/red.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/green.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/yellow.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/purple.jpg" alt="">
                        </li>
                    </ul>
                    <p class="prod-skuttl">Sizes</p>
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
                        <b class="item_current_price">$238</b>
                    </p>
                    <p class="prod-qnt">
                        <input type="text" value="1">
                        <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                    </p>
                    <p class="prod-addwrap">
                        <a href="#" class="prod-add">Add to cart</a>
                    </p>
                </div>
                <ul class="prod-i-props">
                    <li>
                        <b>SKU</b> 05464207
                    </li>
                    <li>
                        <b>Manufacturer</b> Mayoral
                    </li>
                    <li>
                        <b>Material</b> Cotton
                    </li>
                    <li>
                        <b>Pattern Type</b> Print
                    </li>
                    <li>
                        <b>Wash</b> Colored
                    </li>
                    <li>
                        <b>Style</b> Cute
                    </li>
                    <li>
                        <b>Color</b> Blue, Red
                    </li>
                    <li><a href="#" class="prod-showprops">All Features</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Quick View Product - end -->
@endsection


