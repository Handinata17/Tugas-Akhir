<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Revisi;
use App\Event;
use App\EventLainnya;
use App\Pengguna;
use Auth;

class RevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revisis = Revisi::orderBy('id','DESC')->get();
        return view('pages.pengguna.revisi.index', compact('revisis'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proker = new Revisi();
        $proker->id_event = Auth::user()->id;
        $proker->id_eventlainnya = Auth::user()->id;
        $proker->id_pengguna = Auth::user()->id;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->revisi = $request->revisi;
        $proker->tanggal_revisi = $request->tanggal_revisi;
        $proker->ke = $request->ke;
        $proker->save();

        // dd($request->all());

        return redirect()->route('revisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revisi = Revisi::findOrFail($id);
        return $revisi;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revvisi = Revisi::find($id);
        return view('pages.pengguna.revisi.edit', compact('revisi'));
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
        $proker = new Revisi();
        $proker->id_event = Auth::user()->id;
        $proker->id_eventlainnya = Auth::user()->id;
        $proker->id_pengguna = Auth::user()->id;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->revisi = $request->revisi;
        $proker->tanggal_revisi = $request->tanggal_revisi;
        $proker->ke = $request->ke;
        $proker->save();
        return redirect()->route('revisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revisi = Revisi::find($id);
        $revisi->delete();
        return redirect()->route('revisi');
    }
}
