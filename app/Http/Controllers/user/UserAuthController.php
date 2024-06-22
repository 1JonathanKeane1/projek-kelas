<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Login Success!');
        }

        return back()->with('error', 'Login Failed');
    }

    public function register(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:Users',
            'password'  => 'required|confirmed',
        ]);

        // dd($validatedData);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/')->with('success', 'Berhasil Daftar');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();     

        return redirect('/');
    }
}
