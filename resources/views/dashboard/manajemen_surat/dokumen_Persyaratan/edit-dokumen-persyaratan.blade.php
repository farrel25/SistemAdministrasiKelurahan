@extends('dashboard.layouts.master', ['title' => "Edit Dokumen Persyaratan"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" fas fa-edit icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                Edit Dokumen Persyaratan
                <div class="page-title-subheading">
                    <a href="{{ route('manajemen-surat.dokumen-persyaratan') }}" style="text-decoration: none">
                        Dokumen Persyaratan
                    </a>
                    / Edit
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
                <h5 class="card-title">Edit Dokumen Persyaratan</h5>
                <hr>
                <form action="{{route('dokumen-persyaratan-update', $letterDocument->id)}}" method="POST" class="">
                    @csrf
                    @method('patch')

                    <div class="position-relative form-group">
                        <label for="document" class="">Nama Dokumen</label>
                        <input name="document" id="document" type="text"
                            class="form-control @error('document') is-invalid @enderror"
                            value="{{ old('document') ?? $letterDocument->document }}">

                        @error('document')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="mt-2 btn btn-primary">Simpan</button>
                    <a href="{{ route('manajemen-surat.dokumen-persyaratan') }}" class="mt-2 btn btn-outline-danger">
                        Batal
                    </a>
                </form>
            </div>
        </div>

    </div>
</div>




@endsection
