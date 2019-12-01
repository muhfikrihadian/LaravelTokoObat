<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function tambahObat()
    {
        return view('tambahobat');
    }

    public function addObat(Request $r)
    {
        $obat = new Obat;
        $obat->namaobat = $r->nama;
        $obat->jumlah = $r->jumlah;

        $obat->save();

        return view('home');
    }
}
