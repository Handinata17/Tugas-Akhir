<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;
use App\Proker;
use App\Pengguna;
use Auth;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recruitments = Recruitment::all();
    //   return view('pages.home.landing_page', compact('recruitments'));
    //   $prokers = Proker::all();
      return view('pages.home.landing_page', compact(['recruitments']));
    }

    public function prodi ($prodi)
    {
        $prodis = [
            'D3 Teknik Elektro',
            'D3 Teknik Mesin',
            'D3 Teknik Akuntansi',
            'D3 Teknik Komputer',
            'D3 Kebidanan',
            'D3 Farmasi',
            'D4 Teknik Informatika',
            'D3 Perhotelan',
            'D3 Akuntansi Sektor Publik',
            'D3 DKV'
        ];

        $result = [];
        for($i = 0; $i < count($prodis); $i++){
            if($prodi == '01'){
                $result = $prodis[0];
            }else if($prodi == '02'){
                $result = $prodis[1];
            }else if($prodi == '03'){
                $result = $prodis[2];
            }else if($prodi == '04'){
                $result = $prodis[3];
            }else if($prodi == '07'){
                $result = $prodis[4];
            }else if($prodi == '08'){
                $result = $prodis[5];
            }else if($prodi == '09'){
                $result = $prodis[6];
            }else if($prodi == '10'){
                $result = $prodis[7];
            }else if($prodi == '11'){
                $result = $prodis[8];
            }else{
                $result = $prodis;
            }
        }

        return $result;
    }

    function convertKodeToProdi($prodi){
        $result = [];
        if($prodi == '01'){
            $result = $prodis;
        }
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
