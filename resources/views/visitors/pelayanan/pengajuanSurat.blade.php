@extends('visitors.layouts.master', ['title' => 'Layanan - Pengajuan Surat'])

@section('content')
<section id="page-title-pelayanan">
    <div class="container mb-5">

        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-6 text-center">
                <h2>Pengajuan Surat</h2>
                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="breadcrumb justify-content-center" style="background: none">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Surat</li>
                        </ol>
                    </small>
                </nav>
            </div>
            {{-- <div class="col-lg-5">
                <h2>Pengajuan Surat</h2>
            </div>
            <div class="col-lg-5">
                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="breadcrumb d-flex justify-content-end" style="background: none">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Surat</li>
                        </ol>
                    </small>
                </nav>
            </div> --}}
        </div>

        <div class="row justify-content-center form-box" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-10 mt-4">
                <form action="" method="post">
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap">
                        </div>
                    </div>
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jenisSurat">Jenis Surat</label>
                            <select id="jenisSurat" class="form-control">
                                <option selected>Pilih...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="" id="keterangan" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="checkSetuju">
                        <label class="custom-control-label" for="checkSetuju">Anda telah menyetujui segala <a
                                href="">persyaratan dan ketentuan</a> yang berlaku</label>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn-submit" style="margin: 0 auto;">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection
