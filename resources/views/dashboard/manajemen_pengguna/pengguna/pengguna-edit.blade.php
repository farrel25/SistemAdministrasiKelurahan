@extends('dashboard.layouts.master', ['title' => "Edit Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Pengguna ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Pengguna ",
        'page2' => "/ Edit",
        'page3' =>"/ Nama Pengguna"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">

                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Edit Pengguna</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class="col-3">
                        <h4 class="card-title">Data Pengguna</h4>
                        <hr>
                    </div>
                    <div class="col-9">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Role</label>
                                <select class="mb-2 form-control ">
                                    <option>Pilih Role</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Username</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Kata Sandi</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nama</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">E-mail</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Nomor HP</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Foto</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="exampleFile" class="">Upload Foto</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Wajib mengisi foto sesuai dengan
                                        aslinya</small>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-primary">Edit Data</button>
                            <button class="mt-2 btn btn-outline-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
