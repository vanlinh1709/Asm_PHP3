<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin() {
        return view('auth.login');
    }
    public function postLogin(Request $request) {
        $data = $request->all();
//        dd($data);
        $email = $data['email'];
        $password = $data['password'];
//        dd($email, $password);

        //Validate form
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $messages = [
            'email' => 'Vui lòng    nhập đúng định dạng email',
            'password' => 'Vui lòng nhập password',
        ];
        $validator = Validator::make(compact('email', 'password'),
                                    $rules, $messages);
        if($validator->fails()) {
            return redirect('login')->withErrors($validator);
        } else {
            //Check tai khoan
            $hasUser = Auth::attempt(compact('email', 'password'));
            if($hasUser) {
                return redirect('admin');
            }
        }
    }
}
