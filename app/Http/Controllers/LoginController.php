<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function index(){
        return view('/auth.login',[
            'title' => 'Login Page'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin/features/dashboard')->with('success', 'Login Berhasil');
        }
        return back()->with('error', 'Login gagal!, Periksa kembali username atau password');
    }

    public function logout(Request $request){
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda telah logout');
    }
}