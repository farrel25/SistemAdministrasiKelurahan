@extends('dashboard.layouts.master', ['title' => "Buat Cetak Surat"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" fas fa-edit icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Buat Cetak Surat
                <div class="page-title-subheading">Cetak Surat / Buat Cetak Surat
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
                <h5 class="card-title">Buat Cetak Surat</h5>
                <hr>
                <form class="">
                    <div class="position-relative form-group">
                        <label for="#" class="">NIK</label>
                        <select name="#" id="#" class="mb-2 form-control" value="#">
                            <option>Pilih...</option>
                            <option value="#"></option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Nomor Surat</label>
                        <input name="#" id="#" type="text" class="form-control">
                        <p class=" mt-2 font-italic font-weight-light" style="color: red;">Format nomor surat: S-02/001/[kode_desa]/XII/2020</p>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Keterangan</label>
                        <textarea name="#" id="#" type="text" class="form-control"></textarea>
                    </div>
                    <label for="#" class="">Berlaku dari -Sampai</label>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input name="#" id="#" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input name="#" id="#" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Tertanda Atas Nama</label>
                        <select name="#" id="#" class="mb-2 form-control" value="#">
                            <option>Pilih...</option>
                            <option value="#"></option>
                        </select>
                    </div>
                    <div class=" form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Staf Pemerintah Desa</label>
                                <select name="#" id="#" class="mb-2 form-control" value="#">
                                    <option>Pilih...</option>
                                    <option value="#"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Menjabat Sebagai</label>
                                <select name="#" id="#" class="mb-2 form-control" value="#">
                                    <option>Pilih...</option>
                                    <option value="#"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="mt-2 btn btn-primary">Buat Cetak Surat</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>
            </div>
        </div>

    </div>
</div>




@endsection