<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('guest:superadmin')->except(['logout']);
    }

    public function getLogin(){
        return view('auth_superadmin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('superadmin')->attempt($credential)){
            return redirect('superadmin/pengguna');
        }
        return redirect()->back()->withInput($request->only('email'));


    }

    public function logout()
        {
            Auth::guard('superadmin')->logout();
            return redirect()->route('superadmin.login');
        }
}
