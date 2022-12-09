<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(LoginRequest $request) {
        //Chuan bi du lieu mac dinh cho view
        $method_route = Route::currentRouteName();
//        dd($method_route);
        $method_redirect_route = 'route_FrontEnd_Home_index';//route login
        $viewLogin = 'front.login';
        $role_id = 1;
        if($method_route == 'route_BackEnd_Login_index') {
            $method_redirect_route = 'route_BackEnd_Home_index';
            $viewLogin = 'admin.login';
            $role_id = 2;
        }
//        dd($viewLogin, $role_id, $method_redirect_route);
//        dd($method_redirect_route);
        $this->v['_title'] = 'Trang đăng nhâp';
        //
        $modelCate = new Category();
        $this->v['listCate'] = $modelCate->loadList();
        //
        if($request->isMethod('post')) {
            //Xac thuc tai khoan
            $email = $request->input('email');
            $password = $request->input('password');
            $data = compact('email', 'password','role_id');
//            dd($data);
            $auth = Auth::attempt($data);
            if($auth) {
                return redirect()->route($method_redirect_route);
            } else {
//                dd($method_route);
                //Tai khoan khong ton tai
                Session::flash('error', 'Tài khoản không tồn tại');
                return redirect()->route($method_route);
            }
        }
        return view($viewLogin, $this->v);
    }
    public function getLogOut() {
        Auth::logout();
        return redirect()->back();
    }
}
