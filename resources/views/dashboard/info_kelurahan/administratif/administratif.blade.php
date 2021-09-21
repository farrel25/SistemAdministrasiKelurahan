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
        <div class="main-card mb-3 card">
            <div class="card-header">Administratif
                <div class="btn-actions-pane-right ">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
