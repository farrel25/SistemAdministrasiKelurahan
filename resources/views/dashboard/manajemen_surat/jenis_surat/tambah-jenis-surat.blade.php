@extends('dashboard.layouts.master', ['title' => "Tambah Jenis Surat"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-plus icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Tambah Jenis Surat
                <div class="page-title-subheading">
                    <a href="{{ route('manajemen-surat.jenis-surat') }}" style="text-decoration: none">
                        Jenis Surat
                    </a>
                    / Tambah
                </div>
            </div>
        </div>
        <div class="page-title-actions d-flex">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip"
                title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend"
                    required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i
                            class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Jenis Surat</h5>
                <hr>
                <form action="{{ route('manajemen-surat.jenis-surat.store') }}" method="POST" class="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="letter_code" class="">Kode</label>
                                <input name="letter_code" id="letter_code" type="text"
                                    class="form-control @error('letter_code') is-invalid @enderror"
                                    value="{{ old('letter_code') }}">
                                @error('letter_code')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="position-relative form-group">
                                <label for="type" class="">Nama Layanan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Surat</div>
                                    </div>
                                    <input name="type" id="type" type="text"
                                        class="form-control @error('type') is-invalid @enderror"
                                        value="{{ old('type') }}">
                                    @error('type')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="validity_period" class="">Masa Berlaku</label>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input name="validity_period" id="validity_period" type="number"
                                            class="form-control  @error('validity_period') is-invalid @enderror"
                                            value="{{ old('validity_period') ?? 1 }}" min="1" max="31">
                                        @error('validity_period')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-8">
                                        <select name="validity_period_unit" id="validity_period_unit"
                                            class="form-control @error('validity_period_unit') is-invalid @enderror"
                                            value="{{ old('validity_period_unit') }}">
                                            <option>{{ old('validity_period_unit') ?? 'Pilih...' }}</option>
                                            <option value="D">Hari</option>
                                            <option value="W">Minggu</option>
                                            <option value="M">Bulan</option>
                                            <option value="Y">Tahun</option>
                                        </select>
                                        @error('validity_period_unit')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 btn btn-primary">Tambah</button>
                    <a href="{{ route('manajemen-surat.jenis-surat') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                </form>
            </div>
        </div>

    </div>
</div>




@endsection
