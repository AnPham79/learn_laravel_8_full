<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function process_login(Request $request) {
        $dataValidation = $request->validate([
            'email' => 'required|email',
            'matkhau' => 'required|min:6|max:8',
        ]);

        $email = $request->input('email');
        $matkhau = $request->input('matkhau');
        $token  = $request->input('_token');

        return 'email của bạn' . $email . '</br>' . 'mật khẩu' . $matkhau .  '</br>' . 'token' . $token;
    }
}
