<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// RESTful resource
Route::resource ('counter_transaksi', 'CounterTransaksiController');
Route::resource ('fasilitas', 'FasilitasController');
Route::resource ('kamar', 'KamarController');
Route::resource ('komplain', 'KomplainController');
Route::resource ('log_transaksi', 'LogTransaksiController');
Route::resource ('petugas', 'PetugasController');
Route::resource ('penginap', 'PenginapController');
Route::resource ('transaksi', 'TransaksiController');
Route::resource ('wisma', 'WismaController');
Route::resource ('kamar_dipesan', 'KamarDipesanController');
Route::resource ('fasilitas_kamar', 'FasilitasKamarController');
Route::resource ('tipe_kamar', 'TipeKamarController');