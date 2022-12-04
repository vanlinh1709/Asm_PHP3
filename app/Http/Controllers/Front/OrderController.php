<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
        //
        $modelCategory = new Category();
        $this->v['listCate'] = $modelCategory->loadList();
    }
    public function index() {
        return view('front.order', $this->v);
    }
    public function add(OrderRequest $request) {
        //chuan bi data
        $data = $request->post();
        $params = [];
        //
        if(Auth::user()) {
            $modelUser = new User();
            $id_user = $modelUser->getIdbyEmail($data['email'])->id;
        }
        $params['cols']['id'] = rand(1,10000000);
        $params['cols']['user_id'] = isset($id_user) ? $id_user : null;
        $params['cols']['customer_name'] = $data['name'];
        $params['cols']['customer_phonenumber'] = $data['phone'];
        $params['cols']['customer_address'] = $data['address'];
        $params['cols']['customer_email'] = $data['email'];
        $params['cols']['total_money'] = (double)Cart::subTotal(0,'','');
//        dd($params['cols']);
        //
        $modelOrder = new Order();
        $modelOrder->saveNew($params);
        //
        //Order Details
        $modelOrderDetails = new OrderDetail();
        foreach (Cart::content() as $item) {
            $pramsOd = [];
            $paramsOd['cols']['order_id'] = $params['cols']['id'];
            //
            $paramsOd['cols']['product_id'] = $item->id;
            //
            $paramsOd['cols']['quantity'] = $item->qty;
            $paramsOd['cols']['product_price'] = $item->price;
            $paramsOd['cols']['total_money'] = $item->qty * $item->price;
            $modelOrderDetails->saveNew($paramsOd);
        }
        Cart::destroy();
        return redirect()->route('route_FrontEnd_Home_index');
    }
}
