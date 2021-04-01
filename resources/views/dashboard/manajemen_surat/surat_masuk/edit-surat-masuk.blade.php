@extends('dashboard.layouts.master', ['title' => "Edit Surat Masuk"])

@section('content')


<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Surat Masuk",
        'link' => route('manajemen-surat.surat-masuk') ,
        'page1' => "Surat Masuk",
        'page2' => "/ Edit",
        'page3' => "/ Id surat masuk "
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit Surat Masuk</h5>
                <hr>
                <form class="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">No. Urut</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Tanggal Penerimaan</label>
                                <input name="#" id="#" type="date" class="form-control">
                            </div>
                        </div>
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
                                <label for="#" class="">Tanggal Surat</label>
                                <input name="#" id="#" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Pengirim</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Isi Singkat/Perihal</label>
                        <textarea name="#" id="#" type="text" class="form-control"></textarea>
                    </div>
                    <label for="#" class="">Disposisi Kepada</label>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-check">
                                <input name="#" id="#" type="checkbox" class="form-check-input">
                                <label for="#" class="form-check-label">Check me out</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-check">
                                <input name="#" id="#" type="checkbox" class="form-check-input">
                                <label for="#" class="form-check-label">Check me out</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-check">
                                <input name="#" id="#" type="checkbox" class="form-check-input">
                                <label for="#" class="form-check-label">Check me out</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-check">
                                <input name="#" id="#" type="checkbox" class="form-check-input">
                                <label for="#" class="form-check-label">Check me out</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-check">
                                <input name="#" id="#" type="checkbox" class="form-check-input">
                                <label for="#" class="form-check-label">Check me out</label>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group mt-3">
                        <label for="#" class="">Isi Disposisi</label>
                        <textarea name="#" id="#" type="text" class="form-control"></textarea>
                    </div>
                    <button class="mt-2 btn btn-primary">Edit Surat Masuk</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>
            </div>
        </div>

    </div>
</div>




@endsection
