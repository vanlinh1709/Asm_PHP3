<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
}
