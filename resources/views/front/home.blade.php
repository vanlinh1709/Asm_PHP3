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
                                    <a href="/productDetail/{{$product->id}}" class="prod-i-img"><!-- NO SPACE --><img src="img/front/popular/1/{{$product->product_image}}" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
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
    <div class="banners-wrap">
        <div class="banners-list">
            <div class="banner-i style_11">
                <span class="banner-i-bg" style="background: url(img/front/banners/1.jpg);"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">NEW COLLECTION</p>
                    <h3 class="banner-i-ttl">MEN'S<br>CLOTHING</h3>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
            <div class="banner-i style_22">
                <span class="banner-i-bg" style="background: url(img/front/banners/2.jpg);"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">GREAT COLLECTION</p>
                    <h3 class="banner-i-ttl">CLOTHING<br>ACCESSORIES</h3>
                    <p class="banner-i-link"><a href="section.html">Show more</a></p>
                </div>
            </div>
            <div class="banner-i style_21">
                <span class="banner-i-bg" style="background: url(img/front/banners/3.jpg);"></span>
                <div class="banner-i-cont">
                    <h3 class="banner-i-ttl">SPORT<br>CLOTHES</h3>
                    <p class="banner-i-link"><a href="section.html">Go to catalog</a></p>
                </div>
            </div>
            <div class="banner-i style_21">
                <span class="banner-i-bg" style="background: url(img/front/banners/4.jpg);"></span>
                <div class="banner-i-cont">
                    <h3 class="banner-i-ttl">MEN AND <br>WOMEN SHOES</h3>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
            <div class="banner-i style_22">
                <span class="banner-i-bg" style="background: url(img/front/banners/5.jpg);"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">DISCOUNT -20%</p>
                    <h3 class="banner-i-ttl">HATS<br>COLLECTION</h3>
                    <p class="banner-i-link"><a href="section.html">Shop now</a></p>
                </div>
            </div>
            <div class="banner-i style_12">
                <span class="banner-i-bg" style="background: url(img/front/banners/6.jpg);"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">STYLISH CLOTHES</p>
                    <h3 class="banner-i-ttl">WOMEN'S COLLECTION</h3>
                    <p>A great selection of dresses, <br>blouses and women's suits</p>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Special offer -->
    <div class="discounts-wrap">
        <h3 class="component-ttl"><span>Special offer</span></h3>
        <div class="flexslider discounts-list">
            <ul class="slides">
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/1.jpg" alt="Dicta doloremque">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Dicta doloremque</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$115</b> <del>$135</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/2.jpg" alt="Similique delectus">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Similique delectus</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$105</b> <del>$120</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/3.jpg" alt="Adipisci nemo">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Adipisci nemo</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$70</b> <del>$90</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/4.jpg" alt="Ullam harum">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Ullam harum</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$55</b> <del>$75</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/5.jpg" alt="Similique delectus">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Similique delectus</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$135</b> <del>$155</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/6.jpg" alt="Туфли Dr.Koffer">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Туфли Dr.Koffer</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$190</b> <del>$210</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/7.jpg" alt="Quod consequatur">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Quod consequatur</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$120</b> <del>$140</del>
                    </p>
                </li>
                <li class="discounts-i">
                    <a href="product.html" class="discounts-i-img">
                        <img src="img/front/discounts/8.jpg" alt="Dolore fugit">
                    </a>
                    <h3 class="discounts-i-ttl">
                        <a href="product.html">Dolore fugit</a>
                    </h3>
                    <p class="discounts-i-price">
                        <b>$80</b> <del>$95</del>
                    </p>
                </li>
            </ul>
        </div>
        <div class="discounts-info">
            <p>Special offer!<br>Limited time only</p>
            <a href="catalog-list.html">Shop now</a>
        </div>
    </div>
    <!-- Latest news -->
    <div class="posts-wrap">
        <div class="posts-list">
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url(img/blog/blog1.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Reviews</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Animi quaerat at</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url(img/blog/blog6.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Articles</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Ex atque commodi</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url(img/blog/blog11.jpg)"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">News</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Hic quod maxime deserunt</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="reviews-wrap">
        <div class="reviewscar-wrap">
            <div class="swiper-container reviewscar">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Distinctio modi, quos, vero quibusdam ab deserunt doloribus eligendi velit temporibus ratione at est officia repellat? Adipisci nemo expedita rerum distinctio laudantium nihil voluptatem ullam vel ex magnam velit aliquid voluptate voluptatum excepturi</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Similique delectus totam ex cum magnam quasi, ipsam officiis amet temporibus enim modi rerum quo maxime reprehenderit, deserunt, libero quas distinctio quos! Ullam harum nesciunt omnis consectetur distinctio? Iste sunt, dolorem deserunt quibusdam</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi nihil consequuntur reprehenderit ipsam, quam consequatur in. Esse, doloremque consectetur veniam quo ut voluptas necessitatibus</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Perferendis recusandae consequuntur quasi, non culpa. Minus porro officiis veniam facilis praesentium expedita doloribus, recusandae aut dolore autem, modi consequuntur rem perferendis dolores quisquam, sequi quas. Iusto et, eius laboriosam beatae</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Aliquid soluta nisi incidunt, dolores sequi itaque sunt et nesciunt delectus ipsam est molestias illo obcaecati, totam ducimus cumque consequuntur modi, laudantium! Temporibus vero odit quis, quibusdam maiores voluptatum sunt dolor tempora architecto fugiat quam.</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus</p>
                    </div>
                    <div class="swiper-slide">
                        <p>Eveniet nobis minus possimus eius, doloribus ex similique debitis nihil at facere delectus unde, commodi, alias. Eius facilis, dolore officia veritatis, doloribus voluptatem aliquid rem corporis quam officiis at dignissimos dolorum, velit assumenda</p>
                    </div>
                </div>
            </div>
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
        <h3>Subscribe to us</h3>
        <p>Enter your email if you want to receive our news</p>
        <form action="#">
            <input placeholder="Your e-mail" type="text">
            <input name="OK" value="Subscribe" type="submit">
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


