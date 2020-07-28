<?php

namespace App\Http\Controllers\Pengguna;
use App\Pengguna;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

class ProfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }
    public function index()
    {
        $user = Auth::user();
        return view('pages.pengguna.profil.profil', compact('user'));

    }

    public function updatePassword(Request $request){
        $this->validate(request(), [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = Auth::user();
        // dd($request->old_password);

        if(Hash::check($request->old_password, $user->password)){
           $user->update(['password' => bcrypt($request->password)]);
           return back()->with('success','Password berhasil diubah');
        }else{
            return back()->with('failed','Password lama tidak cocok');
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate(request(), [
            'nama' => 'required',
            'email' => 'required|email|unique:penggunas,email,'.$user->id,
        ]);

        $user->nama = request('nama');
        $user->email = request('email');

        $user->update();

        return back()->with('success','');
    }

}
