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
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Kategori Produk
                <div class="btn-actions-pane-right ">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
