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

    //InfoKelurahan
    Route::prefix('/dashboard/info-kelurahan')->group(function () {

        // Identitas
        Route::prefix('/identitas')->group(function () {
            Route::get('', 'InfoIdentityController@index')->name('info-kelurahan.identitas');
            // store Identitas
            // Route::get('/tambah', 'InfoIdentityController@create')->name('info-kelurahan.identitas-kelurahan.create');
            // Route::post('/tambah', 'InfoIdentityController@store')->name('info-kelurahan.identitas-kelurahan.store');
            // update artikel
            Route::get('/edit', 'InfoIdentityController@edit')->name('info-kelurahan.identitas-edit');
            Route::patch('/edit', 'InfoIdentityController@update')->name('info-kelurahan.identitas-update');
            // comment activation
            // Route::patch('/{article}/aktivasi-komentar', 'InfoIdentityController@commentActivation')->name('info-kelurahan.identitas-kelurahan.comment-activation');
            // show activation
            // Route::patch('/{article}/aktivasi', 'InfoIdentityController@showActivation')->name('info-kelurahan.identitas-kelurahan.activation');
            // delete article
            // Route::delete('/{article}/delete', 'InfoIdentityController@destroy')->name('info-kelurahan.identitas-kelurahan.destroy');
        });

        // WilayahKelurahan
        Route::prefix('/wilayah')->group(function () {
            Route::get('', 'InfoRegionController@index')->name('info-kelurahan.wilayah');
            // store Wilayah
            Route::get('/tambah', 'InfoRegionController@create')->name('info-kelurahan.wilayah-create');
            Route::post('/tambah', 'InfoRegionController@store')->name('info-kelurahan.wilayah-store');
            // update category
            Route::get('/edit', 'InfoRegionController@edit')->name('info-kelurahan.wilayah-edit');
            Route::patch('/edit', 'InfoRegionController@update')->name('info-kelurahan-wilayah.update');
            // delete category
            // Route::delete('/{article_category}/delete', 'ArticleCategoryController@destroy')->name('info-kelurahan.identitas-kelurahan.destroy');
            // category activation
            // Route::patch('/{article_category}/aktivasi', 'ArticleCategoryController@activation')->name('info-kelurahan.identitas-kelurahan.activation');
        });

        // Kepengurusan Kelurahan
        Route::prefix('/kepengurusan')->group(function () {
            Route::get('', 'StaffController@index')->name('info-kelurahan.kepengurusan');
            // store Kepengurusan
            Route::get('/tambah', 'InfoOrganizerController@create')->name('info-kelurahan.kepengurusan-create');
            Route::post('/tambah', 'InfoOrganizerController@store')->name('info-kelurahan.kepengurusan-store');
            // update comment
            Route::get('/edit', 'InfoOrganizerController@edit')->name('info-kelurahan.kepengurusan-edit');
            Route::patch('/edit', 'InfoOrganizerController@update')->name('info-kelurahan.kepengurusan-update');
            // delete comment
            // Route::delete('/delete', 'ArticleCommentController@destroy')->name('manajemen-artikel.komentar.destroy');
            // comment activation
            // Route::patch('/aktivasi', 'ArticleCommentController@activation')->name('manajemen-artikel.komentar.activation');
        });
    });
    //Kependudukan
    Route::prefix('/dashboard/kependudukan')->group(function () {
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
        Route::get('/cetak-surat', 'LetterPrintController@index')->name('manajemen-surat.cetak-surat');
        Route::get('/tambah-cetak-surat', 'DashboardController@tambahcetaksurat')->name('manajemen-surat.tambah-cetak-surat');
        Route::get('/buat-surat', 'DashboardController@buatcetaksurat')->name('manajemen-surat.buat-cetak-surat');

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
            // export excel jenis surat
            Route::get('/export', 'LetterTypeController@export')->name('manajemen-surat.jenis-surat.export-excel');
            // import excel jenis surat
            Route::post('/import', 'LetterTypeController@import')->name('manajemen-surat.jenis-surat.import-excel');
        });

        //panduan
        Route::get('/panduan', 'dashboardController@panduan')->name('manajemen-surat.panduan');

        //pengajuan surat
        Route::prefix('/pengajuan-surat')->group(function () {
            Route::get('', 'LetterSubmissionController@index')->name('manajemen-surat.pengajuan-surat');
            Route::patch('edit', 'LetterSubmissionController@update')->name('manajemen-surat.pengajuan-surat.update');
            Route::delete('{letter_submission}/delete', 'LetterSubmissionController@destroy')->name('manajemen-surat.pengajuan-surat.destroy');

            // Route::patch('/{letter_status}/edit', function () {
            //     return 'Berhasil';
            // })->name('manajemen-surat.pengajuan-surat.update');
            // Route::get('/edit', 'dashboardController@editpermohonansurat')->name('manajemen-surat.edit-permohonan-surat');
        });

        //surat keluar
        Route::get('/surat-keluar', 'dashboardController@suratkeluar')->name('manajemen-surat.surat-keluar');
        Route::get('/tambah-surat-keluar', 'dashboardController@tambahsuratkeluar')->name('manajemen-surat.tambah-surat-keluar');
        Route::get('/edit-surat-keluar', 'dashboardController@editsuratkeluar')->name('manajemen-surat.edit-surat-keluar');

        //surat masuk
        Route::get('/surat-masuk', 'dashboardController@suratmasuk')->name('manajemen-surat.surat-masuk');
        Route::get('/tambah-surat-masuk', 'dashboardController@tambahsuratmasuk')->name('manajemen-surat.tambah-surat-masuk');
        Route::get('/edit-surat-masuk', 'dashboardController@editsuratmasuk')->name('manajemen-surat.editsurat-masuk');
    });

    //ManajemenArtikel
    Route::prefix('dashboard/manajemen-artikel')->group(function () {

        // artikel
        Route::prefix('/artikel')->group(function () {
            Route::get('', 'ArticleDashboardController@index')->name('manajemen-artikel.artikel');
            // store article
            Route::get('/tambah', 'ArticleDashboardController@create')->name('manajemen-artikel.artikel.create');
            Route::post('/tambah', 'ArticleDashboardController@store')->name('manajemen-artikel.artikel.store');
            // update artikel
            Route::get('/{article}/edit', 'ArticleDashboardController@edit')->name('manajemen-artikel.artikel.edit');
            Route::patch('/{article}/edit', 'ArticleDashboardController@update')->name('manajemen-artikel.artikel.update');
            // comment activation
            Route::patch('/{article}/aktivasi-komentar', 'ArticleDashboardController@commentActivation')->name('manajemen-artikel.artikel.comment-activation');
            // show activation
            Route::patch('/{article}/aktivasi', 'ArticleDashboardController@showActivation')->name('manajemen-artikel.artikel.activation');
            // delete article
            Route::delete('/{article}/delete', 'ArticleDashboardController@destroy')->name('manajemen-artikel.artikel.destroy');
        });

        // kategori
        Route::prefix('/kategori')->group(function () {
            Route::get('', 'ArticleCategoryController@index')->name('manajemen-artikel.kategori');
            // store category
            Route::post('/tambah', 'ArticleCategoryController@store')->name('manajemen-artikel.kategori.store');
            // update category
            Route::get('/{article_category}/edit', 'ArticleCategoryController@edit')->name('manajemen-artikel.kategori.edit');
            Route::patch('/{article_category}/edit', 'ArticleCategoryController@update')->name('manajemen-artikel.kategori.update');
            // delete category
            Route::delete('/{article_category}/delete', 'ArticleCategoryController@destroy')->name('manajemen-artikel.kategori.destroy');
            // category activation
            Route::patch('/{article_category}/aktivasi', 'ArticleCategoryController@activation')->name('manajemen-artikel.kategori.activation');
        });

        // komentar
        Route::prefix('/komentar')->group(function () {
            Route::get('', 'ArticleCommentController@index')->name('manajemen-artikel.komentar');
            // update comment
            // Route::get('/{article_comment}/edit', 'ArticleCommentController@edit')->name('manajemen-artikel.komentar.edit');
            // Route::patch('/{article_comment}/edit', 'ArticleCommentController@update')->name('manajemen-artikel.komentar.update');
            // delete comment
            Route::delete('/{article_comment}/delete', 'ArticleCommentController@destroy')->name('manajemen-artikel.komentar.destroy');
            // comment activation
            Route::patch('/{article_comment}/aktivasi', 'ArticleCommentController@activation')->name('manajemen-artikel.komentar.activation');
        });

        // tag
        Route::prefix('/tag')->group(function () {
            Route::get('', 'ArticleTagController@index')->name('manajemen-artikel.tag');
            // store article
            // Route::get('/tambah', 'ArticleDashboardController@create')->name('manajemen-artikel.artikel.create');
            // Route::post('/tambah', 'ArticleDashboardController@store')->name('manajemen-artikel.artikel.store');
            // update artikel
            Route::get('/edit', 'ArticleTagController@edit')->name('manajemen-artikel.tag.edit');
            // Route::patch('/{article}/edit', 'ArticleDashboardController@update')->name('manajemen-artikel.artikel.update');
            // comment activation
            // Route::patch('/{article}/aktivasi-komentar', 'ArticleDashboardController@commentActivation')->name('manajemen-artikel.artikel.comment-activation');
            // show activation
            // Route::patch('/{article}/aktivasi', 'ArticleDashboardController@showActivation')->name('manajemen-artikel.artikel.activation');
            // delete article
            // Route::delete('/{article}/delete', 'ArticleDashboardController@destroy')->name('manajemen-artikel.artikel.destroy');
        });
    });

    //InfoKelurahan
});



/**
 * VISITOR ROUTE
 */

// Beranda
Route::get('/', 'HomeController@beranda')->name('visitors.beranda.index');


// Artikel
Route::prefix('/artikel')->group(function () {
    Route::get('', 'ArticleController@index')->name('visitors.artikel.index');
    Route::get('/{article:slug}', 'ArticleController@show')->name('visitors.artikel.show');
    Route::get('/categories/{category:slug}', 'ArticleCategoryController@show')->name('visitors.artikel.category.show');
    Route::get('/tags/{tag:slug}', 'ArticleTagController@show')->name('visitors.artikel.tag.show');
});


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
