@extends('layouts.front.layout')

@section('content')
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index-2.html">
                    Home
                </a>
            </li>
            <li>
                <span>Cart</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->
        <form action="#">

            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Photo</td>
                        <td class="cart-ttl">Products</td>
                        <td class="cart-price">Price</td>
                        <td class="cart-quantity">Quantity</td>
                        <td class="cart-summ">Summ</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        <td class="cart-image">
                            <a href="product.html">
                                <img src="/img/front/popular/1/{{$item->options->image}}" alt="Similique delectus totam">
                            </a>
                        </td>
                        <td class="cart-ttl">
                            <a href="product.html">{{$item->name}}</a>
                            <p>Color: Red</p>
                            <p>Size: XS</p>
                        </td>
                        <td class="cart-price">
                            <b>{{$item->price}}</b>
                        </td>
                        <td class="col-2">
                                <form action="{{ route('route_FrontEnd_Cart_update', $item->rowId) }}" method="post">
                                    <div class="text-center" style="width: 100px" class="form-group">
                                        @csrf
                                        <input  name="update_qty" type="number" class="form-control" value="{{ $item->qty }}" min="1" size="3">
                                        <div><button type="submit">Edit</button></div>
                                    </div>
                                </form>


                        </td>
                        <td class="cart-summ">
                            <b>${{$item->price * $item->qty}}</b>
                            <p class="cart-forone">unit price <b>$</b></p>
                        </td>
                        <td class="cart-del">
                            <a href="{{route('route_FrontEnd_Cart_delete', $item->rowId)}}" class="cart-remove"></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>${{ Cart::subTotal() }}</b></li>
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
                    <input placeholder="your coupon" type="text">
                    <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt="your coupon"></a>
                </div>
                <a href="#" class="cart-submit-btn">Checkout</a>
                <a href="#" class="cart-clear">Clear cart</a>
            </div>
        </form>
        <!-- Cart Items - end -->

    </section>
</main>
<!-- Main Content - end -->
@endsection
