<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proker;
use Auth;

class ProkerController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }
    public function index()
    {
        $prokers = Proker::orderBy('id','DESC')->get();
        // dd($prokers);
        //   $events = Pengguna::where('organisasi', Auth::user()->organisasi)
        //   ->with('events')->get();

        //$events = Event::where('id_pengguna', Auth::user()->id)->get();
        return view('pages.pengguna.proker.index', compact('prokers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengguna.proker.create');
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
            'nama_event' => 'required|regex:/^[\pL\s\-]+$/u',
            'alokasi_dana' => 'required|numeric|min:0|not_in:0',
          ];
          $message = [
            'required' => 'tidak boleh kosong.',
            'nama_event.regex' => 'Masukan nama event dengan benar',
            'alokasi_dana.numeric' => 'Masukan alokasi dana dengan benar',
            'alokasi_dana.min' => 'Masukan alokasi dana dengan benar',
          ];

          $this->validate($request, $rule, $message);

        $proker = new Proker();
        $proker->id_pengguna = Auth::user()->id;
        $proker->nama_event = $request->nama_event;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->tanggal_mulai = $request->tanggal_mulai;
        $proker->tanggal_selesai = $request->tanggal_selesai;
        $proker->tempat = $request->tempat;
        $proker->alokasi_dana = $request->alokasi_dana;
        $proker->save();

        // dd($request->all());

        return redirect()->route('proker');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proker = Proker::findOrFail($id);
        return $proker;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proker = Proker::find($id);
        return view('pages.pengguna.proker.edit', compact('proker'));
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
        $proker = new Proker();
        $proker->id_pengguna = Auth::user()->id;
        $proker->nama_event = $request->nama_event;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->tanggal_mulai = $request->tanggal_mulai;
        $proker->tanggal_selesai = $request->tanggal_selesai;
        $proker->tempat = $request->tempat;
        $proker->alokasi_dana = $request->alokasi_dana;
        $proker->save();

        // dd($request->all());

        return redirect()->route('proker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proker = Proker::find($id);
        $proker->delete();
        return redirect()->route('proker');
    }
}
