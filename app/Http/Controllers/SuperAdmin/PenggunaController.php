<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function __construct(){
        $this->middleware('auth:superadmin');
    }
    public function create(){
        return view('pages.superadmin.pengguna.create');
    }

    public function index(){
        $pengguna = Pengguna::all();
        return view('pages.superadmin.pengguna.data', compact('pengguna'));
        // return 'pengguna';
    }

    public function store(Request $request){
    $rule = [
        'nama' => 'required|regex:/^[\pL\s\-]+$/u|min:3',
        'email' => 'required|email|unique:penggunas',
      ];

   $message = [
     'required' => 'tidak boleh kosong.',
     'email' => 'Masukan email dengan benar.',
     'nama.regex' => 'Masukan nama dengan benar',
     'nama.min' => 'Masukan nama dengan benar',
     'email.unique' => 'Email sudah terdaftar'
   ];

   $this->validate($request, $rule, $message);

        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            'jabatan' => $request->jabatan,
            'password' => bcrypt(12345678),
        ]);

        return redirect()->route('pengguna')->with('success','Pengguna berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        $organisasi = Pengguna::orderBy('nama','ASC')->get();

        // dd($pengguna);
        return view('pages.superadmin.pengguna.edit', compact('pengguna','organisasi'));
    }

    public function update(Request $request, $id){
        $pengguna = Pengguna::find($id);
        $rule = [
            'nama' => 'required|regex:/^[\pL\s\-]+$/u|min:3',
            'email' => 'required|email|unique:penggunas,email,'.$pengguna->id,
          ];

       $message = [
         'required' => 'tidak boleh kosong.',
         'email' => 'Masukan email dengan benar.',
         'nama.regex' => 'Masukan nama dengan benar',
         'nama.min' => 'Masukan nama dengan benar',
         'email.unique' => 'Email sudah terdaftar di pengguna lain'
       ];

       $this->validate($request, $rule, $message);

        $pengguna->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'organisasi' => $request->organisasi,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('pengguna')->with('success','Pengguna berhasil ubah');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();
        return redirect()->route('pengguna');
    }

}
