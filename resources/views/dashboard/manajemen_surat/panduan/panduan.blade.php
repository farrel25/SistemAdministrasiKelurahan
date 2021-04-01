@extends('dashboard.layouts.master', ['title' => "Panduan"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-notebook icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Panduan
                <div class="page-title-subheading">Panduan
                </div>
            </div>
        </div>
        <div class="page-title-actions d-flex">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip" title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend" required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Panduan
                <div class="btn-actions-pane-right ">
                    <a type="button" class="btn btn-lg btn-danger btn-sm text-white font-weight-normal mr-2 " href="#" data-toggle="tooltip" title="Download Panduan PDF" data-placement="bottom"><i class="fas fa-file-pdf "></i></a>

                </div>
            </div>
            <div class="m-5">


                <p>
                    Salah satu fungsi aplikasi Sistem Informasi Desa (SID) adalah untuk mengoptimalkan pelayanan administrasi publik berbasis data. Pelayanan administrasi publik yang bisa dilakukan dengan aplikasi SID meliputi pelayanan olah data dan pelayanan olah dokumen/surat. Pelayanan olah data dapat dilakukan dengan memanfaatkan fungsi-fungsi statistik yang dapat dimanfaatkan untuk laporan dan rujukan pengambilan keputusan. Pelayanan olah dokumen bisa dilakukan dari data yang telah diolah dan/atau dari pengelolaan administrasi surat-menyurat.
                </p>
                <p>


                    Aplikasi SID menghimpun seluruh data penduduk desa, sehingga bisa digunakan untuk data dasar pembuatan surat administrasi kependudukan. Pelayanan administrasi persuratan itu dapat dikelola oleh pemerintah desa di kantor pemerintah desa masing-masing. Tata cara pemanfaatan module cetak surat aplikasi SID dalam alur pelayanan publik di kantor desa secara garis besar dapat dilakukan dengan urutan sebagai berikut:
                </p>
                <p>
                    Penduduk pemohon surat datang dengan membawa kartu identitas diri (KTP atau Kartu Keluarga/KK) dan diterima oleh staf pemerintah desa yang bertugas dalam pelayanan.
                    Pastikan keberadaan dan status penduduk tersebut dalam database SID di Module "Penduduk". Gunakan fasilitas "Cari" dengan mengisikan nama atau NIK penduduk tersebut. Jika ada perubahan status, perbarui saat itu juga berdasarkan laporan penduduk yang bersangkutan. Jika penduduk tersebut belum terdaftar dalam database, masukkan data penduduk yang bersangkutan ke dalam SID merujuk pada dokumen kependudukan yang dimilikinya (wajib disertai dengan dokumen pendukung lainnya bagi penduduk pendatang/tinggal sementara). Jika data penduduk tersebut sudah tersimpan dalam SID, pembuatan surat dapat dilakukan.
                    Klik module "Cetak Surat" untuk memulai pembuatan surat.
                    Klik salah satu jenis surat yang akan dibuat, sesuaikan dengan jenis urusan yang diajukan oleh penduduk pemohon surat. Jika jenis surat yang dimohonkan tidak tersedia dalam daftar surat di SID, gunakan jenis surat terakhir yang berjudul "Ubah Sesuaikan".
                    Isikan NIK / Nama, nomor surat, keterangan, dan hal lainnya sesuai kolom isian pada jenis surat yang dibuat.
                    Pilih nama dan jabatan kepala desa atau perangkat desa yang berwenang melakukan pengesahan atas nama kepala desa.
                    Setelah semua kolom terisi dengan benar, surat bisa langsung dicetak dengan klik tombol "Cetak" di bagian kanan bawah, atau bisa diedit lebih lanjut ke versi doc. dengan klik "Export Doc" di bagian kanan bawah.
                    Surat dapat dicetak dua eksemplar, 1 eks. untuk penduduk pemohon surat dan 1 eks. untuk arsip pemerintah desa.
                    Setiap jenis surat yang tercetak akan tersimpan data lognya di Menu "Surat Keluar"
                    Demikian panduan pembuatan surat dengan menggunakan aplikasi SID. Selamat menyelenggarakan pelayanan administrasi publik.
                </p>
            </div>
        </div>
    </div>
</div>


@endsection