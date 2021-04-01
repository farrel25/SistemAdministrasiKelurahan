@extends('dashboard.layouts.master', ['title' => "Tambah Dokumen Persyaratan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Dokumen Persyaratan",
        'link' => route('manajemen-surat.dokumen-persyaratan') ,
        'page1' => "Dokumen Persyaratan",
        'page2' => "/ Tambah"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Dokumen Persyaratan</h5>
                <hr>
                <form action="{{ route('dokumen-persyaratan-store') }}" method="POST" class="">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="document" class="">Nama Dokumen</label>
                        <input name="document" id="document" type="text"
                            class="form-control @error('document') is-invalid @enderror" value="{{ old('document') }}"
                            autofocus>
                        @error('document')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="mt-2 btn btn-primary">Tambah Dokumen Persyaratan</button>
                    <a href="{{ route('manajemen-surat.dokumen-persyaratan') }}" class="mt-2 btn btn-outline-danger">
                        Batal
                    </a>
                </form>

            </div>
        </div>

    </div>
</div>




@endsection
