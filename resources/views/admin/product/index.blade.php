@extends('layouts.admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{--        @include('templates.header-action')--}}
        <div class="clearfix"></div>
        <div style="border: 1px solid #ccc;margin-top: 10px;padding: 5px;">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="search_ten_nguoi_dung" class="form-control" placeholder="Tên người dùng"
                                   value="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12" style="text-align:center;">
                        <div class="form-group">
                            <button type="submit" name="btnSearch" class="btn btn-primary btn-sm "><i
                                    class="fa fa-search" style="color:white;"></i> Search
                            </button>
                            <a href="{{ url('/user') }}" class="btn btn-default btn-sm "><i class="fa fa-remove"></i>
                                Clear </a>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-user-plus" style="color:white;"></i>
                                Add new</a>
                        </div>
                    </div>
                </div>

            </form>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content appTuyenSinh">
        <div id="msg-box">
            <?php //Hiển thị thông báo thành công?>
            @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi?>
            @if ( Session::has('error') )
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
        </div>

{{--        @if(count($list)<=0)--}}
{{--            <p class="alert alert-warning">--}}
{{--                Không có dữ liệu phù hợp--}}
{{--            </p>--}}
{{--        @endif--}}
        <div class="box-body table-responsive no-padding">
            <form action="" method="post">
                @csrf
                <span class="pull-right">Tổng số bản ghi tìm thấy: <span
                        style="font-size: 15px;font-weight: bold;">8</span></span>
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50px" class="text-center">
                                #ID
                            </th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Danh mục sản pẩm</th>
                            <th class="text-center">Giá gốc</th>
                            <th class="text-center">Giá khuyến mãi</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">
                                Ảnh sản phẩm
                            </th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Ngày nhập kho</th>
                        </tr>

                        @foreach($list as $item)
                            <tr>
                                {{--               <td><input type="checkbox" name="chk_hv[]" class="chk_hv" id="chk_hv_{{$item->id}}" value="{{$item->id}}"> </td>--}}
                                <td class="text-center">{{$item->id}}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="" style="white-space:unset;text-align: justify;"><i class="fa fa-edit">{{$item->product_name}}</i></a></td>
                                <td class="text-center">{{$item->cate_name}}</td>
                                <td class="text-center">{{$item->product_price}}   </td>
                                <td class="text-center">{{$item->promo_price}}   </td>
                                <td class="text-center">{{$item->number}}   </td>
                                <td class="text-center">
                                    <img src="/img/front/popular/1/{{$item->product_image}}" height="100">
                                     </td>
                                <td class="text-center">{{$item->status}}   </td>
                                <td class="text-center">{{$item->created_at}}   </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
        <br>
{{--        <div class="text-center">--}}
{{--            {{$list->appends($extParams)->links()}}--}}
{{--        </div>--}}
        <index-cs ref="index_cs"></index-cs>
    </section>
@endsection
