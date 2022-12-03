@extends('layouts.front.layout')
@section('title', $_title);
@section('content')
    <!--Duong dan -->
    <ul class="b-crumbs">
        <li>
            <a href="index-2.html">
                Home
            </a>
        </li>
        <li>
            <a href="catalog-list.html">
                Catalog
            </a>
        </li>
        <li>
            <a href="catalog-list.html">
                Women
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
                        <a data-fancybox-group="product" class="fancy-img" href="/img/front/popular/1/{{$product->product_image}}">
                            <img src="/img/front/popular/1/{{$product->product_image}}" alt="">
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
                <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Wishlist</a>
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
                <p class="prod-skuttl">CLOTHING SIZES</p>
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
                    <a href="/cart/add/{{$product->id}}" class="prod-add" rel="nofollow">Thêm vào giỏ hàng</a>
                </p>
            </div>
            <ul class="prod-i-props">
                <li>
                    <b>SKU</b> 05464207
                </li>
                <li>
                    <b>Material</b> Nylon
                </li>
                <li>
                    <b>Pattern Type</b> Solid
                </li>
                <li>
                    <b>Wash</b> Colored
                </li>
                <li>
                    <b>Style</b> Sport
                </li>
                <li>
                    <b>Color</b> Blue
                </li>
                <li>
                    <b>Gender</b> Unisex
                </li>
                <li>
                    <b>Rain Cover</b> No
                </li>
                <li>
                    <b>Exterior</b> Solid Bag
                </li>
                <li><a href="#" class="prod-showprops">All Features</a></li>
            </ul>
        </div>

        <!-- Product Tabs -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
                <li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">Features</a></li>
                <li><a data-prodtab-num="3" href="#" data-prodtab="#prod-tab-3">Video</a></li>
                <li><a data-prodtab-num="4" href="#" data-prodtab="#prod-tab-4">Articles (6)</a></li>
                <li><a data-prodtab-num="5" href="#" data-prodtab="#prod-tab-5">Reviews (3)</a></li>
            </ul>
            <div class="prod-tab-cont">

                <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                <div class="prod-tab stylization" id="prod-tab-1">
                    {{$product->product_des}}
                </div>
                <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
                <div class="prod-tab prod-props" id="prod-tab-2">
                    <table>
                        <tbody>
                        <tr>
                            <td>SKU</td>
                            <td>05464207</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Nylon</td>
                        </tr>
                        <tr>
                            <td>Pattern Type</td>
                            <td>Solid</td>
                        </tr>
                        <tr>
                            <td>Wash</td>
                            <td>Colored</td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td>Sport</td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td>Blue</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>Unisex</td>
                        </tr>
                        <tr>
                            <td>Rain Cover</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Exterior</td>
                            <td>Solid Bag</td>
                        </tr>
                        <tr>
                            <td>Closure Type</td>
                            <td>Zipper</td>
                        </tr>
                        <tr>
                            <td>Handle/Strap Type</td>
                            <td>Soft Handle</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>33cm x 18cm x 48cm</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Video</p>
                <div class="prod-tab prod-tab-video" id="prod-tab-3">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
                <p data-prodtab-num="4" class="prod-tab-mob" data-prodtab="#prod-tab-4">Articles (6)</p>
                <div class="prod-tab prod-tab-articles" id="prod-tab-4">
                    <div class="flexslider post-rel-wrap" id="post-rel-car">
                        <ul class="slides">
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog1.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>09</span> Feb</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Articles</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Adipisci corporis velit</a></h3>
                                </div>
                            </li>
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog2.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>05</span> Jan</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Excepturi ducimus recusandae</a></h3>
                                </div>
                            </li>
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog3.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>17</span> Apr</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Consequuntur minus numquam</a></h3>
                                </div>
                            </li>
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog4.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>21</span> May</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Articles</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Non ex sapiente excepturi</a></h3>
                                </div>
                            </li>
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog5.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>24</span> Jan</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Articles</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Veritatis officiis</a></h3>
                                </div>
                            </li>
                            <li class="posts-i">
                                <a class="posts-i-img" href="post.html"><span style="background: url(/img/blog/blog6.jpg)"></span></a>
                                <time class="posts-i-date" datetime="2017-01-01 08:18"><span>08</span> Sep</time>
                                <div class="posts-i-info">
                                    <a class="posts-i-ctg" href="blog.html">Reviews</a>
                                    <h3 class="posts-i-ttl"><a href="post.html">Ratione magni laudantium</a></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <p data-prodtab-num="5" class="prod-tab-mob" data-prodtab="#prod-tab-5">Reviews (3)</p>
                <div class="prod-tab" id="prod-tab-5">
                    <ul class="reviews-list">
                        <li class="reviews-i existimg">
                            <div class="reviews-i-img">
                                <img src="/img/reviews/1.jpg" alt="Averill Sidony">
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                            </div>
                            <div class="reviews-i-cont">
                                <p>Numquam aliquam maiores ratione dolores ducimus, laborum hic similique delectus. Neque saepe nobis omnis laudantium itaque tempore voluptate harum error, illum nemo, reiciendis architecto, quam tenetur amet sit quisquam cum.<br>Pariatur cum tempore eius nulla impedit cumque odit quos porro iste a voluptas, optio alias voluptate minima distinctio facere aliquid quasi, vero illum tenetur sed temporibus eveniet obcaecati.</p>
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Averill Sidony</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                <p>Thanks for your feedback!<br>
                                    Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.</p>
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                        <li class="reviews-i existimg">
                            <div class="reviews-i-img">
                                <img src="/img/reviews/3.jpg" alt="Araminta Kristeen">
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">14 February 2017</time>
                            </div>
                            <div class="reviews-i-cont">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Araminta Kristeen</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                Benjy, hi!<br>
                                Officiis culpa quos, quae optio quia.<br>
                                Amet sunt dolorem tempora, pariatur earum quidem adipisci error voluptates tempore iure, nobis optio temporibus voluptatum delectus natus accusamus incidunt provident sapiente explicabo vero labore hic quo?
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                        <li class="reviews-i">
                            <div class="reviews-i-cont">
                                <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                                <div class="reviews-i-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                <span class="reviews-i-margin"></span>
                                <h3 class="reviews-i-ttl">Jeni Margie</h3>
                                <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                            </div>
                            <div class="reviews-i-answer">
                                Hello, Jeni Margie!<br>
                                Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.
                                <span class="reviews-i-margin"></span>
                            </div>
                        </li>
                    </ul>
                    <div class="prod-comment-form">
                        <h3>Add your review</h3>
                        <form method="POST" action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="E-mail">
                            <textarea placeholder="Your review"></textarea>
                            <div class="prod-comment-submit">
                                <input type="submit" value="Submit">
                                <div class="prod-rating">
                                    <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Single Product - end -->

    <!-- Related Products - start -->
    <div class="prod-related">
        <h2><span>Related products</span></h2>
        <div class="prod-related-car" id="prod-related-car">
            <ul class="slides">
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/1/1.jpg" alt="Adipisci aperiam commodi">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Adipisci aperiam commodi</a></h3>
                            <p class="prod-rel-price">
                                <b>$59</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/2/1.jpg" alt="Nulla numquam obcaecati">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Nulla numquam obcaecati</a></h3>
                            <p class="prod-rel-price">
                                <b>$48</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/3/1.jpg" alt="Dignissimos eaque earum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Dignissimos eaque earum</a></h3>
                            <p class="prod-rel-price">
                                <b>$37</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/4/1.jpg" alt="Porro quae quasi">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Porro quae quasi</a></h3>
                            <p class="prod-rel-price">
                                <b>$85</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/5/1.jpg" alt="Sunt temporibus velit">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Sunt temporibus velit</a></h3>
                            <p class="prod-rel-price">
                                <b>$115</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/6/1.jpg" alt="Harum illum incidunt">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Harum illum incidunt</a></h3>
                            <p class="prod-rel-price">
                                <b>$130</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/7/1.jpg" alt="Reprehenderit rerum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Reprehenderit rerum</a></h3>
                            <p class="prod-rel-price">
                                <b>$210</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/8/1.jpg" alt="Quae quasi adipisci alias">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Quae quasi adipisci alias</a></h3>
                            <p class="prod-rel-price">
                                <b>$85</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="prod-rel-wrap">
                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/9/1.jpg" alt="Maxime molestias necessitatibus nobis">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Maxime molestias necessitatibus nobis</a></h3>
                            <p class="prod-rel-price">
                                <b>$95</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="prod-rel">
                        <a href="product.html" class="prod-rel-img">
                            <img src="/img/catalog-gallery/10/1.jpg" alt="Facilis illum">
                        </a>
                        <div class="prod-rel-cont">
                            <h3><a href="product.html">Facilis illum</a></h3>
                            <p class="prod-rel-price">
                                <b>$150</b>
                            </p>
                            <div class="prod-rel-actions">
                                <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                <p class="prod-i-addwrap">
                                    <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <!-- Related Products - end -->
@endsection
