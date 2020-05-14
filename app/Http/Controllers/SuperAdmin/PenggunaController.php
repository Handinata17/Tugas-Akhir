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
    }

    public function store(Request $request){
        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            'jabatan' => $request->jabatan,
            'password' => bcrypt(12345678),
        ]);

        return redirect()->route('pengguna');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        $organisasi = Organisasi::orderBy('nama','ASC')->get();

        // dd($pengguna);   
        return view('pages.superadmin.pengguna.edit', compact('pengguna','organisasi'));
    }

    public function update(Request $request, $id){
        $pengguna = Pengguna::find($id);
        $pengguna->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'organisasi' => $request->organisasi,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('pengguna');
    }


}