@extends('dashboard.layouts.master', ['title' => "Identitas Kelurahan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-culture",
        'judul' => "Identitas Kelurahan",
        'link' => route('info-kelurahan.identitas') ,
        'page1' => "Identitas Kelurahan"
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Identitas Kelurahan
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-primary btn-sm text-white font-weight-normal  mb-2 mt-2 btn-responsive"
                        href="{{route('info-kelurahan.identitas-edit')}}">
                        <i class="fas fa-edit">
                        </i> Edit Foto Gedung
                    </a>
                </div>
            </div>
            <img class="img-fluid" style="width: 100%; height: 350px; overflow: hidden; object-fit: cover;"
                alt="Responsive image" src="{{ asset('/admin') }}/images/foto-kelurahan.jpg" alt="">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Identitas Kelurahan
                <div class="btn-actions-pane-right "><a type="button"
                        class="btn btn-lg btn-primary btn-sm text-white font-weight-normal  mb-2 mt-2 btn-responsive"
                        href="{{route('info-kelurahan.identitas-edit')}}">
                        <i class="fas fa-edit"></i> Edit Identitas Kelurahan</a>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal btn-responsive" href="#">
                        <i class="fas fa-map"></i> Lokasi Kantor Desa </a>
                </div>
            </div>
            <div class="table-responsive ">
                <table class="mb-0 table table-borderless table-striped">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-secondary text-white">Desa</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left pl-4">Nama Desa</td>
                            <td class=" text-right ">:</td>
                            <td class=" text-left ">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Pos Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">NIP Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Alamat Kantor Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">E-Mail Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Telepon Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Website Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class="mb-0 table table-borderless table-striped ">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-secondary text-white">Kecamatan</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left pl-4">Nama Kecamatan</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Kecamatan</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Nama Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">NIP Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class=" mb-0 table table-borderless table-striped ">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-secondary text-white">Kabupaten</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left pl-4">Nama Kabupaten</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Kabupaten</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class=" mb-0 table table-borderless table-striped ">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-secondary text-white">Provinsi</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left pl-4">Nama Provinsi</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Provinsi</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>


@endsection
