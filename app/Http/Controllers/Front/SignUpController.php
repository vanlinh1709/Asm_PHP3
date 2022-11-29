<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index() {
        $this->v['_title'] = 'Trang đăng ký';
        $modelCate = new Category();
        $this->v['listCate'] = $modelCate->loadList();
        return view('front.signUp', $this->v);
    }
}
