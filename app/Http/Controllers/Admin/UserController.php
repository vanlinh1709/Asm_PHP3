<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(Request $request)
    {
        $this->v['_title'] = 'Trang danh sách tài khoản';
        //
        $modelUser = new User();
        //
        $this->v['extParams'] = $request->all();
        $list = $modelUser->loadListWithPaginate($this->v['extParams']);
        $this->v['list'] = $list;
        return view('admin.user.index', $this->v);
    }
    public function add(UserRequest $request) {
        $this->v['_title'] = 'Trang thêm tài khoản';
        //post
        if($request->isMethod('post')) {
            //chuan bi data
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
                //data file
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('avatar'));
            }
//            dd($params['cols']);
            //dua data vao database
            $modelUser = new User();
            $modelUser->saveNew($params);
        }//end root-if
        return view('admin.user.add', $this->v);
    }
    //luu tru file trong thu muc, neu chua co no se tu tao trong thu muc storage/app/public/avatar

    public function delete($id) {
        $modelUser = new User();
        $modelUser->del($id);
        return redirect()->back();
    }
    public function update($id, UserRequest $request) {
        $this->v['_title'] = 'Trang cập nhập tài khoản';
//        dd($user);
        if ($request->isMethod('post')) {
            $method_route = 'route_BackEnd_User_update';
            $params = [];
            $params['cols'] = $request->post();
            $params['cols']['id'] = $id;
            //anh
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('avatar'));
            }
            //
            if(!is_null($params['cols']['password'])) {
                $params['cols']['password'] = Hash::make($params['cols']['password']);
            }
            unset($params['cols']['_token']);
            $modelUser = new User();

            $res = $modelUser->saveUpdate($params);
            if($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Cập nhập thành công nguoi dung');
            } else {
                Session::flash('error', 'Loi them moi  nguoi dung');
            }
        }//end root-if
        $modelUser = new User();
        $user = $modelUser->loadOne($id);
        $this->v['user'] = $user;
        return view('admin.user.update', $this->v);
    }
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('avatar',$fileName,'public');
    }
}
