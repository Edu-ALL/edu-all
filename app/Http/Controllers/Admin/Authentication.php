<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Authentication extends Controller
{
    public function loginAdmin(Request $request){
        $credentials = $request->only('email', 'password');

        $rules = [
            'email' => 'required|email|exists:tb_users,email',
            'password' => 'required|min:6',
        ];

        $messages = [
            "email.exists" => "This email has not been registered",
            "password.required" => "Your password is wrong."
        ];

        $validator = Validator::make($credentials, $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        if (!Auth::guard('web-admin')->attempt($credentials)) {
            return Redirect::back()->withErrors($validator->messages());
            // return Redirect::back()->with("error-password", "Your password is wrong.");
            // return Redirect::back()->withErrors("Your password is wrong.");
        }

        return redirect('/admin/dashboard')->withSuccess('Signed in successfully');
    }

    public function logout()
    {
        Auth::guard('web-admin')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
