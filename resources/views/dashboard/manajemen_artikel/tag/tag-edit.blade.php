@extends('dashboard.layouts.master', ['title' => "Edit Tag"])

@section('content')

<?php
    $data=[
        'icon' => "fas fa-edit",
        'judul' => "Edit Tag",
        'link' => route('manajemen-artikel.artikel') ,
        'page1' => "Tag",
        'page2' => "/ Edit",
        'page3' => "/  Judul Tag"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Edit Tag</h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-12 ">
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="#" class="">Tag</label>
                                <input name="#" id="#" type="text" class="form-control">
                            </div>
                        </form>
                        <div id="editor" class="mb-3">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-9">
                        <form class="">
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
