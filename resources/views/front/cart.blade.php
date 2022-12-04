@extends('layouts.front.layout')

@section('content')
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index-2.html">
                    Trang chủ
                </a>
            </li>
            <li>
                <span>Giỏ hàng</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Giỏ hàng</span></h1>
        <!-- Cart Items - start -->

            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Ảnh sản phẩm</td>
                        <td class="cart-ttl">Sản phẩm</td>
                        <td class="cart-price">Giá tiền</td>
                        <td class="cart-quantity">Số lượng</td>
                        <td class="cart-summ">Tổng</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        <td class="cart-image">
                            <a href="product.html">
                                <img src="{{ $item->options->image ? ''.Storage::url($item->options->image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}" alt="Similique delectus totam">
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
                <li class="cart-summ">Tổng tiền: <b>${{ Cart::subTotal() }}</b></li>
            </ul>
            <div class="cart-submit">
                <a href="{{route('route_FrontEnd_Order_index')}}" class="cart-submit-btn">Thanh toán</a>
                <a href="{{route('route_FrontEnd_Cart_clear')}}" class="cart-clear">Xóa giỏ hàng</a>
            </div>
        <!-- Cart Items - end -->
    </section>
</main>
<!-- Main Content - end -->
@endsection
