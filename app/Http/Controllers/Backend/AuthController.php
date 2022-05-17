<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login_view(){
        return view('backend.auth.login');
}

    public function login(LoginRequest  $request){
        try{
            $remember=$request->remember ? true: false;
            if (Auth::guard('admin')->attempt($request->only(['email', 'password']),$remember)){
                Alert::success('Successful Login','Welcome to Admin Panel');
                return redirect()->route('backend.dashboard');
            }
            Alert::error('Invalid email or password', 'Check your email and password');
            return redirect()->back();
        }
        catch(\Exception $e){
            Log::channel('backend')->error($e->getMessage());
            Alert::error('Error', 'System Error');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        Alert::success('Successful Logout', 'Enter your email and password to login');
        return redirect()->route('backend.login.view');
    }

}
