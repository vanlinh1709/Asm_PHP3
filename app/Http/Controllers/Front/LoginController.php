<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(LoginRequest $request) {

        //Chuan bi du lieu mac dinh cho view
        $method_route = 'route_FrontEnd_Login_index';
        $this->v['_title'] = 'Trang đăng nhâp';
        $modelCate = new Category();
        $this->v['listCate'] = $modelCate->loadList();
        //
        if($request->isMethod('post')) {
            //Xac thuc tai khoan
            $email = $request->input('email');
            $password = $request->input('password');
            $data = compact('email', 'password');
//            dd($data);
            $auth = Auth::attempt($data);
            if($auth) {
                return redirect()->route('route_FrontEnd_Home_index');
            } else {
                //Tai khoan khong ton tai
                Session::flash('error', 'Tài khoản không tồn tại');
                return redirect()->route($method_route);
            }
        }
        return view('front.login', $this->v);
    }
}
