@extends('dashboard.layouts.master', ['title' => "Pengajuan Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Pengajuan Surat",
        'link' => route('layanan.pengajuan-surat') ,
        'page1' => "Pengajuan Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit Pengajuan Surat</h5>
                <hr>
                <form class="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">NIK</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Nama</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Email</label>
                                <input name="email" id="#" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Jenis Surat</label>
                                <select name="#" id="#" class="mb-2 form-control" value="#">
                                    <option>Pilih...</option>
                                    <option value="#"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="#" class="">Keperluan</label>
                        <textarea name="#" id="#" type="text" class="form-control"></textarea>
                    </div>
                    <button class="mt-2 btn btn-primary">Edit Pengajuan Surat</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
