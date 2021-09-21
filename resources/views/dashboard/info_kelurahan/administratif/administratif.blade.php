@extends('dashboard.layouts.master', ['title' => "Administratif"])
@section('content')
<?php
    $data=[
        'icon' => "pe-7s-copy-file",
        'judul' => "Administratif",
        'link' => route('info-desa.data-administratif') ,
        'page1' => "Administratif  "
    ]
?>
@include('dashboard.layouts.page-title',$data)
<div class="row">
    <div class="col-md-12">
        <div class="main-card card">
            <div class="card-header">Administratif
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-file-download "> </i> Unduh Data Excel</a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white m-1 mb-2 mt-2 font-weight-normal btn-responsive"
                        href="tambah-surat-masuk">+ Tambah Penjual</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-justified">
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">Tab 1</a>
                        </li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Tab 2</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Tab 3</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. </p>
                        </div>
                        <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
                            <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged. </p>
                        </div>
                        <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
