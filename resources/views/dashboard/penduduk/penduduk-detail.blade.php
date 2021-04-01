@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<?php
    $data=[
        'icon' => "fas fa-info-circle",
        'judul' => "Edit Penduduk",
        'link' => route('penduduk') ,
        'page1' => "Penduduk",
        'page2' => "/ Detail",
        'page3' => "/  $villager->full_name "
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class=" col-lg-3 mb-2 mt-1">
                        <img src="{{ $villager->takeImage }}"
                            class="cropped img-fluid mx-auto d-block mt-2 mb-4 img-thumbnail" alt="Foto Penduduk">
                    </div>
                    <div class=" col-lg-9 ">
                        <h4 class="card-title font-weight-bold mt-2">Data Diri</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK</p>
                                <p class="answer"> {{ $villager->nik }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap</p>
                                <p class="answer"> {{ $villager->full_name }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Tempat Lahir</p>
                                <p class="answer"> {{ $villager->birth_place }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Tanggal Lahir</p>
                                <p class="answer"> {{ $villager->birth_date }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Agama</p>
                                <p class="answer"> {{ $villager->villagerReligion->religion }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Pendidikan</p>
                                <p class="answer"> {{ $villager->villagerEducation->education }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Pekerjaan</p>
                                <p class="answer"> {{ $villager->villagerProfession->profession }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Kawin</p>
                                <p class="answer"> {{ $villager->villagerMaritalStatus->marital_status }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Tinggal</p>
                                <p class="answer"> {{ $villager->villagerStayStatus->stay_status }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Status Hidup</p>
                                <p class="answer"> {{ $villager->villagerLifeStatus->life_status }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Kewarganegaraan</p>
                                <p class="answer"> {{ $villager->villagerNationality->kewarganegaraan }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Golongan Darah</p>
                                <p class="answer"> {{ $villager->villagerBloodType->blood_type }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">No. Telepon</p>
                                <p class="answer"> {{ $villager->phone_number }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Email</p>
                                <p class="answer">
                                    @if ($villager->user_id != null)
                                    {{ $villager->user->email }}
                                    @else
                                    Tidak ada (belum mendaftarkan akun)
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Alamat</p>
                                <p class="answer"> {{ $villager->address }}</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="card-title font-weight-bold mt-2">Data Orang Tua</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK Ayah</p>
                                <p class="answer"> {{ $villager->father_nik }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap Ayah</p>
                                <p class="answer"> {{ $villager->father_name }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">NIK Ibu</p>
                                <p class="answer"> {{ $villager->mother_nik }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Nama Lengkap Ibu</p>
                                <p class="answer"> {{ $villager->mother_name }}</p>
                            </div>
                        </div>
                        <hr>
                        <h4 class="card-title font-weight-bold mt-2">Riwayat Penyakit</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Penyakit Cacat</p>
                                <p class="answer"> {{ $villager->villagerDisability->disability }}</p>
                            </div>
                            <div class="col-md-12 d-inline-flex ">
                                <p class="">Penyakit Menahun</p>
                                <p class="answer"> {{ $villager->villagerChronicDisease->disease }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
