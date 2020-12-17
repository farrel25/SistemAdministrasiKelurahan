<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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
    $menu = 'index';
    $home = 'home';
    Route::get('/' . $home, 'HomeController@' . $menu)->name('home');

    // dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //Penduduk
    Route::get('/dashboard/kependudukan', 'VillagerController@index')->name('penduduk');
    Route::get('/dashboard/kependudukan/penduduk-aktif', 'DashboardController@pendudukaktif')->name('penduduk-aktif');
    Route::get('/dashboard/kependudukan/tambah', 'DashboardController@penduduktambah')->name('penduduk-tambah');
    Route::get('/dashboard/kependudukan/edit', 'DashboardController@pendudukedit')->name('penduduk-edit');


    // pelayanan
    // Route::get('/pelayanan/pengajuan-surat', 'LetterSubmissionController@create')->name('visitors.pelayanan.pengajuan-surat')->withoutMiddleware('auth');
    Route::get('/pelayanan/pengajuan-surat', 'LetterSubmissionController@create')->name('pengajuan-surat.create');
    Route::post('/pelayanan/pengajuan-surat', 'LetterSubmissionController@store')->name('pengajuan-surat.store');
});


// Beranda
Route::get('/', 'HomeController@beranda')->name('visitors.beranda.index');


// Profil_desa
Route::prefix('profil-desa/administratif')->group(function () {
    Route::get('/jenis-kelamin', 'AdministratifController@index')->name('profil-desa.administratif.jenis-kelamin');
    Route::get('/pendidikan', 'AdministratifController@pendidikan')->name('profil-desa.administratif.pendidikan');
    Route::get('/pekerjaan', 'AdministratifController@pekerjaan')->name('profil-desa.administratif.pekerjaan');
    Route::get('/agama', 'AdministratifController@agama')->name('profil-desa.administratif.agama');
    Route::get('/wilayah', 'AdministratifController@wilayah')->name('profil-desa.administratif.wilayah');
    Route::get('/warga-negara', 'AdministratifController@warganegara')->name('profil-desa.administratif.warga-negara');
});


// kegiatan masyarakat
Route::get('/kegiatan-masyarakat/umkm', function () {
    return view('visitors.kegiatan_masyarakat.umkm.index');
})->name('visitors.kegiatan_masyarakat.umkm.index');
Route::get('/kegiatan-masyarakat/umkm/view-product', function () {
    return view('visitors.kegiatan_masyarakat.umkm.view-product');
})->name('visitors.kegiatan_masyarakat.umkm.view-product');


// Artikel
// Route::view('/artikel', 'visitors.artikel.index')->name('visitors.artikel.index');
Route::get('/artikel', 'ArticleController@index')->name('visitors.artikel.index');//kolom slug g dibuat brarti id
