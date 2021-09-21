@extends('dashboard.layouts.master', ['title' => "Data Produk"])
@section('content')
<?php
    $data=[
        'icon' => "pe-7s-cart",
        'judul' => "Data Produk ",
        'link' => route('manajemen-umkm.data-produk') ,
        'page1' => "Data Produk"
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Produk
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-file-download "> </i> Unduh Data Excel</a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white m-1 mb-2 mt-2 font-weight-normal btn-responsive"
                        href="tambah-surat-masuk">+ Tambah Produk</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No. Urut</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Nama Product</th>
                            <th class=" text-center">Kategori</th>
                            <th class=" text-center">Foto</th>
                            <th class=" text-center">Deskripsi</th>
                            <th class=" text-center">Harga</th>
                            <th class=" text-center">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class=" d-flex justify-content-center">
                                    <a href="edit-surat-masuk" class="btn btn-primary btn-sm mr-1" data-toggle="tooltip"
                                        title="Edit Produk " data-placement="bottom"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                        title="Hapus Produk " data-placement="bottom"><i
                                            class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
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
