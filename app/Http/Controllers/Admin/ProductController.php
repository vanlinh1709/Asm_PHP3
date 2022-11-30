<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(Request $request) {
        $this->v['_title'] = 'Trang quản lý sản phẩm';
        $modelProduct = new Product();
        $this->v['extParams'] = $request->all();
        $list = $modelProduct->loadListWithPaginate($this->v['extParams']);
        //
        $this->v['list'] = $list;
        return view('admin.product.index', $this->v);
    }
}
