@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plus icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Penduduk
                <div class="page-title-subheading">Penduduk / Tambah Data
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
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Tambah Data Penduduk</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3 mb-2 mt-1">
                        <h4 class="card-title font-weight-bold">Data Diri</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9 ">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIK</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nama Lengkap</label>
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
                                        <label for="#" class="">Pendidikan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Pekerjaan</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Status Kawin</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Status Tinggal</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Status Hidup</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Kewarganegaraan</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Golongan Darah</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="#" class="">Address</label>
                                <textarea name="#" id="#" class="form-control"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Email</label>
                                        <input name="#" id="#" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">No. Telepon</label>
                                        <input name="#" id="#" type="tel" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Data Orang Tua</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIK Ayah</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nama Ayah</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">NIK Ibu</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nama Ibu</label>
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
                        <h4 class="card-title">Riwayat Penyakit</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Penyakit Cacat</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Penyakit Menahun</label>
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
                        <h4 class="card-title">Foto</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="exampleFile" class="">Upload Foto</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Wajib mengisi foto sesuai dengan aslinya</small>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-primary">Tambah Data</button>
                            <button class="mt-2 btn btn-outline-danger">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



@endsection