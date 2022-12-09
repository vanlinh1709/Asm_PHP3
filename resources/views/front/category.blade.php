@extends('layouts.front.layout')
@section('content')
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
            <span>Nam giới</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>Nam giới</span></h1>
    <!-- Catalog Sidebar - start -->
    <div class="section-sb">



    </div>
    <!-- Catalog Sidebar - end -->
    <!-- Catalog Items | List V1 - start -->
    <div class="section-cont">

        <!-- Catalog Topbar - start -->
        <div class="section-top">

            <!-- View Mode -->
            <ul class="section-mode">
                <li class="section-mode-gallery"><a title="View mode: Gallery" href="catalog-gallery.html"></a></li>
                <li class="section-mode-list active"><a title="View mode: List" href="catalog-list.html"></a></li>
                <li class="section-mode-table"><a title="View mode: Table" href="catalog-table.html"></a></li>
            </ul>

            <!-- Sorting -->
            <div class="section-sortby">
                <p>Tìm kiếm sản phẩm</p>
                <ul>
                    <li>
                        <a href="#">sort by popularity</a>
                    </li>
                    <li>
                        <a href="#">low price to high</a>
                    </li>
                    <li>
                        <a href="#">high price to low</a>
                    </li>
                    <li>
                        <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                    </li>
                    <li>
                        <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                    </li>
                    <li>
                        <a href="#">default sorting</a>
                    </li>
                </ul>
            </div>

            <!-- Count per page -->
            <div class="section-count">
                <p>12</p>
                <ul>
                    <li><a href="#">12</a></li>
                    <li><a href="#">24</a></li>
                    <li><a href="#">48</a></li>
                </ul>
            </div>

        </div>
        <!-- Catalog Topbar - end -->
        <div class="prod-items section-items">
            @foreach($listCategoryWithProduct as $product)
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="/productDetail/{{$product->id}}"><!-- NO SPACE --><img src="{{ $product->product_image ? ''.Storage::url($product->product_image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                <div class="prodlist-i-cont">
                    <h3><a href="/productDetail/{{$product->id}}">{{$product->product_name}}</a></h3>
                    <div class="prodlist-i-txt">
                        {{$product->product_des}}
                        <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                            <p class="prodlist-i-skuttl">Color</p>
                            <ul class="prodlist-i-skucolor">
                                <li class="active"><img src="/img/color/blue.jpg" alt=""></li>
                                <li><img src="/img/color/red.jpg" alt=""></li>
                                <!--<li><img src="/img/color/yellow.jpg" alt=""></li>-->
                                <!--<li><img src="/img/color/purple.jpg" alt=""></li>-->
                                <li><img src="/img/color/green.jpg" alt=""></li>
                            </ul>
                        </div>
                        <div class="prodlist-i-skuitem">
                            <p class="prodlist-i-skuttl">Clothes sizes</p>
                            <div class="offer-props-select">
                                <p>XS</p>
                                <ul>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li class="active"><a href="#">XS</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                    <li><a href="#">XXXL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prodlist-i-addwrap">
                            <a href="{{route('route_FrontEnd_Cart_add', $product->id)}}" class="prodlist-i-add">Thêm vào giỏ hàng</a>
                        </p>

                        <span class="block" style="font-size: larger" class="prodlist-i-price">
							<b>${{$product->product_price}}</b>
                        </span>
                    </div>
                    <p class="prodlist-i-info">
                        <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Yêu thích sản phẩm</a>
                        <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Xem nhanh</a>
                        <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> So sánh</a>
                    </p>
                </div>

            </div>
        </div>
            @endforeach



            <!-- Pagination - start -->
        <ul class="pagi">
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
        <!-- Pagination - end -->
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
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/1.jpg">
                                <img src="/img/popup/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/2.jpg">
                                <img src="/img/popup/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/3.jpg">
                                <img src="/img/popup/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/4.jpg">
                                <img src="/img/popup/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/5.jpg">
                                <img src="/img/popup/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/6.jpg">
                                <img src="/img/popup/6.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="/img/popup/7.jpg">
                                <img src="/img/popup/7.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        <li>
                            <a data-slide-index="0" href="#">
                                <img src="/img/popup/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="1" href="#">
                                <img src="/img/popup/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="2" href="#">
                                <img src="/img/popup/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="3" href="#">
                                <img src="/img/popup/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="4" href="#">
                                <img src="/img/popup/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="5" href="#">
                                <img src="/img/popup/6.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="6" href="#">
                                <img src="/img/popup/7.jpg" alt="">
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
