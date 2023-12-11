<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class topiController extends Controller
{
	public function index()
	{
        $topi = DB::table('topi')->paginate(10);

    	// mengirim data dvd ke view index
		return view('indextopi',['topi' => $topi]);

	}

	// method untuk menampilkan view form tambah dvd
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahtopi');

	}

	// method untuk insert data ke table dvd
	public function store(Request $request)
	{
		// insert data ke table dvd
		DB::table('topi')->insert([
			'kodetopi' => $request->kode,
			'merktopi' => $request->merk,
			'stocktopi' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');

	}

	// method untuk edit data dvd
	public function edit($kode)
	{
		// mengambil data dvd berdasarkan kode yang dipilih
		$topi = DB::table('topi')->where('kdoetopi',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['topi' => $topi]);

	}

	// update data dvd
	public function update(Request $request)
	{
		// update data dvd
		DB::table('topi')->where('kodetopi',$request->kode)->update([
			'kodetopi' => $request->kode,
			'merktopi' => $request->merk,
			'stoktopi' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}

	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('topi')->where('kodetopi',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$topi = DB::table('topi')
		->where('merktopi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indextopi',['topi' => $topi]);

	}
    public function view($kode){
        // mengambil data dari table pegawai sesuai id
        $topi = DB::table('topi')
        ->where('kodetopi', $kode)
        ->get();

        return view('viewtopi', ['topi' => $topi]);
    }

}
