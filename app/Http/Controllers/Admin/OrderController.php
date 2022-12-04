<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Faker\Core\Number;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(Request $request) {
        $this->v['_title'] = 'Trang quản lý đơn hàng';
        $modelOrder = new Order();
        $this->v['extParams'] = $request->all();
        $list = $modelOrder->loadListWithPaginate($this->v['extParams']);
        $this->v['list'] = $list;
        return view('admin.order.index', $this->v);
    }
    public function update($id, Request $request) {
        $modelOrder = new Order();
        $item = $modelOrder->loadOne($id);
        $this->v['item'] = $item;
//        dd($item);
        if($request->isMethod('post')) {
            $data = $request->post();
            $params['cols']['status_id'] = $data['status_id'];
            $params['cols']['id'] = $id;
            $modelOrder = new Order();
            $modelOrder->saveUpdate($params);

            return redirect()->route('route_BackEnd_Order_index');
        }
        return view('admin.order.update', $this->v);
    }
    public function detail($id) {
        $this->v['_title'] = 'Trang chi tiết đơn hàng';
        $modelOrderDetail = new OrderDetail();
        $modelOrder = new Order();
        $modelProduct = new Product();
        $order = $modelOrder->loadOne($id);
        //
        $listProduct = $modelOrderDetail->loadList($id);
        foreach ($listProduct as $item) {
            $item->product_name = $modelProduct->LoadOne($item->product_id)->product_name;
            $item->product_image = $modelProduct->LoadOne($item->product_id)->product_image;
        }
//        dd($listProduct);
        $order = $modelOrder->loadOne($id);
        $this->v['order'] = $order;
        $this->v['list'] = $listProduct;
        return view('admin.order.detail', $this->v);
    }
}
