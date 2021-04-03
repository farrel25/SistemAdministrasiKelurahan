@extends('dashboard.layouts.master', ['title' => "Pengajuan Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Pengajuan Surat",
        'link' => route('layanan.pengajuan-surat') ,
        'page1' => "Pengajuan Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Ubah Data Pengajuan Surat</h5>
                <hr>
                <form action="{{ route('layanan.pengajuan-surat.update', $letterSubmission->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="nik" class="">NIK</label>
                                <input name="nik" id="nik" type="text" class="form-control" value="{{ $letterSubmission->user->nik }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="full_name" class="">Nama</label>
                                <input name="full_name" id="full_name" type="text" class="form-control" value="{{ $letterSubmission->user->full_name }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="email" class="">Email</label>
                                <input name="email" id="email" type="email" class="form-control" value="{{ $letterSubmission->user->email }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="letter_type_id" class="">Jenis Surat</label>
                                <select name="letter_type_id" id="letter_type_id" class="mb-2 form-control @error('letter_type_id') is-invalid @enderror">
                                    <option></option>
                                    @forelse ($letterTypes as $type)
                                    <option value="{{ $type->id }}" {{ $letterSubmission->letter_type_id == $type->id ? 'selected' : '' }}>
                                        {{ $type->type }}
                                    </option>
                                    @empty
                                    <option value="">Menu belum tersedia</option>
                                    @endforelse
                                </select>
                                @error('letter_type_id')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="keperluan" class="">Keperluan</label>
                        <textarea name="keperluan" id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror">{{ $letterSubmission->keperluan }}</textarea>
                        @error('keperluan')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <button class="mt-2 btn btn-primary">Kirim Perubahan</button>
                    <a href="{{ route('layanan.pengajuan-surat') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
