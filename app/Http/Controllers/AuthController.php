<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignIn()
    {
        return view('signin');
    }

    public function CheckSignIn(Request $request)
    {
        $data = $request->all();

        if ($data['password'] !== $data['repass']) {
            return 'Đăng ký thất bại';
        }

        if (
            $data['username'] === 'Tuanlm' &&
            $data['password'] === '123456' && 
            $data['mssv'] === '0106067' &&
            $data['lopmonhoc'] === '67PM1' &&
            $data['gioitinh'] === 'nam'
        ) {
            return 'Đăng ký thành công!';
        }

        return 'Đăng ký thất bại';
    }
}
