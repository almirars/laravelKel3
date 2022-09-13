<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Selamat Datang';
        return view('pengguna.home.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pengguna.informasi.index');
    }

    public function detail_informasi()
    {
        return view('pengguna.informasi.detail_informasi');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pengguna.pengaduan.index');
    }

    public function booking()
    {
        return view('pengguna.pemesanan.index');
    }

    
}
