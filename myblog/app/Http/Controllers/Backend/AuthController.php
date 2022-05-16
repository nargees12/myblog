<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view(){
        return view('backend.auth.login');
}
    public function login(Request $request){
        if (Auth::guard('admin')->attempt($request->only(['email', 'password']))){
        return redirect()->route('backend.dashboard');
        }
        return redirect()->route('backend.login')->withErrors('Invalid email or password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('backend.login');
    }
}
