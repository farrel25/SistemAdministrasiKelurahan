@extends('dashboard.layouts.master', ['title' => "Identitas Desa"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-culture",
        'judul' => "Identitas Desa",
        'link' => route('info-desa.identitas') ,
        'page1' => "Identitas Desa"
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="row">
    <div class="col-md-12 ">
        <div class="main-card mb-3 card ">
            <div class=" btn-actions-pane-left m-3 ">
                {{-- <a type="button" class="btn btn-lg btn-success btn-sm text-white font-weight-normal btn-responsive m-1"
                    href="#">
                    <i class="fas fa-plus mr-1"></i> Tambah Identitas Kelurahan </a> --}}
                <a type="button" class="btn btn-lg btn-primary btn-sm text-white font-weight-normal btn-responsive m-1"
                    href="{{route('info-desa.identitas.edit', $villageIdentity->id)}}">
                    <i class="fas fa-edit mr-1"></i> Edit Identitas Kelurahan</a>
                <a type="button"
                    class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal btn-responsive m-1" href="#">
                    <i class="fas fa-map mr-1"></i> Lokasi Kantor Kelurahan</a>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Visi
            </div>
            <div class="m-4">
                <p>
                    {{ $villageIdentity->vision }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Misi
            </div>
            <div class="m-4">
                <p>
                    {{ $villageIdentity->mission }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Sejarah
            </div>
            <div class="m-4">
                <p>
                    {{ $villageIdentity->history }}
                </p>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
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
                            <td class=" text-left ">{{ $villageIdentity->village_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->village_code }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Pos Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->zip_code }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kepala_desa_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">NIP Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kepala_desa_nip }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Alamat Kantor Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->office_address }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">E-Mail Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->village_email }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Telepon Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->phone }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Website Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->website }}</td>
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
                            <td class=" text-left">{{ $villageIdentity->kecamatan_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Kecamatan</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kecamatan_code }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Nama Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kepala_camat_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">NIP Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kepala_camat_nip }}</td>
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
                            <td class=" text-left">{{ $villageIdentity->kabupaten_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Kabupaten</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->kabupaten_code }}</td>
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
                            <td class=" text-left">{{ $villageIdentity->province_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Kode Provinsi</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->province_code }}</td>
                        </tr>
                    </tbody>

                </table>
                <table class=" mb-0 table table-borderless table-striped ">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-secondary text-white">Media Sosial</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left pl-4">Instagram</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->instagram }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Facebook</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->facebook }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Twitter</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->twitter }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Youtube</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">{{ $villageIdentity->youtube }}</td>
                        </tr>
                        <tr>
                            <td class=" text-left pl-4">Link Google Maps</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left"></td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Foto Gedung</div>
            <img class="img-fluid" style="width: 100%; height: 350px; overflow: hidden; object-fit: cover;"
                alt="Responsive image" src="{{ asset('/admin') }}/images/foto-kelurahan.jpg" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Logo Desa</div>
            <img class="img-fluid" style="width: 100%; height: 350px; overflow: hidden; object-fit: scale-down;"
                alt="Responsive image" src="{{ asset('/images') }}/logo.png" alt="">
        </div>
    </div>
</div>


@endsection
