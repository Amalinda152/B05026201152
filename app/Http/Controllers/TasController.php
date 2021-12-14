<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tas
        //$tas = DB::table('tas')->get();
        $tas = DB::table('tas')->paginate(5);

        // mengirim data tas ke view index
        return view('tas.index', ['tas' => $tas]);
    }

    // method untuk menampilkan view form tambah tas
    public function tambah()
    {

        // memanggil view tambah
        return view('tas.tambah');
    }

    // method untuk insert data ke table tas
    public function store(Request $request)
    {
        // insert data ke table tas
        DB::table('tas')->insert([
            'merktas' => $request->merktas,
            'stocktas' => $request->stocktas,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    // method untuk edit data tas
    public function edit($kodetas)
    {
        // mengambil data tas berdasarkan kodetas yang dipilih
        $tas = DB::table('tas')->where('kodetas', $kodetas)->get();
        // passing data tas yang didapat ke view edit.blade.php
        return view('tas.edit', ['tas' => $tas]);
    }

    public function view($kodetas)
    {
        // mengambil data tas berdasarkan kodetas yang dipilih
        $tas = DB::table('tas')->where('kodetas',$kodetas)->get();
        // passing data tas yang didapat ke view edit.blade.php
        return view('tas.detail',['tas' => $tas]);

    }

    // update data tas
    public function update(Request $request)
    {
        // update data tas
        DB::table('tas')->where('kodetas', $request->kodetas)->update([
            'merktas' => $request->merktas,
            'stocktas' => $request->stocktas,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    // method untuk hapus data tas
    public function hapus($kodetas)
    {
        // menghapus data tas berdasarkan kodetas yang dipilih
        DB::table('tas')->where('kodetas', $kodetas)->delete();

        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tas sesuai pencarian data
		$tas = DB::table('tas')
		->where('merktas','like',"%".$cari."%")
        ->orWhere('stocktas','like',"%".$cari."%")
		->paginate();

    		// mengirim data tas ke view index
		return view('tas.index',['tas' => $tas]);

	}
}
