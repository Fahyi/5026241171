<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index($nama){

    	return e($nama);

    }

     public function formulir(){

    	return view('formulir');

}

public function proses(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'umur' => 'required|integer|min:1|max:200',
        ]);

        $nama = e($request->input('nama'));
        $alamat = e($request->input('alamat'));
        $umur = (int) $request->input('umur');
        return "Nama : " . $nama . ",<br>Umur : " . $umur .
        ", <br>Alamat : " . $alamat  ;
}
}
