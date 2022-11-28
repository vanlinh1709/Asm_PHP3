<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index($id) {
        $this->v['title_'] = 'Trang danh mục sản phẩm';
        $modelProduct = new Product();
        $listCategoryWithProduct = $modelProduct->loadListWithCate_id($id);
//        dd($listCategoryWithProduct);
        $this->v['listCategoryWithProduct'] = $listCategoryWithProduct;
        return view('front.category',$this->v);
    }
}
