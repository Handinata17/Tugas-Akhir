<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;
use Auth;

class AuthPenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:pengguna')->except(['logout']);
    }

    public function getLogin()
    {
        return view('auth_pengguna.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            // 'email' => 'required|string|unique:penggunas',
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('pengguna')->attempt($credential)) {
            return redirect()->route('pengguna.beranda');
        }
        return redirect()->back()->withInput($request->only('email'))->with('warning', 'masukkan email dan password yang benar');
    }

    public function logout()
    {
        Auth::guard('pengguna')->logout();
        return redirect()->route('pengguna.login');
    }

    



}
