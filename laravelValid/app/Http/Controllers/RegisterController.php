<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
class RegisterController extends Controller
{
    function create(){
        return View("register");
    }
    function store(Request $request){
        $messages = [
            'username.required' => 'Chưa nhập tên đăng nhập',
            'username.max' => 'Tối đa 10 kí tự',
            'email.required' => 'Chưa nhập Email',
            'password.required' => 'Chưa nhập Password',
            'password.confirmed' => 'Password Không Khớp'
        ];
        $this->validate($request,[
            'username'=>'required|digits:3',
            'email'=>'required|max:20',
            'password'=>'required|confirmed|min:3|required_with:password_confirmation|same:password_confirmation'
        ],$messages);
        return 'true';
    }

}
