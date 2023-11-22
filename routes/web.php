<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', 'App\Http\Controllers\BarangController@index');
Route::post('/barang/proses', 'App\Http\Controllers\BarangController@proses');
Route::get('/utama', 'App\Http\Controllers\BarangController@coba');
Route::get('/konten', 'App\Http\Controllers\BarangController@form');
// Route::get('/utama',[BarangController::class,'coba']); 
Route::post('/konten/proses', 'App\Http\Controllers\BarangController@prosesdua');

