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
    public function __construct(){
        $this->middleware('auth:pengguna');
    }
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
    public function store(Request $request, $id)
    {
        $revisi = new Revisi();
        $revisi->id_event = $id;
        $revisi->id_pengguna = Auth::user()->id;
        $revisi->revisi = $request->revisi;
        $revisi->save();

        $event = Event::find($id);
        if(Auth::user()->keterangan == 'Direktur 3'){
          $event->update(['acc' => 2]);
        }else {
          $event->update(['acc' => 1]);
        }

        return redirect()->route('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // dd($id);

      $revisi = Revisi::where('id_event', $id)->get();
      $event = Event::find($id);
      // dd($revisi);
      return view('pages.pengguna.event.show-revisi', compact('revisi','event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $revisi = new Revisi();
        $revisi->id_event = Auth::user()->id;
        $revisi->id_eventlainnya = Auth::user()->id;
        $revisi->id_pengguna = Auth::user()->id;
        $revisi->organisasi = $request->organisasi;
        $revisi->keterangan = $request->keterangan;
        $revisi->revisi = $request->revisi;
        $revisi->tanggal_revisi = $request->tanggal_revisi;
        $revisi->ke = $request->ke;
        $revisi->save();
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
