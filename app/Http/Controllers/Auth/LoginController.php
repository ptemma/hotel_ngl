<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $username = $request->input('username');
        $password = $request->input('password');


        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            $user = Auth::user();
            Session::put('user', $user);
            return redirect()->intended('/'); // Đây là route của trang hotel, bạn cần thay đổi tên route tương ứng với ứng dụng của bạn
        } else {
            // Đăng nhập thất bại, xử lý lỗi hoặc hiển thị thông báo lỗi
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
