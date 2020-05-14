<?php

namespace App\Http\Controllers\AdminBpm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventBpm;

class EventBpmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = EventBpm::all();
        return view('pages.adminbpm.eventbpm.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminbpm.eventbpm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $proposal = $request->file('proposal')->store('proposal');
        $data = new EventBpm();
        $data->nama_event = $request->nama_event;
        $data->deskripsi = $request->deskripsi;
        $data->proposal = $proposal;
        $eventbem->tempat = $request->tempat;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->perbaikan = $request->perbaikan;
        $data->save();

        // dd($request->all());

        return redirect()->route('eventbpm');
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
        $datas = EventBpm::find($id);
        return view('pages.adminbpm.eventbpm.edit', compact('datas'));
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
        $data = EventBpm::find($id);
        $data->nama_event = $request->nama_event;
        $data->deskripsi = $request->deskripsi;
        $data->proposal = $request->proposal;
        $data->tempat = $request->tempat;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->perbaikan = $request->perbaikan;
        $data->update();

        // dd($request->all());

        return redirect()->route('eventbpm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = EventBpm::find($id);
        $data->delete();
        return redirect()->route('eventbpm');
    }
}
