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
    // $menu = 'index';
    // $home = 'home';
    // Route::get('/' . $home, 'HomeController@' . $menu)->name('home');

    // dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // peengajuan surat
    Route::get('/pelayanan/pengajuan-surat', 'LetterSubmissionController@create')->name('pengajuan-surat.create');
    Route::post('/pelayanan/pengajuan-surat', 'LetterSubmissionController@store')->name('pengajuan-surat.store');
});


Route::middleware('role:Administrator|Redaktur')->group(function () {

    //Kependudukan
    Route::prefix('dashboard/kependudukan')->group(function () {
        Route::get('/penduduk', 'VillagerController@index')->name('penduduk');
        // Route::get('/penduduk-aktif', 'DashboardController@pendudukaktif')->name('penduduk-aktif');
        Route::get('/penduduk/detail/{villager:nik}', 'VillagerController@show')->name('penduduk-detail');
        // store penduduk
        Route::get('/penduduk/tambah', 'VillagerController@create')->name('penduduk-tambah');
        Route::post('/penduduk/tambah', 'VillagerController@store')->name('penduduk-store');
        // update penduduk
        Route::get('/penduduk/{villager:nik}/edit', 'VillagerController@edit')->name('penduduk-edit');
        Route::patch('/penduduk/{villager:nik}/edit', 'VillagerController@update')->name('penduduk-update');
        // delete penduduk
        Route::delete('/penduduk/{villager:nik}/delete', 'VillagerController@destroy')->name('penduduk-delete');
        // export excel penduduk
        Route::get('/penduduk/export', 'VillagerController@export')->name('penduduk-export-excel');
        // import excel penduduk
        Route::post('/penduduk/import', 'VillagerController@import')->name('penduduk-import-excel');
    });

    //ManajemenSurat
    Route::prefix('dashboard/manajemen-surat')->group(function () {
        //cetak
        Route::get('/cetak-surat', 'DashboardController@cetaksurat')->name('manajemen-surat.cetak-surat');
        Route::get('/tambah-cetak-surat', 'DashboardController@tambahcetaksurat')->name('manajemen-surat.tambah-cetak-surat');
        Route::get('/buat-cetak-surat', 'DashboardController@buatcetaksurat')->name('manajemen-surat.buat-cetak-surat');

        // dokumen persyaratan
        Route::prefix('/dokumen-persyaratan')->group(function () {
            Route::get('', 'LetterDocumentController@index')->name('manajemen-surat.dokumen-persyaratan');
            // store document
            Route::get('/tambah', 'LetterDocumentController@create')->name('dokumen-persyaratan-create');
            Route::post('/tambah', 'LetterDocumentController@store')->name('dokumen-persyaratan-store');
            // update document
            Route::get('/{letter_document}/edit', 'LetterDocumentController@edit')->name('dokumen-persyaratan-edit');
            Route::patch('/{letter_document}/edit', 'LetterDocumentController@update')->name('dokumen-persyaratan-update');
            // delete document
            Route::delete('/{letter_document}/delete', 'LetterDocumentController@destroy')->name('dokumen-persyaratan-delete');
            // delete selected document
            Route::delete('/delete-selected', 'LetterDocumentController@destroySelected')->name('dokumen-persyaratan-delete-selected');
            // export excel dokumen persyaratan
            Route::get('/export', 'LetterDocumentController@export')->name('dokumen-persyaratan-export-excel');
            // import excel dokumen persyaratan
            Route::post('/import', 'LetterDocumentController@import')->name('dokumen-persyaratan-import-excel');
        });

        //jenis surat
        Route::prefix('/jenis-surat')->group(function () {
            Route::get('', 'LetterTypeController@index')->name('manajemen-surat.jenis-surat');
            // store jenis
            Route::get('/tambah', 'LetterTypeController@create')->name('manajemen-surat.jenis-surat.create');
            Route::post('/tambah', 'LetterTypeController@store')->name('manajemen-surat.jenis-surat.store');
            // update jenis
            Route::get('/{letter_type:letter_code}/edit', 'LetterTypeController@edit')->name('manajemen-surat.jenis-surat.edit');
            Route::patch('/{letter_type:letter_code}/edit', 'LetterTypeController@update')->name('manajemen-surat.jenis-surat.update');
            // delete jenis
            Route::delete('/{letter_type:letter_code}/delete', 'LetterTypeController@destroy')->name('manajemen-surat.jenis-surat.delete');
        });

        //panduan
        Route::get('/panduan', 'dashboardController@panduan')->name('manajemen-surat.panduan');

        //permohonan surat
        Route::get('/permohonan-surat', 'dashboardController@permohonansurat')->name('manajemen-surat.permohonan-surat');
        Route::get('/edit-permohonan-surat', 'dashboardController@editpermohonansurat')->name('manajemen-surat.edit-permohonan-surat');

        //surat keluar
        Route::get('/surat-keluar', 'dashboardController@suratkeluar')->name('manajemen-surat.surat-keluar');
        Route::get('/tambah-surat-keluar', 'dashboardController@tambahsuratkeluar')->name('manajemen-surat.tambah-surat-keluar');
        Route::get('/edit-surat-keluar', 'dashboardController@editsuratkeluar')->name('manajemen-surat.edit-surat-keluar');

        //surat masuk
        Route::get('/surat-masuk', 'dashboardController@suratmasuk')->name('manajemen-surat.surat-masuk');
        Route::get('/tambah-surat-masuk', 'dashboardController@tambahsuratmasuk')->name('manajemen-surat.tambah-surat-masuk');
        Route::get('/edit-surat-masuk', 'dashboardController@editsuratmasuk')->name('manajemen-surat.editsurat-masuk');
    });
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
