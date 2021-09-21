@extends('dashboard.layouts.master', ['title' => "Kategori Produk"])
@section('content')
<?php
    $data=[
        'icon' => "pe-7s-cart",
        'judul' => "Kategori Produk ",
        'link' => route('manajemen-umkm.kategori') ,
        'page1' => "Kategori Produk  "
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="row">
    <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-header">Tambah Kategori
            </div>
            <form action="#" method="POST" class=" ">
                <div class="position-relative form-group m-3">
                    <label for="category" class="">Kategori</label>
                    <input name="category" id="category" type="text" class="form-control" value="#">
                    <button type="submit" class="mt-3 btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="main-card mb-3 card">
            <div class="card-header">Kategori
                <div class="btn-actions-pane-right "><a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btn-sm mr-1" data-toggle="tooltip"
                                        title="Edit Kategori" data-placement="bottom"><i class="fas fa-edit "></i>
                                    </a>
                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Kategori" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="#">
                                        <input type="hidden" name="enabled" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Non Aktifkan Kategori" data-placement="bottom">
                                            <i class="fas fa-lock-open"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">#</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection