<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index() {
        $this->v['_title'] = 'Trang chủ';
        $Cate = new Category();
        $Product = new Product();
        //
        $listCate = $Cate->loadList();
//        dd($listCate);
        $listProduct = $Product->loadList();
        //
        $allListCatesWithProduct = [];
        foreach ($listCate as $index => $cate) {
            $cate_id = $cate->id;
            $listCateWithProduct = $Product->loadListWithCate_id($cate_id);
            array_push($allListCatesWithProduct, $listCateWithProduct);
        }
        //
        $this->v['listCate'] = $listCate;
        $this->v['listProduct'] = $listProduct;
        $this->v['allListCatesWithProduct'] = $allListCatesWithProduct;
//        dd($allListCatesWithProduct);
        return view('front.home', $this->v);
    }
}
