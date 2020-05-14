<?php

namespace App\Http\Controllers\AdminBem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventBem;

class EventBemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:pengguna');
    }

    public function index()
    {
        $eventbem = EventBem::all();
        return view('pages.adminbem.eventbem.index', compact('eventbem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminbem.eventbem.create');
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
        $eventbem = new EventBem();
        $eventbem->nama_event = $request->nama_event;
        $eventbem->deskripsi = $request->deskripsi;
        $eventbem->proposal = $proposal;
        $eventbem->tempat = $request->tempat;
        $eventbem->tanggal_mulai = $request->tanggal_mulai;
        $eventbem->tanggal_selesai = $request->tanggal_selesai;
        $eventbem->perbaikan = $request->perbaikan;
        $eventbem->save();

        // dd($request->all());

        return redirect()->route('eventbem');
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
        $eventbem = EventBem::find($id);
        return view('pages.adminbem.eventbem.edit', compact('eventbem'));
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
        // $proposal = $request->file('proposal')->store('proposal');
        $eventbem = EventBem::find($id);
        $eventbem->nama_event = $request->nama_event;
        $eventbem->deskripsi = $request->deskripsi;
        $eventbem->proposal = $request->proposal;
        $eventbem->tempat = $request->tempat;
        $eventbem->tanggal_mulai = $request->tanggal_mulai;
        $eventbem->tanggal_selesai = $request->tanggal_selesai;
        $eventbem->perbaikan = $request->perbaikan;
        $eventbem->update();

        // dd($request->all());

        return redirect()->route('eventbem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventbem = EventBem::find($id);
        $eventbem->delete();
        return redirect()->route('eventbem');
    }
}
