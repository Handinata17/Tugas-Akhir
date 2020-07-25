<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendaftaran;
use App\Pengguna;
use App\Recruitment;
use Auth;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftarans = Pendaftaran::orderBy('id','DESC')->get();

        // dd($pendaftarans);
        //   $events = Pengguna::where('organisasi', Auth::user()->organisasi)
        //   ->with('events')->get();

        //$events = Event::where('id_pengguna', Auth::user()->id)->get();
        return view('pages.pengguna.pendaftaran.index', compact('pendaftarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = Auth::user();
        $pendaftarans = Proker::where('organisasi',$pengguna->organisasi)->where('keterangan',$pengguna->keterangan)
        ->where('status', false)->get();

        return view('pages.pengguna.pendaftaran.create', compact('pendaftarans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nama_mahasiswa' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:pendaftarans',
            'nim' => 'required|unique:pendaftarans',
            'file' => 'required|file|max:2048',
          ];
          $message = [
            'required' => 'tidak boleh kosong.',
            'email' => 'Masukan email dengan benar.',
            'nama.regex' => 'Masukan nanma dengan benar',
            'unique.email' => 'Email sudah terdaftar',
            'unique.nim' => 'Nim sudah terdaftar'
          ];

          $this->validate($request, $rule, $message);

        $tanggal = now()->format('Y-m-d');
        $recruitment = Recruitment::where('id', $request->id_recruitment)
        ->whereDate('tanggal_mulai','<=',$tanggal)
        ->whereDate('tanggal_selesai','>=',$tanggal)
        ->first();

        if(!$recruitment){
            return redirect()->back()->with('failed');
        }else{

            $file = $request->file('file');
            $file_name = date('ymdHis') . "-" . $file->getClientOriginalName();
            $file_path = 'file/' . $file_name;
            Storage::disk('s3')->put($file_path, file_get_contents($file));
            $file = Storage::disk('s3')->url($file_path, $file_name);

            // $gambar = $request->file('gambar')->store('gambar');

            $pendaftaran = new Pendaftaran();
            $pendaftaran->nim = $request->nim;
            $pendaftaran->nama_mahasiswa = $request->nama_mahasiswa;
            $pendaftaran->email = $request->email;
            $pendaftaran->id_recruitment = $request->id_recruitment;
            $pendaftaran->file = $file;
            $pendaftaran->save();

            return redirect()->back()->with('success','');
        }



        // dd($request->all());

        // return redirect()->route('pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('pages.pengguna.pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $file = $request->file('file')->store('file');
        $pendaftaran = new Pendaftaran();
        $pendaftaran->id_pengguna = Auth::user()->id;
        $pendaftaran->id_recruitment = $request->id_recruitment;
        $event->nim = $request->nim;
        $event->nama_mahasiswa = $request->nama_mahasiswa;
        $event->email = $request->email;
        // $pendaftaran->organisasi = $request->organisasi;
        // $pendaftaran->keterangan = $request->keterangan;
        $pendaftaran->file = $file;
        // $event->tempat = $request->tempat;
        // $event->tanggal_mulai = $request->tanggal_mulai;
        // $event->tanggal_selesai = $request->tanggal_selesai;
        // $event->alokasi_dana = $request->alokasi_dana;
        // $pendaftaran->perbaikan = $request->perbaikan;
        $pendaftaran->save();

        // dd($request->all());

        return redirect()->route('pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran');
    }
}
