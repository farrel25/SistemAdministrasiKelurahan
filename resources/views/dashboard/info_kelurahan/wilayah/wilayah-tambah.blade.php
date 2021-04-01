@extends('dashboard.layouts.master', ['title' => "Tambah Dusun"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Dusun ",
        'link' => route('info-desa.wilayah') ,
        'page1' => "Wilayah ",
        'page2' => "/ Tambah"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Tambah Dusun</h5>

                <div tabindex="-1" class="dropdown-divider"></div>
                <form class="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Nama Dusun</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="#" class="">Kepala Dusun</label>
                                <select class="mb-2 form-control ">
                                    <option>--Silahkan Masukan Nama / NIK--</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="mt-2 btn btn-primary">Tambah Data</button>
                    <button class="mt-2 btn btn-outline-danger">Cancel</button>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection
