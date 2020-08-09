<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proker;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProkerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pengguna');
    }
    public function index()
    {
        $prokers = Proker::orderBy('id', 'DESC')->get();
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
            'nama_event' => 'required|regex:/^[\pL\s\-]+$/u|min: 5',
            'alokasi_dana' => 'required|numeric|min:0|not_in:0',
        ];
        $message = [
            'required' => 'tidak boleh kosong.',
            'nama_event.regex' => 'Masukan nama event dengan benar',
            'nama_event.min' => 'Nama Event minimal 5 karakter',
            'alokasi_dana.numeric' => 'Masukan alokasi dana dengan benar',
            'alokasi_dana.min' => 'Masukan alokasi dana dengan benar',
        ];

        $this->validate($request, $rule, $message);

        $tanggal_mulai = substr($request->tanggal, 0, 10);
        $tanggal_selesai = substr($request->tanggal, 13);

        $proker = new Proker();
        $proker->id_pengguna = Auth::user()->id;
        $proker->nama_event = $request->nama_event;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->tanggal_mulai = Carbon::parse($tanggal_mulai)->format('Y-m-d');
        $proker->tanggal_selesai = Carbon::parse($tanggal_selesai)->format('Y-m-d');
        $proker->tempat = $request->tempat;
        $proker->alokasi_dana = $request->alokasi_dana;
        $proker->save();

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
        $tanggal = $this->formatToDateRange($proker->tanggal_mulai).' - '
        .$this->formatToDateRange($proker->tanggal_selesai);
        return view('pages.pengguna.proker.edit', compact(['proker', 'tanggal']));
    }

    private function formatToDateRange($tanggal)
    {
        return Carbon::parse($tanggal)->format('m/d/Y');
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
        // dd($request->tempat);
        $rule = [
            'nama_event' => 'required|regex:/^[\pL\s\-]+$/u|min:5',
            'alokasi_dana' => 'required|numeric|min:0|not_in:0',
        ];
        $message = [
            'required' => 'tidak boleh kosong.',
            'nama_event.regex' => 'Masukan nama event dengan benar',
            'nama_event.min' => 'Nama Event minimal 5 karakter',
            'alokasi_dana.numeric' => 'Masukan alokasi dana dengan benar',
            'alokasi_dana.min' => 'Masukan alokasi dana dengan benar',
        ];

        $this->validate($request, $rule, $message);


        $tanggal_mulai = substr($request->tanggal, 0, 10);
        $tanggal_selesai = substr($request->tanggal, 13);

        $proker = Proker::find($id);
        $proker->id_pengguna = Auth::user()->id;
        $proker->nama_event = $request->nama_event;
        $proker->organisasi = $request->organisasi;
        $proker->keterangan = $request->keterangan;
        $proker->tanggal_mulai = Carbon::parse($tanggal_mulai)->format('Y-m-d');
        $proker->tanggal_selesai = Carbon::parse($tanggal_selesai)->format('Y-m-d');
        $proker->tempat = $request->tempat;
        $proker->alokasi_dana = $request->alokasi_dana;
        $proker->update();

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
