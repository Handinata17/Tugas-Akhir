<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proker;
use Auth;

class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prokers = Proker::orderBy('id','DESC')->get();
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
        $event = Event::find($id);
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
