<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index(){
        return view('/auth.registration',[
            'title' => 'Sign Up'
        ]);
    }

    public function save(Request $request){
        $validatedData = $request -> validate([
            'username' => 'required|unique:users|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if(User::create($validatedData)){
            return redirect()->route('login')->with('success', 'Selamat, Akun berhasil dibuat!');
        }
        return back()->route('registration')->with('error', 'Gagal membuat akun, silahkan periksa kembali!');
    }
}