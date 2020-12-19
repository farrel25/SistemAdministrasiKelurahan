@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-info-circle icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Detail Penduduk
                <div class="page-title-subheading">Penduduk / Detail Penduduk / Nama Penduduk
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip" title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark">
                <i class="fas fa-home"></i>
            </a>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class=" col-lg-3 mb-2 mt-1">
                        <img src="{{ asset('/admin') }}/images/avatars/ava-penduduk.jpeg" class="cropped img-fluid mx-auto d-block mt-2 mb-4 img-thumbnail" alt="Responsive image">
                    </div>
                    <div class=" col-lg-9 ">
                        <h4 class="card-title font-weight-bold mt-2">Data Diri</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK</p>
                                <p class="answer"> 337302020300003</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap</p>
                                <p class="answer"> Briliantino Abhista Prabandanu</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Tempat Lahir</p>
                                <p class="answer"> Semarang</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Tanggal Lahir</p>
                                <p class="answer"> 15-04-200</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Agama</p>
                                <p class="answer"> Shinto</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Pendidikan</p>
                                <p class="answer"> SMA</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Pekerjaan</p>
                                <p class="answer"> Programmer</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Kawin</p>
                                <p class="answer"> Kawin</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Tinggal</p>
                                <p class="answer"> Menetap</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Hidup</p>
                                <p class="answer"> Hidup</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Kewarganegaraan</p>
                                <p class="answer"> WNA</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Golongan Darah</p>
                                <p class="answer"> B-</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">No. Telepon</p>
                                <p class="answer"> 085641268668</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Email</p>
                                <p class="answer"> babhistta@gmail.com</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Alamat</p>
                                <p class="answer"> Klumpit Kel. Sidurejo Kidul Kec.Tingkir RT 002 RW 001, Salatiga</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="card-title font-weight-bold mt-2">Data Orang Tua</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK Ayah</p>
                                <p class="answer"> 337302020300003</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap Ayah</p>
                                <p class="answer"> Briliantino Abhista Prabandanu</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK Ibu</p>
                                <p class="answer"> 337302020300003</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap Ibu</p>
                                <p class="answer"> Briliantino Abhista Prabandanu</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="card-title font-weight-bold mt-2">Riwayat Penyakit</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Penyakit Cacat</p>
                                <p class="answer"> -</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Penyakit Menahun</p>
                                <p class="answer"> -</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection