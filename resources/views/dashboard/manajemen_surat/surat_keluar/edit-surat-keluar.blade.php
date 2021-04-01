@extends('dashboard.layouts.master', ['title' => "Edit Surat Keluar"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Surat Keluar",
        'link' => route('manajemen-surat.surat-keluar') ,
        'page1' => "Surat Keluar",
        'page2' => "/ Edit",
        'page3' => "/ id surat keluar "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit Surat Keluar</h5>
                <hr>
                <form class="">
                    <div class="position-relative form-group">
                        <label for="#" class="">No. Urut</label>
                        <input name="#" id="#" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Berkas Scan Masuk</label>
                        <input name="file" id="exampleFile" type="file" class="form-control-file">
                        <p class=" mt-2 font-italic font-weight-light" style="color: red;">(Kosongkan jika tidak ingin
                            mengubah berkas)</p>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Kode/Klasifikasi Surat</label>
                        <select name="#" id="#" class="mb-2 form-control" value="#">
                            <option>Pilih...</option>
                            <option value="#"></option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Nomor Surat</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Tanggal Surat</label>
                                <input name="#" id="#" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Tujuan</label>
                        <input name="#" id="#" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Isi Singkat/Perihal</label>
                        <textarea name="#" id="#" type="text" class="form-control"></textarea>
                    </div>

                    <button class="mt-2 btn btn-primary">Edit Surat Keluar</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>
            </div>
        </div>

    </div>
</div>




@endsection
