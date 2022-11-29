<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $modelCategory = new Category();
        $listCategoryWithProduct = $modelProduct->loadListWithCate_id($id);
        $listCate = $modelProduct->loadList();
//        dd($listCategoryWithProduct);
        $this->v['listCategoryWithProduct'] = $listCategoryWithProduct;
        $this->v['listCate'] = $listCate;
        return view('front.category',$this->v);
    }
}
