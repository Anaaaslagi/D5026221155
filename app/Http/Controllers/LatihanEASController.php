<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LatihanEASController extends Controller
{
    public function index()
    {
    	$nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('latihanEAS',['nilaikuliah' => $nilaikuliah]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('tambahLatihanEAS');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilaikuliah');
        // kenapa kok tidak return view index
        // redirect melempar ke suatu url route pegawai, maka query akan query all record

    }

}
