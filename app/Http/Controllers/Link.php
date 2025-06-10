<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blogpertama');
    }
    public function index(){
        $nama = "Alfan Ghofari Prasanna F";
        $umur = 19;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma Struktur Data", "Pemrograman Web", "Kalkulus"];
    	return view('biodata', ['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
