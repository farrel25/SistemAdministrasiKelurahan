@extends('dashboard.layouts.master', ['title' => "Tambah Dusun"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Penguna ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Pengguna ",
        'page2' => "/ Tambah"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">

                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Buat Akun Staff</h5>

                <div class="font-italic text-danger font-weight-bold mb-3">
                    *Pastikan Data penduduk yang dipilih sudah terdaftar sebagai staff kelurahan
                </div>

                <div tabindex="-1" class="dropdown-divider"></div>

                <form action="{{ route('manajemen-pengguna.pengguna-store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-3">
                            <h4 class="card-title">Data Pengguna</h4>
                            <hr>
                        </div>
                        <div class="col-8">
                            <div class="position-relative form-group">
                                <label for="villager" class="">NIK / Nama Penduduk</label>
                                <select name="villager" id="villager"
                                    class="mb-2 form-control select2villager @error('villager') is-invalid @enderror">
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
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="email" class="">Email</label>
                                        <input name="email" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="password" class="">Kata Sandi</label>
                                        <input name="password" id="password" type="text"
                                            class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="role" class="">Role</label>
                                        <select name="role" id="role"
                                            class="mb-2 form-control select2role @error('role') is-invalid @enderror">
                                            <option></option>
                                            @foreach ($roles as $role)
                                            <option value="{{$role->name}}"
                                                {{ old('role') == $role->name ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('role')
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
                            <h4 class="card-title">Foto</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row ml-1 mb-2 mt-3">
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

                            <button type="submit" class="mt-2 btn btn-primary">Buat Akun</button>
                            <a href="{{ route('manajemen-pengguna.pengguna') }}"
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
        $('.select2villager').select2({
            placeholder: "Pilih NIK / Nama Penduduk",
            allowClear: true
        });
    });
    $(document).ready(function() {
        $('.select2role').select2({
            placeholder: "Pilih Role User",
            allowClear: true
        });
    });
</script>

@endsection
