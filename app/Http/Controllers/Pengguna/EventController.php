<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Pengguna;
use App\Proker;
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
        $pengguna = Auth::user();
        $prokers = Proker::where('organisasi',$pengguna->organisasi)->where('keterangan',$pengguna->keterangan)
        ->where('status', false)->get();

        return view('pages.pengguna.event.create', compact('prokers'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $proposal = $request->file('proposal')->store('proposal');
        $event = new Event();
        $event->id_pengguna = Auth::user()->id;
        $event->id_proker = $request->id_proker;
        // $event->nama_event = $request->nama_event;
        $event->tipe = $request->tipe;
        $event->proposal = $proposal;
        // $event->tempat = $request->tempat;
        // $event->tanggal_mulai = $request->tanggal_mulai;
        // $event->tanggal_selesai = $request->tanggal_selesai;
        // $event->alokasi_dana = $request->alokasi_dana;
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
        $event->id_proker = $request->id_proker;
        // $event->nama_event = $request->nama_event;
        $event->tipe = $request->tipe;
        $event->proposal = $proposal;
        // $event->tempat = $request->tempat;
        // $event->tanggal_mulai = $request->tanggal_mulai;
        // $event->tanggal_selesai = $request->tanggal_selesai;
        // $event->alokasi_dana = $request->alokasi_dana;
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

    public function revisi($id)
    {
        $event = Event::findOrFail($id);
        return view('pages.pengguna.event.revisi', compact('event'));
    }

    public function revisiSubmit(Request $request, $id)
    {
        $proposal = $request->file('proposal');
        $filename = $proposal->getClientOriginalName();
        $path = public_path('/uplouds/proposal');
        $proposal->move($path, $filename);

        $event = Event::findOrFail($id);
        $event->perbaikan = $filename;
        // $event->perbaikan = $request->perbaikan;
        $event->update();
        return redirect()->route('event');
    }

    public function acc($id)
    {
        $event = Event::find($id);
        $event->update(['acc' => '3']);
        return redirect()->route('event');
    }

    // public function acc_kaprodi($id)
    // {
    //     $data = Event::findOrFail($id);
    //     $data->acc_kaprodi = "2";
    //     $data->update();

    //     return redirect()->route('event');
    // }

    public function acc_wadir_3($id)
    {
        // dd($id);
        $event = Event::find($id);
        $event->update(['acc' => '3']);
        return redirect()->route('event');
    }
}
