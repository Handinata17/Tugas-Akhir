<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;
use App\Pengguna;
use App\Landing;
use Auth;

class RecruitmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }
    public function index()
    {
        $recruitments = Recruitment::orderBy('id','DESC')->get();
        //   $events = Pengguna::where('organisasi', Auth::user()->organisasi)
        //   ->with('events')->get();

        //$events = Event::where('id_pengguna', Auth::user()->id)->get();
        return view('pages.pengguna.recruitment.index', compact('recruitments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengguna.recruitment.create');
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
        $recruitment = new Recruitment();
        $recruitment->id_pengguna = Auth::user()->id;
        $recruitment->nama_recruitment = $request->nama_recruitment;
        $recruitment->organisasi = $request->organisasi;
        $recruitment->keterangan = $request->keterangan;
        $recruitment->tanggal_mulai = $request->tanggal_mulai;
        $recruitment->tanggal_selesai = $request->tanggal_selesai;
        // $proker->tempat = $request->tempat;
        // $proker->alokasi_dana = $request->alokasi_dana;
        $recruitment->save();

        // dd($request->all());

        return redirect()->route('recruitment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return $recruitment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::find($id);
        return view('pages.pengguna.recruitment.edit', compact('recruitment'));
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
        $recruitment = Recruitment::find($id);
        $recruitment->id_pengguna = Auth::user()->id;
        $recruitment->nama_recruitment = $request->nama_recruitment;
        $recruitment->organisasi = $request->organisasi;
        $recruitment->keterangan = $request->keterangan;
        $recruitment->tanggal_mulai = $request->tanggal_mulai;
        $recruitment->tanggal_selesai = $request->tanggal_selesai;
        // $proker->tempat = $request->tempat;
        // $proker->alokasi_dana = $request->alokasi_dana;
        $recruitment->update();

        // dd($request->all());

        return redirect()->route('recruitment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recruitment = Recruitment::find($id);
        $recruitment->delete();
        return redirect()->route('recruitment');
    }
}
