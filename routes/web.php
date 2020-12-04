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

// Profil
// Route::get('profil_desa', 'ProfilDesaController@index');
// Route::get('profil_desa/administratif', 'ProfilDesaController@administratif');
// Route::get('profil_desa/sejarah_visi_misi', 'ProfilDesaController@sejarah_visi_misi');
// Route::get('profil_desa/struktur_pemerintahan', 'ProfilDesaController@struktur_pemerintahan');

Route::get('/profil_desa/administratif', function () {
    return view('visitors.profil_desa.administratif.index');
});

// Artikel
Route::view('/artikel', 'visitors.artikel.index');

// pelayanan
Route::get('/pelayanan/pengajuan-surat', 'PengajuanSuratController@index');
