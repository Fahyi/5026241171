<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('bio', [DosenController::class, 'biodata']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

Route::get('/   ', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('index', function () {
	return view('index');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('day1', function () {
	return view('day1_intro');
});

Route::get('day2', function () {
	return view('day2_news');
});

Route::get('day3', function () {
	return view('day3_responsive');
});

Route::get('day3_icons', function () {
	return view('day3_icons');
});

Route::get('day4', function () {
	return view('day4_layouting');
});

Route::get('itunewslagi', function () {
	return view('newsLagi');
});

Route::get('itutemplate', function () {
	return view('template');
});

Route::get('day5', function () {
    return view('day5_dell');
});

Route::get('day5_linktree', function () {
    return view('day5_linktree');
});

Route::get('menu', function () {
	return view('menu');
});

use App\Http\Controllers\DVDController;

Route::get('/dvd', [DVDController::class, 'index']);
Route::get('/dvd/tambah', [DVDController::class, 'tambah']);
Route::post('/dvd/store', [DVDController::class, 'store']);
Route::get('/dvd/edit/{id}', [DVDController::class, 'edit']);
Route::post('/dvd/update', [DVDController::class, 'update']);
Route::get('/dvd/hapus/{id}', [DVDController::class, 'hapus']);
Route::get('/dvd/cari', [DVDController::class, 'cari']);

Route::get('/menu', function () {
    return view('menu');
});

use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa/cari', [SiswaController::class, 'cari'])->name('siswa.cari');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

route::get('/nilai', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
route::get('/nilai/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
route::post('/nilai/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');


Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/', function () {
    return view('template');
});
