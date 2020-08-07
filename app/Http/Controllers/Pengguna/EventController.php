<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Pengguna;
use App\Proker;
use App\Revisi;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }

    public function print(){

        $events = Event::all();
        if(request()->get('organisasi')){
            $organisasi = request()->get('organisasi');
            // dd($organisasi);
            $events = Event::whereHas('proker',function($query) use($organisasi){
                $query->where('organisasi', $organisasi);
            })->get();
        }
        // dd($events);
        //$events = Event::orderBy('id','DESC')->get();
       $pdf =PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('pages.pengguna.event.printevent', compact(['events']));
        return $pdf->stream();

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

        $validator = Validator::make($request->all(),[
            'proposal' => 'required|file|mimes:pdf|max:5048'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }


        // dd($request->all());
        $proposal = $request->file('proposal')->store('proposal');
        $event = new Event();
        $event->id_pengguna = Auth::user()->id;
        $event->id_proker = $request->id_proker;
        // $event->id_proker = $request->$tanggal_mulai;
        // $event->id_proker = $request->tempat;
        $event->tipe = $request->tipe;
        $event->proposal = $proposal;
        // $event->perbaikan = $request->perbaikan;
        $event->save();

        // dd($request->all());

        return redirect()->route('event');
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('pages.pengguna.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $proposal = $request->file('proposal')->store('proposal');

        $event = Event::find($id);
        $event->proposal = $proposal;
        $event->update();

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
        $event = Event::findOrFail($id);
        if(Auth::user()->keterangan == 'Direktur 3'){
            $event->update(['acc_wadir_3' => '2']);
        }else{
            $event->update(['acc' => '1']);
        }

        $revisi = new Revisi();
        $revisi->id_event = $id;
        $revisi->id_pengguna = Auth::user()->id;
        $revisi->revisi = $request->revisi;
        $revisi->save();
        return redirect()->route('event');
    }

    public function acc($id)
    {
        $event = Event::find($id);
        if(Auth::user()->keterangan == 'Direktur 3'){
          $event->update(['acc_wadir_3' => '3']);
        }else {
          $event->update(['acc' => '2']);
        }
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
