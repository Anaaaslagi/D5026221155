<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 20;
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
}
