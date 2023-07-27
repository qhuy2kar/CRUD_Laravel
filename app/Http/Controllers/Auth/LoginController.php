<?php

// LoginController.php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Đăng nhập thành công
        return redirect()->intended('/sinhvien');
    } else {
        // Đăng nhập không thành công
        return redirect()->back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác',
        ]);
    }
}

}
