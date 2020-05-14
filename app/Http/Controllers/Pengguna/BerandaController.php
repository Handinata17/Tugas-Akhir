<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function __construct(){
        $this->middleware('auth:pengguna');
    }

    public function index(){
        return view('pages.beranda');
    }
}
