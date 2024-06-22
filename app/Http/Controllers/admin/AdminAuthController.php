<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function login()
    {
    	return view('admin.pages.login.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);


        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->put('admin');

            return redirect('/admin')->with('success', 'Login Success!');
        }

        return back()->with('error', 'Login Failed');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();     

        return redirect('/admin/login');
    }
}