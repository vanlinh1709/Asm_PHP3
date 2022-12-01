<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
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
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('avatar',$fileName,'public');
    }
}
