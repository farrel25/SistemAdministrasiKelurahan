@extends('dashboard.layouts.master', ['title' => "Tambah Kepengurursan Kelurahan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Kepengurusan Kelurahan",
        'link' => route('info-kelurahan.kepengurusan') ,
        'page1' => "Kepengurursan Kelurahan",
        'page2' => "/ Tambah"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Tambah Staf Desa</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3 mb-2 mt-1">
                        <h4 class="card-title font-weight-bold">Pengambilan Data</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9 ">
                        <form class="">
                            <div class="position-relative form-group ">
                                <div><label for="#" class="">Data Staf</label>
                                </div>
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm nav btn-group">
                                        <a data-toggle="tab" href="#tab-eg1-0"
                                            class="btn-shadow active btn btn-primary">Database Pnduduk
                                        </a>
                                        <a data-toggle="tab" href="#tab-eg1-1" class="btn-shadow  btn btn-primary">
                                            Tidak Terdata
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-content mt-3">
                                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                        <div class="position-relative form-group">
                                            <label for="religion_id" class="">Pilih NIK</label>
                                            <select name="religion_id" id="religion_id" class="mb-2 form-control "
                                                value="#">
                                                <option value="#">
                                                    pilihh
                                                </option>

                                                <option value="?"></option>
                                            </select>
                                            {{-- <span class="invalid-feedback mt-2" role="alert">
                                                <i>{{ $message }}</i>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Data Staf</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Nama Staf</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIK</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIP</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIPD</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Tempat Lahir</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Tanggal Lahir</label>
                                        <input name="#" id="#" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="#" class=" ">Jenis Kelamin</label>
                                    <div class="position-relative form-check mt-2 mb-3">
                                        <label class="form-check-label">
                                            <input name="radio1" type="radio" class="form-check-input"> Laki - Laki
                                        </label>
                                        <label class="form-check-label ml-5">
                                            <input name="radio1" type="radio" class="form-check-input"> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Pendidikan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Agama</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Pangkat</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">SK</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nomor SK Pengangkatan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Tanggal SK Pengangkatan</label>
                                        <input name="#" id="#" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nomor SK Pemberhentian</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nomor SK Pemberhentian</label>
                                        <input name="#" id="#" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Pekerjaan</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Masa Jabatan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Jabatan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Pilih Atasan</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <div><label for="#" class="">Status Staf</label>
                                        </div>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm nav btn-group">
                                                <button data-toggle="tab" href="#"
                                                    class="btn-shadow active btn btn-primary">Aktif
                                                </button>
                                                <button data-toggle="tab" href="#" class="btn-shadow  btn btn-primary">
                                                    Tidak Aktif
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Bagan</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Bagan Tingkat</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Bagan Offset</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Bagan Layout</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Bagan Warna</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button class="mt-2 btn btn-primary">Ubah Data</button>
                            <button class="mt-2 btn btn-outline-danger">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


@endsection
