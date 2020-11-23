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

// Route::get('/', function () {
//     return view('welcome');
// });

// Beranda
Route::get('/', 'HomeController@index');

// Artikel
Route::view('/artikel', 'visitors.artikel.index');

// pelayanan
Route::get('/pelayanan/pengajuansurat', 'PengajuanSuratController@index');
