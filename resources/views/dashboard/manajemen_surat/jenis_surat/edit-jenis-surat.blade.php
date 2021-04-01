@extends('dashboard.layouts.master', ['title' => "Edit Jenis Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Jenis Surat",
        'link' => route('manajemen-surat.jenis-surat') ,
        'page1' => "Jenis Surat",
        'page2' => "/ Edit",
        'page3' => "/ $letterType->type "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit Jenis Surat</h5>
                <hr>
                <form action="{{ route('manajemen-surat.jenis-surat.update', $letterType->letter_code) }}" method="POST"
                    class="">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="letter_code" class="">Kode</label>
                                <input name="letter_code" id="letter_code" type="text"
                                    class="form-control @error('letter_code') is-invalid @enderror"
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
                                    <input name="type" id="type" type="text"
                                        class="form-control @error('type') is-invalid @enderror"
                                        value="{{ old('type') ?? $letterType->type }}">
                                    @error('type')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="#" class="">Masa Berlaku</label>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input name="validity_period" id="validity_period" type="number"
                                            class="form-control"
                                            value="{{ old('validity_period') ?? $letterType->validity_period }}" min="1"
                                            max="31">
                                        @error('validity_period')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-8">
                                        <select name="validity_period_unit" id="validity_period_unit"
                                            class="form-control @error('validity_period_unit') is-invalid @enderror"
                                            value="#">
                                            <option
                                                value={{ old('validity_period_unit') ?? $letterType->validity_period_unit }}>
                                                {{ old('validity_period_unit') ?? $letterType->validity_period_unit }}
                                            </option>
                                            <option value="D">Hari</option>
                                            <option value="W">Minggu</option>
                                            <option value="M">Bulan</option>
                                            <option value="Y">Tahun</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3 mb-3 ">
                            <label for="#" class="">Sediakan di Layanan Mandiri</label>
                            <div role="group" class="btn-group nav btn-group">
                                <a data-toggle="tab" href="#tab-eg15-0"
                                    class="btn-shadow active btn btn-secondary">Ya</a>
                                <a data-toggle="tab" href="#tab-eg15-1" class="btn-shadow  btn btn-secondary">Tidak</a>
                            </div>
                        </div> --}}
                        <div class="tab-content col-md-12 ">
                            <div class="tab-pane active mb-3" id="tab-eg15-0" role="tabpanel">
                                <div class="card-header">Syarat Surat</div>
                                <div class="table-responsive mb-3">
                                    <table
                                        class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                                        <thead>
                                            <tr>
                                                <th class=" text-center"><input type="checkbox"
                                                        onchange="checkAll(this)" name="chk[]"></th>
                                                <th class=" text-center">No</th>
                                                <th>Nama Dokumen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($letterDocuments as $no => $document)
                                            <tr>
                                                <td class="text-center">
                                                    <input name="letter_document_id[]" value="{{ $document->id }}"
                                                        type="checkbox"
                                                        {{ in_array($document->id,$requirementCheck) ? 'checked' : ''}}>
                                                </td>
                                                <td class="text-center">{{ ++$no }}</td>
                                                <td>{{ $document->document }}</td>
                                            </tr>
                                            @endforeach
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
