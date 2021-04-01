@extends('dashboard.layouts.master', ['title' => "Edit Kategori"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Kategori",
        'link' => route('manajemen-artikel.kategori') ,
        'page1' => "Kategori",
        'page2' => "/ Edit",
        'page3' => "/ ". $articleCategory->category
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Edit Kategori</h5>
                <div tabindex="-1" class="dropdown-divider"></div>

                <form action="{{ route('manajemen-artikel.kategori.update',$articleCategory->id) }}" method="POST"
                    class="">
                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class=" col-lg-12 ">
                            <div class="position-relative form-group">
                                <label for="category" class="">Judul Kategori</label>
                                <input name="category" id="category" type="text"
                                    class="form-control @error('category') is-invalid @enderror"
                                    value="{{ old('category') ?? $articleCategory->category }}">
                                @error('category')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                            <div id="editor" class="mb-3">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-lg-9">
                            <button type="submit" class="mt-2 btn btn-primary">Simpan</button>
                            <a href="{{ route('manajemen-artikel.kategori') }}"
                                class="mt-2 btn btn-outline-danger">Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
