@extends('dashboard.layouts.master', ['title' => "Edit Komentar"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Komentar",
        'link' => route('manajemen-artikel.komentar') ,
        'page1' => "Komentar",
        'page2' => "/ Edit",
        'page3' => "/  Pengirim"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Edit Data Komentar</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="form-row">
                    <div class=" col-lg-6 ">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Nama Pengirim</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class=" col-lg-6 ">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Email</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Isi Komentar</label>
                                <textarea name="#" id="#" type="text" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class=" col-lg-12 ">
                        <form class="ml-1">
                            <button class="mt-2 btn btn-primary">Edit Data</button>
                            <button class="mt-2 btn btn-outline-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
