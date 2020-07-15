<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventLainnya;
use App\Pengguna;
use App\Proker;
use Auth;

class EventLainnyaController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }
    public function index()
    {
        $event_lainnyas = EventLainnya::orderBy('id','DESC')->get();
        //   $event_lainnyas = Pengguna::where('organisasi', Auth::user()->organisasi)
        //   ->with('event_lainnyas')->get();

        //$events = EventLainnya::where('id_pengguna', Auth::user()->id)->get();
        return view('pages.pengguna.eventlainnya.index', compact('event_lainnyas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = Auth::user();
        $prokers = Proker::where('organisasi',$pengguna->organisasi)->where('keterangan',$pengguna->keterangan)
        ->where('status', false)->get();

        return view('pages.pengguna.eventlainnya.create', compact('prokers'));
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
         $proposal = $request->file('proposal')->store('proposal');
         $eventlainnya = new EventLainnya();
         $eventlainnya->id_pengguna = Auth::user()->id;
         $eventlainnya->id_proker = $request->id_proker;
         // $eventlainnya->nama_event = $request->nama_event;
         $eventlainnya->tipe = $request->tipe;
         $eventlainnya->proposal = $proposal;
         // $eventlainnya->tempat = $request->tempat;
         // $eventlainnya->tanggal_mulai = $request->tanggal_mulai;
         // $eventlainnya->tanggal_selesai = $request->tanggal_selesai;
         // $eventlainnya->alokasi_dana = $request->alokasi_dana;
         $eventlainnya->perbaikan = $request->perbaikan;
         $eventlainnya->save();

         // dd($request->all());

         return redirect()->route('eventlainnya');
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
        $eventlainnya = EventLainnya::find($id);
        return view('pages.pengguna.eventlainnya.edit', compact('eventlainnya'));
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
        $proposal = $request->file('proposal')->store('proposal');
        $eventlainnya = new EventLainnya();
        $eventlainnya->id_pengguna = Auth::user()->id;
        $eventlainnya->id_proker = $request->id_proker;
        // $eventlainnya->nama_event = $request->nama_event;
        $eventlainnya->tipe = $request->tipe;
        $eventlainnya->proposal = $proposal;
        // $eventlainnya->tempat = $request->tempat;
        // $eventlainnya->tanggal_mulai = $request->tanggal_mulai;
        // $eventlainnya->tanggal_selesai = $request->tanggal_selesai;
        // $eventlainnya->alokasi_dana = $request->alokasi_dana;
        $eventlainnya->perbaikan = $request->perbaikan;
        $eventlainnya->save();

        // dd($request->all());

        return redirect()->route('eventlainnya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventlainnya = EventLainnya::find($id);
        $eventlainnya->delete();
        return redirect()->route('eventlainnya');
    }

    public function revisi(Request $request)
    {
        dd($request->all());
        $proposal = $request->file('proposal')->store('proposal');
        $eventlainnya = new EventLainnya();
        $eventlainnya->id_pengguna = Auth::user()->id;
        $eventlainnya->id_proker = $request->id_proker;
        // $event->nama_event = $request->nama_event;
        $eventlainnya->revisi = $request->revisi;
        $eventlainnya->proposal = $proposal;
        // $event->perbaikan = $request->perbaikan;
        $eventlainnya->save();

        // dd($request->all());

        return redirect()->route('eventlainnya');
    }

    public function acc_bpm($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_bpm = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_bem($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_bem = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d4_teknik_informatika($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d4_teknik_informatika = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d4_akuntansi_sektor_publik($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d4_akuntansi_sektor_publik = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_perhotelan($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_perhotelan = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_dkv($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_dkv = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_teknik_elektro($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_teknik_elektro = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_teknik_mesin($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_teknik_mesin = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_teknik_komputer($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_teknik_komputer = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_akuntansi($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_akuntansi = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_kebidanan($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_kebidanan = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_kaprodi_d3_farmasi($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_kaprodi_d3_farmasi = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }

    public function acc_wadir_3($id)
    {
        $data = EventLainnya::findOrFail($id);
        $data->acc_wadir_3 = "2";
        $data->update();

        return redirect()->route('eventlainnya');
    }
}
