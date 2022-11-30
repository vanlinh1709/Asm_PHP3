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
    public function index() {
        $this->v['_title'] = 'Trang quản lý sản phẩm';
        $modelProduct = new Product();
        $list = $modelProduct->loadList();
        //
        $this->v['list'] = $list;
        return view('admin.product.index', $this->v);
    }
}
