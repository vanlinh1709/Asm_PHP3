<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(SignUpRequest $request) {
//        dd(1);
        $this->v['_title'] = 'Trang đăng ký';
        if($request->isMethod('post')) {
            $method_route = 'route_FrontEnd_SignUp_index';
            //
            $params = [];
            $params['cols'] = $request->post();
                unset($params['cols']['_token']);
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid())
            {   //Nếu tồn tại file ảnh được up lên thì thay đỏi tên của ảnh và đưa ảnh đó vào thư muc chỉ định
                $params['cols']['avatar'] = $this->uploadFile($request->file('avatar'));
            }
            //Thực hiện push data vào database
            $modelUser = new User();
            $res = $modelUser->saveNew($params);
            if($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Đăng ý thành công');
            } else {
                Session::flash('error', 'Đăng ký thất bại');
            }//end if
        }//endif
//        dd(1);
        $modelCate = new Category();
        $this->v['listCate'] = $modelCate->loadList();
        return view('front.signUp', $this->v);
    }//
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('avatar',$fileName,'public');
    }
}
