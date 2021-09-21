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


    // peengajuan surat
    Route::get('/pelayanan/pengajuan-surat', 'LetterSubmissionController@create')->name('pengajuan-surat.create');
    Route::post('/pelayanan/pengajuan-surat', 'LetterSubmissionController@store')->name('pengajuan-surat.store');


    // dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


    //InfoKelurahan
    Route::prefix('/dashboard/info-desa')->middleware('permission:Info Desa')->group(function () {

        // Identitas Desa
        Route::prefix('/identitas')->group(function () {
            // Index
            Route::get('', 'VillageIdentityController@index')->name('info-desa.identitas');
            // Store
            // Route::get('/tambah', 'InfoIdentityController@create')->name('info-kelurahan.identitas-kelurahan.create');
            // Route::post('/tambah', 'InfoIdentityController@store')->name('info-kelurahan.identitas-kelurahan.store');
            // Update
            Route::get('{village_identity}/edit', 'VillageIdentityController@edit')->name('info-desa.identitas.edit');
            Route::patch('{village_identity}/edit', 'VillageIdentityController@update')->name('info-desa.identitas.update');
            // Route::patch('/edit', 'InfoIdentityController@update')->name('info-kelurahan.identitas-update');
            // comment activation
            // Route::patch('/{article}/aktivasi-komentar', 'InfoIdentityController@commentActivation')->name('info-kelurahan.identitas-kelurahan.comment-activation');
            // show activation
            // Route::patch('/{article}/aktivasi', 'InfoIdentityController@showActivation')->name('info-kelurahan.identitas-kelurahan.activation');
            // delete article
            // Route::delete('/{article}/delete', 'InfoIdentityController@destroy')->name('info-kelurahan.identitas-kelurahan.destroy');
        });

        // Wilayah Desa
        Route::prefix('/wilayah')->group(function () {
            Route::get('', 'InfoRegionController@index')->name('info-desa.wilayah');
            // store Wilayah
            Route::get('/tambah', 'InfoRegionController@create')->name('info-desa.wilayah-create');
            Route::post('/tambah', 'InfoRegionController@store')->name('info-desa.wilayah-store');
            // update category
            Route::get('/edit', 'InfoRegionController@edit')->name('info-desa.wilayah-edit');
            Route::patch('/edit', 'InfoRegionController@update')->name('info-desa-wilayah.update');
            // delete category
            // Route::delete('/{article_category}/delete', 'ArticleCategoryController@destroy')->name('info-kelurahan.identitas-kelurahan.destroy');
            // category activation
            // Route::patch('/{article_category}/aktivasi', 'ArticleCategoryController@activation')->name('info-kelurahan.identitas-kelurahan.activation');
        });

        // Kepengurusan Desa
        Route::prefix('/kepengurusan')->group(function () {
            Route::get('', 'StaffController@index')->name('info-desa.kepengurusan');
            // store Kepengurusan
            Route::get('/tambah', 'StaffController@create')->name('info-desa.kepengurusan-create');
            Route::post('/tambah', 'StaffController@store')->name('info-desa.kepengurusan-store');
            // update staff
            Route::get('{staff:nik}/edit', 'StaffController@edit')->name('info-desa.kepengurusan-edit');
            Route::patch('{staff:nik}/edit', 'StaffController@update')->name('info-desa.kepengurusan-update');
            // delete staff
            Route::delete('{staff:nik}/delete', 'StaffController@destroy')->name('info-desa.kepengurusan-destroy');
            // staff activation
            Route::patch('{staff:nik}/aktivasi', 'StaffController@activation')->name('info-desa.kepengurusan-activation');
        });
        // Wilayah Desa
        Route::prefix('/data-administratif')->group(function () {
            Route::get('', 'InfoAdministratifController@index')->name('info-desa.data-administratif');
            // store Wilayah
            // Route::get('/tambah', 'InfoRegionController@create')->name('info-desa.wilayah-create');
            // Route::post('/tambah', 'InfoRegionController@store')->name('info-desa.wilayah-store');
            // // update category
            // Route::get('/edit', 'InfoRegionController@edit')->name('info-desa.wilayah-edit');
            // Route::patch('/edit', 'InfoRegionController@update')->name('info-desa-wilayah.update');
            // delete category
            // Route::delete('/{article_category}/delete', 'ArticleCategoryController@destroy')->name('info-kelurahan.identitas-kelurahan.destroy');
            // category activation
            // Route::patch('/{article_category}/aktivasi', 'ArticleCategoryController@activation')->name('info-kelurahan.identitas-kelurahan.activation');
        });
    });


    //Kependudukan
    Route::prefix('/dashboard/kependudukan')->middleware('permission:Kependudukan')->group(function () {
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
    Route::prefix('dashboard/manajemen-surat')->middleware('permission:Manajemen Surat')->group(function () {

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
            // Index
            Route::get('', 'LetterSubmissionController@index')->name('manajemen-surat.pengajuan-surat');
            // Update
            Route::patch('/ubah', 'LetterSubmissionController@update')->name('manajemen-surat.pengajuan-surat.update');
            // Delete
            Route::delete('/{letter_submission}/delete', 'LetterSubmissionController@destroy')->name('manajemen-surat.pengajuan-surat.destroy');

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
    Route::prefix('dashboard/manajemen-artikel')->middleware('permission:Manajemen Artikel')->group(function () {

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


    //Manajemen Pengaduan
    Route::prefix('/dashboard/manajemen-pengaduan')->group(function () {

        // Pengaduan
        Route::prefix('/data-pengaduan')->group(function () {
            Route::get('', 'ComplaintController@index')->name('manajemen-pengaduan.data-pengaduan');
        });
    });


    // Manajemen UMKM
    Route::prefix('/dashboard/manajemen-umkm')->group(function () {
        Route::prefix('/data-penjual')->group(function () {
            Route::get('', 'UmkmProfileController@index')->name('manajemen-umkm.data-penjual');
        });
        Route::prefix('/data-produk')->group(function () {
            Route::get('', 'UmkmProductController@index')->name('manajemen-umkm.data-produk');
        });
        Route::prefix('/kategori')->group(function () {
            Route::get('', 'UmkmCategoryController@index')->name('manajemen-umkm.kategori');
        });
    });


    //Manajemen Menu
    Route::prefix('/dashboard/manajemen-menu')->middleware('permission:Manajemen Pengguna')->group(function () {

        // Menu
        Route::prefix('/menu')->group(function () {
            // Index
            Route::get('', 'DashboardMenuController@index')->name('manajemen-menu.menu');
            // Store
            Route::post('/tambah', 'DashboardMenuController@store')->name('manajemen-menu.menu.store-menu');
            // Update
            Route::patch('/ubah', 'DashboardMenuController@update')->name('manajemen-menu.menu.update-menu');
            // Delete
            Route::delete('{dashboard_menu}/hapus', 'DashboardMenuController@destroy')->name('manajemen-menu.menu.destroy-menu');
        });

        // Submenu
        Route::prefix('/sub-menu')->group(function () {
            // Index
            Route::get('', 'DashboardSubMenuController@index')->name('manajemen-menu.sub-menu');
            // Store
            Route::post('/tambah', 'DashboardSubMenuController@store')->name('manajemen-menu.sub-menu.store-sub-menu');
            // Update
            Route::patch('/ubah', 'DashboardSubMenuController@update')->name('manajemen-menu.sub-menu.update-sub-menu');
            // Activation
            Route::patch('/{dashboard_sub_menu}/aktivasi', 'DashboardSubMenuController@activation')->name('manajemen-menu.sub-menu.activation');
            // Destroy
            Route::delete('/{dashboard_sub_menu}/hapus', 'DashboardSubMenuController@destroy')->name('manajemen-menu.sub-menu.destroy-sub-menu');
        });
    });


    //ManajemenPengguna
    Route::prefix('/dashboard/manajemen-pengguna')->middleware('permission:Manajemen Pengguna')->group(function () {

        // Pengguna
        Route::prefix('/pengguna')->group(function () {
            Route::get('', 'UserController@index')->name('manajemen-pengguna.pengguna');
            // store user
            Route::get('/tambah', 'UserController@create')->name('manajemen-pengguna.pengguna-create');
            Route::post('/tambah', 'UserController@store')->name('manajemen-pengguna.pengguna-store');
            // Update User Role
            Route::patch('/ubah-role-pengguna', 'UserController@update')->name('manajemen-pengguna.pengguna.update-user-role');
            // delete user
            Route::delete('/{user}/delete', 'UserController@destroy')->name('manajemen-pengguna.pengguna-destroy');
            // user activation
            Route::patch('/{user}/aktivasi', 'UserController@activation')->name('manajemen-pengguna.pengguna-activation');
        });

        // RoleDanHakAkses
        Route::prefix('/role')->group(function () {
            Route::get('', 'UserRoleAccessController@index')->name('manajemen-pengguna.role');
            // Store Role
            Route::post('/tambah-role', 'UserRoleAccessController@storeRole')->name('manajemen-pengguna.role-dan-hak-akses.store-role');
            // Update Role
            Route::patch('/ubah-role', 'UserRoleAccessController@updateRole')->name('manajemen-pengguna.role-dan-hak-akses.update-role');
            // Destroy Role
            Route::delete('/{role}/hapus-role', 'UserRoleAccessController@destroyRole')->name('manajemen-pengguna.role-dan-hak-akses.destroy-role');
            // Store Role Permission
            Route::post('/tambah-role-permission', 'UserRoleAccessController@storeRolePermission')->name('manajemen-pengguna.role-dan-hak-akses.store-role-permission');
            // Update Role Permission
            Route::patch('/{role}/role-permission', 'UserRoleAccessController@updateRolePermission')->name('manajemen-pengguna.role-dan-hak-akses.update-role-permission');
            // Destroy Role Permission
            // Route::delete('/{permission}/hapus-role-permission', 'UserRoleAccessController@destroyRolePermission')->name('manajemen-pengguna.role-dan-hak-akses.destroy-role-permission');
        });
    });

    //Layanan
    Route::prefix('/dashboard/layanan')->middleware('permission:Layanan')->group(function () {

        // Pengajuan Surat
        Route::prefix('/pengajuan-surat')->group(function () {
            // Index
            Route::get('', 'ServiceLetterSubmissionController@index')->name('layanan.pengajuan-surat');
            // Update
            Route::get('/{letter_submission}/ubah', 'ServiceLetterSubmissionController@edit')->name('layanan.pengajuan-surat.edit');
            Route::patch('/{letter_submission}/ubah', 'ServiceLetterSubmissionController@update')->name('layanan.pengajuan-surat.update');
        });

        // Pengaduan
        Route::prefix('/pengaduan')->group(function () {
            Route::get('', 'ServiceComplaintController@index')->name('layanan.pengaduan');
            // store article
            // Route::get('/tambah', 'ServiceComplaintController@create')->name('layanan.pengaduan.create');
            // Route::post('/tambah', 'ServiceComplaintController@store')->name('manajemen-artikel.artikel.store');
        });

        // Kontibutor Artikel
        Route::prefix('/kontributor')->group(function () {
            // Index
            Route::get('', 'ServiceArticleContributorController@index')->name('layanan.kontributor');
            // Store
            Route::get('/tambah', 'ServiceArticleContributorController@create')->name('layanan.kontributor-artikel.create');
            Route::post('/tambah', 'ServiceArticleContributorController@store')->name('layanan.kontributor-artikel.store');
            // Update
            Route::get('/{article}/ubah', 'ServiceArticleContributorController@edit')->name('layanan.kontributor-artikel.edit');
            Route::patch('/{article}/ubah', 'ServiceArticleContributorController@update')->name('layanan.kontributor-artikel.update');
        });
    });
});



/**
 * VISITOR ROUTE
 */

// Beranda
Route::get('/', 'HomeController@beranda')->name('visitors.beranda.index');
// Complaint
Route::post('/pengaduan', 'ComplaintController@store')->name('visitors.complaint.store');


// Artikel
Route::prefix('/artikel')->group(function () {
    Route::get('', 'ArticleController@index')->name('visitors.artikel.index');
    Route::get('/{article:slug}', 'ArticleController@show')->name('visitors.artikel.show');
    Route::get('/categories/{category:slug}', 'ArticleCategoryController@show')->name('visitors.artikel.category.show');
    Route::get('/tags/{tag:slug}', 'ArticleTagController@show')->name('visitors.artikel.tag.show');

    // Comments
    Route::post('/tambah-komentar', 'ArticleCommentController@store')->name('visitors.article.comment.store');
});


// Profil_desa
Route::prefix('profil-desa')->group(function () {
    Route::get('/sejarah-visi-misi', 'ArticleController@showHistoryAndVisionMission')->name('profil-desa.sejarah-visi-misi');
    Route::get('/struktur-pemerintahan', 'ArticleController@showGovernmentStructure')->name('profil-desa.struktur-pemerintahan');
    Route::get('/administratif', 'AdministratifController@index')->name('profil-desa.administratif.index');
});


// UMKM
Route::prefix('/umkm')->group(function() {
    Route::get('', 'UmkmVisitorController@index')->name('visitors.umkm.index');
});


Route::get('/kegiatan-masyarakat/umkm/view-product', function () {
    return view('visitors.kegiatan_masyarakat.umkm.view-product');
})->name('visitors.kegiatan_masyarakat.umkm.view-product');
