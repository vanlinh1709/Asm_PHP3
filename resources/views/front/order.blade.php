@extends('layouts.front.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/style1.css')}}">
@endsection
@section('content')
    @php
        $objUser = \Illuminate\Support\Facades\Auth::user();
        $numberProductofCart = \Gloudemans\Shoppingcart\Facades\Cart::content()->count();
    @endphp
    <div class="checkout-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- Checkout Billing Details -->
                <div class="col-lg-6">
                    <div class="checkout-billing-details-wrap">
                        <form action="{{route('route_FrontEnd_Order_add')}}" method="post">
                            @csrf
                        <h5 class="checkout-title">Thông tin thanh toán</h5>

                            <div class="billing-form-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label for="f_name" class="required">Họ và tên</label>
                                            <input type="text" id="f_name" placeholder="Họ và tên" name="name" value="@isset($objUser){{ $objUser->name}}@endisset">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-input-item">
                                    <label for="email" class="required">Địa chỉ email</label>
                                    <input type="email" id="email" placeholder="Địa chỉ email" name="email" value="@isset($objUser){{ $objUser->email}}@endisset">
                                </div>
                                <div class="single-input-item">
                                    <label for="street-address" class="required mt-20">Địa chỉ nhận hàng</label>
                                    <input type="text" id="street-address" placeholder="Địa chỉ" name="address" value="">
                                </div>

                                <div class="single-input-item">
                                    <label for="phone" class="required mt-20">Số điện thoại</label>
                                    <input type="text" id="phone" placeholder="Phone" name="phone" value="">
                                </div>



                                <div class="single-input-item">
                                    <label for="ordernote">Ghi chú</label>
                                    <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Ghi ghi cho cho người vận chuyển"></textarea>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Order Summary Details -->
                <div class="col-lg-6">

                    <div class="order-summary-details">
                        <h5 class="checkout-title">Chi tiết đơn hàng</h5>
                        <div class="order-summary-content">
                            <!-- Order Summary Table -->
                            <div class="order-summary-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><b>Sản phẩm</b></th>
                                        <th class="text-center"><b>Tổng</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (Cart::content() as $item)
                                    <tr>

                                        <td><a href="product-details.html">{{$item->name}}<strong class="text-danger"> × {{$item->qty}}</strong></a></td>
                                            <td>{{$item->price}}đ</td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>Tổng tiền cho đơn hàng</td>
                                        <td>{{ Cart::subTotal() }}đ</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- Order Payment Method -->
                            <div class="summary-footer-area col text-center align-center">
                                <br>
                               <button type="submit" class="btn btn-sqr text-center">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
