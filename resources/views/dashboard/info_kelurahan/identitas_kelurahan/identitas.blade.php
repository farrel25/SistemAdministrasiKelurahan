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
            <div class="card-header">Foto Gedung
            </div>
            <img class="img-fluid" style="width: 100%; height: 350px; overflow: hidden; object-fit: cover;"
                alt="Responsive image" src="{{ asset('/admin') }}/images/foto-kelurahan.jpg" alt="">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Sejarah
            </div>
            <div class="m-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Visi Misi
            </div>
            <div class="m-4">
                <p>
                    Terwujudnya Pembangunan Di Seluruh Aspek Kehidupan Menuju Masyarakat Desa Yang Sehat, Cerdas dan
                    Sejahtera
                    Berdasarkan Tri Hita Karana
                </p>
                <p>
                    1. Meningkatkan kualitas sumber daya manusia melalui program pendidikan dan program kesehatan, serta
                    pengamalan ajaran
                    agama kepada masyarakat sesuai dengan falsafah ”Tri Hita Karana”
                    2. Menggali, melestarikan dan mengembangkan nilai-nilai budaya desa.
                    Meningkatkan ketahanan ekonomi dengan menggalakkan usaha ekonomi kerakyatan, melalui program
                    strategis di bidang
                    produksi pertanian, pemasaran, koperasi, usaha kecil dan menengah, serta pariwisata.
                    3. Meningkatkan partisipasi masyarakat dalam pembangunan, sehingga dapat menumbuhkembangkan
                    kesadaran
                    dan kemandirian dalam
                    pembangunan desa yang berkelanjutan.
                    4. Menciptakan suasana yang aman dan tertib dalam kehidupan bermasyarakat.
                    Meningkatkan pelayanan kepada masyarakat dan meningkatkan kerjasama antar lembaga pemerintahan di
                    desa serta lembaga
                    adat.
                    5. Memberdayakan masyrakat menuju masyarakat mandiri.
                </p>
            </div>
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
