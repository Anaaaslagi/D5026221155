<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
	public function index()
	{
        $kategori = DB::table('kategori')->get();
		return view('indexKategori',['kategori' => $kategori]);

	}
    public function view(Request $request)
    {
        $selectedID = $request->input('kategori');
        $kategori = DB::table('kategori')->where('ID', $selectedID)->first();
        return view('kategori', ['kategori' => $kategori]);
    }

}
