@extends('dashboard.layouts.master', ['title' => "Beranda"])

@section('content')
<?php
    $data=[
        'icon' => "pe-7s-rocket",
        'judul' => "Dashboard",
        'link' => route('dashboard') ,
        'page1' => "Dashboard",
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Surat Masuk</div>
                    <div class="widget-subheading">Total Surat Masuk</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-plum-plate  ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Surat Keluar</div>
                    <div class="widget-subheading">Total Surat Keluar</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-strong-bliss   ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Pengajuan Surat</div>
                    <div class="widget-subheading">Total Pengajuan Surat</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i> Profile Penduduk
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-eg-55">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                        </div>
                        <div class="col-md-12 col-lg-8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
