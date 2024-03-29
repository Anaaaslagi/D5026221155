<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 70;
        $b= 10;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog(){
        $nama = "Benni";
        $alamat = "Jakarta";
        $umur = 49;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur ]) ;
    }

    public function shownama($nama){ //$nama itu sama dengan {nama} di web.php
        return "Anda telah mengisikan: ". $nama;
    }

    public function formulir(){
        //Cek soal hak akses
        return view ('formulir');
    }

    public function proses(Request $request){
        $nama= $request -> input('nama');
        $alamat = $request ->input('alamat');
        return "Nama: ". $nama .", Alamat: ". $alamat;
    }
}
