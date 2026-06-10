<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DVDController extends Controller
{
    public function index()
    {
    	// mengambil data dari table dvd
    	//$dvd = DB::table('dvd')->get();
        $dvd = DB::table('dvd')->paginate(10);
    	// mengirim data dvd ke view index
    	return view('index1',['dvd' => $dvd]);

    }
    	public function tambah()
	{

		// memanggil view tambah
		return view('tambah1');

	}

	// method untuk insert data ke table dvd
	public function store(Request $request)
	{
		$request->validate([
			'merk' => 'required|string|max:30',
			'stock' => 'required|integer|min:0',
		]);

		DB::table('dvd')->insert([
			'merkdvd' => $request->merk,
			'stockdvd' => $request->stock,
			'tersedia' => $request->has('tersedia') ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}

	// method untuk edit data dvd
	public function edit($id)
	{
		// mengambil data dvd berdasarkan id yang dipilih
		$dvd = DB::table('dvd')->where('kodedvd',$id)->get();
		// passing data dvd yang didapat ke view edit.blade.php
		return view('edit1',['dvd' => $dvd]);

	}

	// update data dvd
	public function update(Request $request)
	{
		$request->validate([
			'id' => 'required|integer',
			'merk' => 'required|string|max:30',
			'stock' => 'required|integer|min:0',
		]);

		DB::table('dvd')->where('kodedvd',$request->id)->update([
			'merkdvd' => $request->merk,
			'stockdvd' => $request->stock,
			'tersedia' => $request->has('tersedia') ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}

	// method untuk hapus data dvd
	public function hapus($id)
	{
		// menghapus data dvd berdasarkan id yang dipilih
		DB::table('dvd')->where('kodedvd',$id)->delete();

		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table dvd sesuai pencarian data
		$dvd = DB::table('dvd')
		->where('merkdvd','like',"%".$cari."%")
		->paginate();

    		// mengirim data dvd ke view index
		return view('index1',['dvd' => $dvd]);

	}
}
