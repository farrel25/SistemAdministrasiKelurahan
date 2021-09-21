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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
