@extends('layouts.admin.layout')
@section('content')
<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h3 class="">Chi tiết đơn hàng</h3>
                    </div>
                    <div class="card-body p-4">
                        @foreach($list as $item)
                        <div class="card shadow-0 border mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img width="100" src="{{ $item->product_image ? ''.Storage::url($item->product_image):'https://cdn-icons-png.flaticon.com/512/147/147142.png' }}" alt="">

                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class=""> {{$item->product_name}}</p>
                                    </div>

                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class=" ">Số lượng: {{$item->quantity}}</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class=" ">Đơn giá: {{$item->product_price}}</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class=" ">Tổng tiền: ${{$item->total_money}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0"></p>
                                <p class=""><span class="fw-bold me-4">Tổng đơn</span> ${{$order->total_money}}</p>
                            </div>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Chi tiết người đặt</p>
                            </div>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="">Họ và tên :  {{$order->customer_name}}</p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="">Địa chỉ: {{$order->customer_address}} </p>
                            </div>

                            <div class="d-flex justify-content-between mb-5">
                                <p class="">Số điện thoại : {{$order->customer_phonenumber}}</p>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @endsection
