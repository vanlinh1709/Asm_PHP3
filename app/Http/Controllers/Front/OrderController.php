<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $params = [];
        $params['cols'] = $request->post();
        dd($params['cols']);

        return 'Thanh toán thành công';
    }
}
