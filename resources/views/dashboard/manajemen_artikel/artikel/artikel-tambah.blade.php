@extends('dashboard.layouts.master', ['title' => "Artikel Tambah"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Artikel",
        'link' => route('manajemen-artikel.artikel') ,
        'page1' => "Artikel",
        'page2' => "/ Tambah",
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Buat Artikel Baru</h5>
                <div tabindex="-1" class="dropdown-divider"></div>

                <form action="{{ route('manajemen-artikel.artikel.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class=" col-lg-3 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Artikel</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="title" class="">Judul Artikel</label>
                                        <input name="title" id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}">
                                        @error('title')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="category_id" class="">Kategori</label>
                                        <select name="category_id" id="category_id"
                                            class="mb-2 form-control @error('category_id') is-invalid @enderror">
                                            <option value="{{ old('category_id') }}" disabled selected>
                                                Pilih salah satu
                                            </option>

                                            @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @empty
                                            <option>Data kategori belum ada</option>
                                            @endforelse

                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor">Isi</label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" name="body"
                                            id="editor" rows="5">
                                                                            {{ old('body') }}
                                                                        </textarea>
                                        @error('body')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider mt-4"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Tag</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="position-relative form-group">
                                <label for="tags" class="">Tag</label>
                                <select name="tags[]" id="tags"
                                    class="mb-2 form-control select2 @error('tags') is-invalid @enderror" multiple>
                                    {{-- <option disabled selected>Pilih tag yang sesuai</option> --}}
                                    @forelse ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name_tag }}</option>
                                    @empty
                                    <option>Data tag belum ada</option>
                                    @endforelse
                                </select>
                                {{-- <div class="mt-2 ">
                                    <label for="#" class=" bg-light pl-2 pr-2 p-1  border rounded">Tag
                                        <a href="#" class="hover-red"><i class="fas fa-times-circle"></i></a>
                                    </label>
                                </div> --}}
                                @error('tags')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Gambar</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="thumbnail" class="">Upload Gambar</label>
                                    <input name="thumbnail" id="thumbnail" type="file"
                                        class="form-control-file @error('thumbnail') is-invalid @enderror"
                                        value="{{ old('thumbnail') }}">
                                    <small class="form-text text-muted">
                                        Wajib mengisi Gambar sesuai dengan aslinya
                                    </small>
                                    <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                    @error('thumbnail')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Lampiran</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row ml-1 mb-2 mt-3">
                                <div class="position-relative form-group">
                                    <label for="document" class="">Upload Lampiran</label>
                                    <input name="document" id="document" type="file"
                                        class="form-control-file @error('document') is-invalid @enderror"
                                        value="{{ old('document') }}">
                                    <small class="form-text text-muted">
                                        Untuk artikel yang membutuhkan lampiran
                                    </small>
                                    <small class="form-text text-muted">Ukuran Maksimal : 5MB</small>
                                    @error('document')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Buat Artikel</button>
                            <a href="{{ route('manajemen-artikel.artikel') }}" class="mt-2 btn btn-outline-danger">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create (document.querySelector('#editor'))
        .catch ( error => {
            console.error( error );
        });

    // CKEDITOR.replace('body');
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih tag yang sesuai"
        });
    });
</script>


@endsection
