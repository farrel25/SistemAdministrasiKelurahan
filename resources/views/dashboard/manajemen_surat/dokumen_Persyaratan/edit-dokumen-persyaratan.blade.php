@extends('dashboard.layouts.master', ['title' => "Edit Dokumen Persyaratan"])

@section('content')


<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Dokumen Persyaratan",
        'link' => route('manajemen-surat.dokumen-persyaratan') ,
        'page1' => "Dokumen Persyaratan",
        'page2' => "/ Edit",
        'page3' => "/ $letterDocument->document "
    ]
?>
@include('dashboard.layouts.page-title',$data)


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
