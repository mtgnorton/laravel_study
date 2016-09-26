<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    /**
     * 处理认证
     *
     * @return Response
     */
    public function authenticate()
    {
        // 尝试登录
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 认证通过...
            // return redirect()->intended('dashboard');
        }
    }
    static function showLoginForm(){}
}