@extends('dashboard.layouts.master', ['title' => "Tambah Kepengurursan Kelurahan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Kepengurusan Kelurahan",
        'link' => route('info-desa.kepengurusan') ,
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

                <!--<form action="" method="post">
                    <div class="row">
                        <div class=" col-lg-3 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Pengambilan Data</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">
                            <div class="position-relative form-group ">
                                <div><label for="#" class="">Data Staf</label>
                                </div>
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm nav btn-group">
                                        {{-- <a data-toggle="tab" href="#tab-eg1-0"
                                            class="btn-shadow active btn btn-primary">Database Penduduk
                                        </a>
                                        <a data-toggle="tab" href="#tab-eg1-1" class="btn-shadow  btn btn-primary">
                                            Tidak Terdata
                                        </a> --}}
                                        <a class="btn-shadow active btn btn-primary">
                                            Database Penduduk
                                        </a>
                                        <a href="{{ route('penduduk-tambah') }}"
                                            class="btn-shadow btn btn-primary text-white">
                                            Tidak Terdata sebagai penduduk
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-content mt-3">
                                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                        <div class="position-relative form-group">
                                            <label for="villager" class="">Pilih NIK</label>
                                            <select name="villager" id="villager" class="mb-2 form-control select2">
                                                <option></option>
                                                @foreach ($villagers as $villager)
                                                <option value="{{$villager->id}}">
                                                    {{ $villager->nik }} - {{ $villager->full_name }}
                                                </option>
                                                @endforeach
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
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Data Staf</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
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
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">SK</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
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
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Pekerjaan</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
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
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Bagan</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
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
                        </div>
                    </div>
                </form>-->


                {{-- FORM baru, farrel version --}}
                <form action="{{ route('info-desa.kepengurusan-store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Data Staf</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">
                            <div class="position-relative form-group ">
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="position-relative form-group">
                                            <label for="villager" class="">NIK / Nama Penduduk</label>
                                            <select name="villager" id="villager"
                                                class="mb-2 form-control select2 @error('villager') is-invalid @enderror">
                                                <option></option>
                                                @foreach ($villagers as $villager)
                                                <option value="{{$villager->id}}"
                                                    {{ old('villager') == $villager->id ? 'selected' : '' }}>
                                                    {{ $villager->nik }} - {{ $villager->full_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('villager')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                            <a href="{{ route('penduduk-tambah') }}"
                                                class="btn-shadow btn btn-primary text-white mt-2">
                                                <i class="fa fa-plus mr-1"></i>
                                                Tambahkan data penduduk baru
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="nip" class="">NIP</label>
                                            <input name="nip" id="nip" type="text"
                                                class="form-control @error('nip') is-invalid @enderror"
                                                value="{{ old('nip') }}">
                                            @error('nip')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="nipd" class="">NIPD</label>
                                            <input name="nipd" id="nipd" type="text"
                                                class="form-control @error('nipd') is-invalid @enderror"
                                                value="{{ old('nipd') }}">
                                            @error('nipd')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div tabindex="-1" class="dropdown-divider"></div>

                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">SK</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nomor_sk_angkat" class="">Nomor SK Pengangkatan</label>
                                        <input name="nomor_sk_angkat" id="nomor_sk_angkat" type="text"
                                            class="form-control @error('nomor_sk_angkat') is-invalid @enderror"
                                            value="{{ old('nomor_sk_angkat') }}">
                                        @error('nomor_sk_angkat')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="tgl_sk_angkat" class="">Tanggal SK Pengangkatan</label>
                                        <input name="tgl_sk_angkat" id="tgl_sk_angkat" type="date"
                                            class="form-control @error('tgl_sk_angkat') is-invalid @enderror"
                                            value="{{ old('tgl_sk_angkat') }}">
                                        @error('tgl_sk_angkat')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nomor_sk_henti" class="">Nomor SK Pemberhentian</label>
                                        <input name="nomor_sk_henti" id="nomor_sk_henti" type="text"
                                            class="form-control @error('nomor_sk_henti') is-invalid @enderror"
                                            value="{{ old('nomor_sk_henti') }}">
                                        @error('nomor_sk_henti')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="tgl_sk_henti" class="">Tanggal SK Pemberhentian</label>
                                        <input name="tgl_sk_henti" id="tgl_sk_henti" type="date"
                                            class="form-control @error('tgl_sk_henti') is-invalid @enderror"
                                            value="{{ old('tgl_sk_henti') }}">
                                        @error('tgl_sk_henti')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div tabindex="-1" class="dropdown-divider"></div>

                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Pekerjaan</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="position_period" class="">Masa Jabatan</label>
                                        <input name="position_period" id="position_period" type="text"
                                            class="form-control @error('position_period') is-invalid @enderror"
                                            value="{{ old('position_period') }}"
                                            placeholder="Contoh : 6 Tahun Periode 1 (2020 s/d 2026)">
                                        @error('position_period')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="pangkat" class="">Pangkat</label>
                                        <input name="pangkat" id="pangkat" type="text"
                                            class="form-control @error('pangkat') is-invalid @enderror"
                                            value="{{ old('pangkat') }}">
                                        @error('pangkat')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="position-relative form-group">
                                        <label for="staff_position" class="">Jabatan</label>
                                        <select name="staff_position" id="staff_position"
                                            class="mb-2 form-control select2position @error('staff_position') is-invalid @enderror">
                                            <option></option>
                                            @foreach ($roles as $role)
                                            @if (\Str::lower($role->name) != 'administrator' && \Str::lower($role->name)
                                            != 'penduduk')
                                            <option value="{{$role->name}}"
                                                {{ old('staff_position') == $role->name? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('staff_position')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <div>
                                            <label for="is_active" class="">Status Staf</label>
                                        </div>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm nav btn-group">
                                                <button data-toggle="tab" href="#"
                                                    class="btn-shadow active btn btn-primary">Aktif
                                                </button>
                                                <button data-toggle="tab" href="#" class="btn-shadow  btn btn-primary">
                                                    Tidak Aktif
                                                </button>
                                                @error('is_active')
                                                <span class="invalid-feedback mt-2" role="alert">
                                                    <i>{{ $message }}</i>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div tabindex="-1" class="dropdown-divider"></div>

                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Foto</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row ml-1 mb-2">
                                <div class="position-relative form-group">
                                    <label for="photo" class="">Upload Foto</label>
                                    <input name="photo" id="photo" type="file"
                                        class="form-control-file @error('photo') is-invalid @enderror">
                                    <small class=" form-text text-muted">
                                        Wajib mengisi foto sesuai dengan aslinya
                                    </small>
                                    <small class="form-text text-muted">
                                        Ukuran Maksimal : 1MB
                                    </small>
                                    @error('photo')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="mt-2 btn btn-primary">Simpan Data</button>
                            <a href="{{ route('info-desa.kepengurusan') }}"
                                class="mt-2 btn btn-outline-danger">Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih NIK",
            allowClear: true,
            width:'100%'
        });
    });
    $(document).ready(function() {
        $('.select2position').select2({
            placeholder: "Pilih Jabatan",
            allowClear: true,
            width:'100%'
        });
    });
</script>

<script>
    $(document).ready(function() {
        if($('#villager option:selected')) {
            console.log($('#villager option:selected').val());
        }
    });
</script>

@endsection
