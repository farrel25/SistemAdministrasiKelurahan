@extends('dashboard.layouts.master', ['title' => "Kategori Tambah"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Kategori",
        'link' => route('manajemen-artikel.kategori') ,
        'page1' => "Kategori",
        'page2' => "/ Tambah",
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Tambah Kategori</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3 mb-2 mt-1">
                        <h4 class="card-title font-weight-bold">Kategori</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9 ">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Judul Kategori</label>
                                        <input name="#" id="#" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="#" class="">Kategori</label>
                                        <select class="mb-2 form-control ">
                                            <option>Pilihan 1</option>
                                            <option>Pilihan 2</option>
                                            <option>Pilihan 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="editor" class="mb-3">
                        </div>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider mt-4"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Tag</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Tag</label>
                                <input name="#" id="#" type="text" class="form-control">
                                <div class="mt-2 ">
                                    <label for="#" class=" bg-light pl-2 pr-2 p-1  border rounded">Tag
                                        <a href="#" class="hover-red"><i class="fas fa-times-circle"></i></a>
                                    </label>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Gambar</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="exampleFile" class="">Upload Gambar</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Wajib mengisi Gambar sesuai dengan
                                        aslinya
                                    </small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-3">
                        <h4 class="card-title">Lampiran</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-9">
                        <form class="">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="exampleFile" class="">Upload Lampiran</label>
                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Untuk Kategori yang membutuhkan Lampiran</small>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-primary">Tambah Data</button>
                            <button class="mt-2 btn btn-outline-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
