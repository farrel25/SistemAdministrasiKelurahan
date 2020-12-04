<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // pelayanan
    Route::get('/pelayanan/pengajuan-surat', 'PengajuanSuratController@index')->name('visitors.pelayanan.pengajuan-surat');
    // Route::get('/pelayanan/pengajuan-surat', 'PengajuanSuratController@index')->name('visitors.pelayanan.pengajuan-surat')->withoutMiddleware('auth');
});

// Beranda
Route::get('/', 'HomeController@beranda')->name('visitors.beranda.index');

// Profil
// Route::get('profil-desa', 'ProfilDesaController@index');
// Route::get('profil-desa/administratif', 'ProfilDesaController@administratif');
// Route::get('profil-desa/sejarah-visi-misi', 'ProfilDesaController@sejarah_visi_misi');
// Route::get('profil-desa/struktur-pemerintahan', 'ProfilDesaController@struktur_pemerintahan');
Route::get('/profil-desa/administratif', function () {
    return view('visitors.profil_desa.administratif.index');
})->name('visitors.profil_desa.administratif.index');

// Artikel
Route::view('/artikel', 'visitors.artikel.index')->name('visitors.artikel.index');
