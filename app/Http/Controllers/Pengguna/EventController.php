<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Pengguna;
use Auth;

class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }

    public function index(){
        $events = Event::orderBy('id','DESC')->get();
        //   $events = Pengguna::where('organisasi', Auth::user()->organisasi)
        //   ->with('events')->get();
    
        //$events = Event::where('id_pengguna', Auth::user()->id)->get();
        return view('pages.pengguna.event.index', compact('events'));
    }

    public function create(){
        return view('pages.pengguna.event.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $proposal = $request->file('proposal')->store('proposal');
        $event = new Event();
        $event->id_pengguna = Auth::user()->id;
        $event->nama_event = $request->nama_event;
        $event->deskripsi = $request->deskripsi;
        $event->proposal = $proposal;
        $event->tempat = $request->tempat;
        $event->tanggal_mulai = $request->tanggal_mulai;
        $event->tanggal_selesai = $request->tanggal_selesai;
        $event->perbaikan = $request->perbaikan;
        $event->save();

        // dd($request->all());

        return redirect()->route('event');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('pages.pengguna.event.edit', compact('event'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $proposal = $request->file('proposal')->store('proposal');
        $event = new Event();
        $event->id_pengguna = Auth::user()->id;
        $event->nama_event = $request->nama_event;
        $event->deskripsi = $request->deskripsi;
        $event->proposal = $proposal;
        $event->tempat = $request->tempat;
        $event->tanggal_mulai = $request->tanggal_mulai;
        $event->tanggal_selesai = $request->tanggal_selesai;
        $event->perbaikan = $request->perbaikan;
        $event->save();

        // dd($request->all());

        return redirect()->route('event');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event');
    }
}
