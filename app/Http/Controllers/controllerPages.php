<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPages extends Controller
{
    public function toDaftar()
    {
        return view('pages.daftar');
    }

    public function toTambahBarang()
    {
        return view('pages.tambahBarang');
    }

    public function toLiatBarang()
    {
        return view('pages.liatBarang');
    }

    public function toDataPembelian()
    {
        return view('pages.dataPembelian');
    }

    public function toLiatPegawai()
    {
        return view('pages.liatPegawai');
    }

    public function toPesanBarang()
    {
        return view('pages.pesanBarang');
    }
}