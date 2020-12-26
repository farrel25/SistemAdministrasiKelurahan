@extends('dashboard.layouts.master', ['title' => "Edit Jenis Surat"])

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class=" fas fa-edit icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Edit Jenis Surat
                    <div class="page-title-subheading">
                        <a href="{{ route('manajemen-surat.jenis-surat') }}" style="text-decoration: none">
                            Jenis Surat
                        </a>
                        / Edit / {{ $letterType->letter_code }}
                    </div>
                </div>
            </div>
            <div class="page-title-actions d-flex">
                <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip" title="Kembali Ke Beranda" data-placement="left"
                    class="btn-shadow btn btn-dark pt-2">
                    <i class="fas fa-home"></i>
                </a>
                <div class="input-group ml-3">
                    <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend" required>
                    <a href="#" class="input-group-prepend text-decoration-none ">
                        <span class="input-group-text rounded-right" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Edit Jenis Surat</h5>
                    <hr>
                    <form action="{{ route('manajemen-surat.jenis-surat.update', $letterType->letter_code) }}" method="POST" class="">
                        @csrf
                        @method('patch')
                        <div class="form-row">
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="letter_code" class="">Kode</label>
                                    <input name="letter_code" id="letter_code" type="text" class="form-control @error('letter_code') is-invalid @enderror"
                                        value="{{ $letterType->letter_code }}" readonly>
                                    @error('letter_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="position-relative form-group">
                                    <label for="type" class="">Nama Layanan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Surat</div>
                                        </div>
                                        <input name="type" id="type" type="text" class="form-control @error('type') is-invalid @enderror"
                                            value="{{ old('type') ?? $letterType->type }}">
                                    </div>
                                    @error('type')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="#" class="">Masa Berlaku</label>
                                    <div class="form-row">
                                        <div class="col-4">
                                            <input type="number" class="form-control" value="1" min="1" max="31">
                                        </div>
                                        <div class="col-8">
                                            <select name="#" id="#" class=" form-control" value="#">
                                                <option>Pilih...</option>
                                                <option value="#"></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3 ">
                                <label for="#" class="">Sediakan di Layanan Mandiri</label>
                                <div role="group" class="btn-group nav btn-group">
                                    <a data-toggle="tab" href="#tab-eg15-0" class="btn-shadow active btn btn-secondary">Ya</a>
                                    <a data-toggle="tab" href="#tab-eg15-1" class="btn-shadow  btn btn-secondary">Tidak</a>
                                </div>
                            </div>
                            <div class="tab-content col-md-12 ">
                                <div class="tab-pane active mb-3" id="tab-eg15-0" role="tabpanel">
                                    <div class="card-header">Syarat Surat</div>
                                    <div class="table-responsive mb-3">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                                            <thead>
                                                <tr>
                                                    <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                                                    <th class=" text-center">No</th>
                                                    <th class=" text-center">Aksi</th>
                                                    <th>Nama Dokumen</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><input type="checkbox" name="ids" value="#"></td>
                                                    <td class="text-center">#</td>
                                                    <td class="text-center">
                                                        <div class="btn-group-sm btn-group">
                                                            <a href="#" class="btn btn-primary" data-toggle="tooltip" title="Edit Dokumen Persyaratan"
                                                                data-placement="bottom"><i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="#" type="submit" class="btn btn-danger" data-toggle="tooltip"
                                                                title="Hapus Dokumen Persyaratan" data-placement="bottom">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>#</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg15-1" role="tabpanel">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mt-2 btn btn-primary">Simpan</button>
                        <a href="{{ route('manajemen-surat.jenis-surat') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
