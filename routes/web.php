<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;

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

//CRUD Pegawai
Route::get('/pegawai',[PegawaiDBController::class, 'index']);
