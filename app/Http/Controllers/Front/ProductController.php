<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index($id) {
        $this->v['_title'] = 'Chi tiết sản phẩm';
        //
        $modelProduct = new Product();
        $modelCategory = new Category();
        //
        $product = $modelProduct->LoadOne($id);
        $listCate = $modelProduct->loadList();
//        dd($product);
        //
        $this->v['product'] = $product;
        $this->v['listCate'] = $listCate;
        //
        return view('front.productDetail', $this->v);
    }
}
