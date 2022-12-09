<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(Request $request)
    {
        $this->v['_title'] = 'Trang danh sách danh muc';
        //
        $modelUser = new Category();
        //
        $list = $modelUser->loadList();
        $this->v['list'] = $list;
        return view('admin.category.index', $this->v);
    }
}
