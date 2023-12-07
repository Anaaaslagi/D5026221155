<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DvdController extends Controller
{
	public function index()
	{
        $dvd = DB::table('dvd')->paginate(10);

    	// mengirim data dvd ke view index
		return view('indexdvd',['dvd' => $dvd]);

	}

	// method untuk menampilkan view form tambah dvd
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahdvd');

	}

	// method untuk insert data ke table dvd
	public function store(Request $request)
	{
		// insert data ke table dvd
		DB::table('dvd')->insert([
			'kodedvd' => $request->kode,
			'merkdvd' => $request->merk,
			'stokdvd' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/dvd');

	}

	// method untuk edit data dvd
	public function edit($kode)
	{
		// mengambil data dvd berdasarkan kode yang dipilih
		$dvd = DB::table('dvd')->where('kdoedvd',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['dvd' => $dvd]);

	}

	// update data dvd
	public function update(Request $request)
	{
		// update data dvd
		DB::table('dvd')->where('kodedvd',$request->kode)->update([
			'kodedvd' => $request->kode,
			'merkdvd' => $request->merk,
			'stokdvd' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/dvd');
	}

	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('dvd')->where('kodedvd',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/dvd');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$dvd = DB::table('dvd')
		->where('merkdvd','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexdvd',['dvd' => $dvd]);

	}
    public function view($kode){
        // mengambil data dari table pegawai sesuai id
        $dvd = DB::table('dvd')
        ->where('kodedvd', $kode)
        ->get();

        return view('viewdvd', ['dvd' => $dvd]);
    }

}
