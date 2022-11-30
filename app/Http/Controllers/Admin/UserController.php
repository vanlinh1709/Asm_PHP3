<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index()
    {
        $this->v['_title'] = 'Trang danh sách tài khoản';
        //
        $modelUser = new User();
        $list = $modelUser->loadList();
        //
        $this->v['list'] = $list;
        return view('admin.user.index', $this->v);
    }
    public function add() {
        $this->v['_title'] = 'Trang thêm tài khoản';
        return view('admin.user.add', $this->v);
    }
}
