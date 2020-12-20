@extends('dashboard.layouts.master', ['title' => "Tambah Dokumen Persyaratan"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-plus icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Tambah Dokumen Persyaratan
                <div class="page-title-subheading">Dokumen Persyaratan / Tambah Dokumen Persyaratan
                </div>
            </div>
        </div>
        <div class="page-title-actions d-flex">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip" title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend" required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Dokumen Persyaratan</h5>
                <hr>
                <form class="">

                    <div class="position-relative form-group">
                        <label for="#" class="">Nama Dokumen</label>
                        <input name="#" id="#" type="text" class="form-control">
                    </div>
                    <button class="mt-2 btn btn-primary">Tambah Dokumen Persyaratan</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>

            </div>
        </div>

    </div>
</div>




@endsection