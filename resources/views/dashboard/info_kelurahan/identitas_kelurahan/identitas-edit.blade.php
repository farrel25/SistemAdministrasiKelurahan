@extends('dashboard.layouts.master', ['title' => "Edit Identitas Desa"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Identitas Desa",
        'link' => route('info-desa.identitas') ,
        'page1' => "Identitas Desa",
        'page2' => "/ Edit"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('info-desa.identitas.update', $villageIdentity->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Edit Identitas Desa</h5>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Visi Misi</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="vision" class="">Visi</label>
                                        <textarea name="vision" id="vision" style='text-align:left;' rows="3"
                                            class="form-control @error('vision') is-invalid @enderror">{{ old('vision') ?? $villageIdentity->vision }}</textarea>
                                        @error('vision')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="editor" class="">Misi</label>
                                        <textarea name="mission" id="mission" rows="5"
                                            class="form-control @error('mission') is-invalid @enderror">{{ old('mission') ?? $villageIdentity->mission }}</textarea>
                                        @error('mission')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Sejarah</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="history" class="">Sejarah</label>
                                        <textarea name="history" id="history" rows="5"
                                            class="form-control @error('history') is-invalid @enderror">{{ old('history') ?? $villageIdentity->history }}</textarea>
                                        @error('history')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Desa</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="village_name" class="">Nama Desa</label>
                                        <input name="village_name" id="village_name" type="text"
                                            class="form-control @error('village_name') is-invalid @enderror"
                                            value="{{ old('village_name') ?? $villageIdentity->village_name }}">
                                        @error('village_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="village_code" class="">Kode Desa</label>
                                        <input name="village_code" id="village_code" type="text"
                                            class="form-control @error('village_code') is-invalid @enderror"
                                            value="{{ old('village_code') ?? $villageIdentity->village_code }}">
                                        @error('village_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="zip_code" class="">Kode Pos Desa</label>
                                        <input name="zip_code" id="zip_code" type="text"
                                            class="form-control @error('zip_code') is-invalid @enderror"
                                            value="{{ old('zip_code') ?? $villageIdentity->zip_code }}">
                                        @error('zip_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kepala_desa_name" class="">Kepala Desa</label>
                                        <input name="kepala_desa_name" id="kepala_desa_name" type="text"
                                            class="form-control @error('kepala_desa_name') is-invalid @enderror"
                                            value="{{ old('kepala_desa_name') ?? $villageIdentity->kepala_desa_name }}">
                                        @error('kepala_desa_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kepala_desa_nip" class="">NIP Kepala Desa</label>
                                        <input name="kepala_desa_nip" id="kepala_desa_nip" type="text"
                                            class="form-control @error('kepala_desa_nip') is-invalid @enderror"
                                            value="{{ old('kepala_desa_nip') ?? $villageIdentity->kepala_desa_nip }}">
                                        @error('kepala_desa_nip')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="office_address" class="">Alamat Kantor Desa</label>
                                <textarea name="office_address" id="office_address"
                                    class="form-control @error('office_address') is-invalid @enderror">{{ old('office_address') ?? $villageIdentity->office_address }}</textarea>
                                @error('office_address')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="village_email" class="">Email Desa</label>
                                        <input name="village_email" id="village_email" type="text"
                                            class="form-control @error('village_email') is-invalid @enderror"
                                            value="{{ old('village_email') ?? $villageIdentity->village_email }}">
                                        @error('village_email')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="phone" class="">Telepon Desa</label>
                                        <input name="phone" id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') ?? $villageIdentity->phone }}">
                                        @error('phone')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="website" class="">Website Desa</label>
                                        <input name="website" id="website" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            value="{{ old('website') ?? $villageIdentity->website }}">
                                        @error('website')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Kecamatan</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kecamatan_name" class="">Nama Kecamatan</label>
                                        <input name="kecamatan_name" id="kecamatan_name" type="text"
                                            class="form-control @error('kecamatan_name') is-invalid @enderror"
                                            value="{{ old('kecamatan_name') ?? $villageIdentity->kecamatan_name }}">
                                        @error('kecamatan_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kecamatan_code" class="">Kode Kecamatan</label>
                                        <input name="kecamatan_code" id="kecamatan_code" type="text"
                                            class="form-control @error('kecamatan_code') is-invalid @enderror"
                                            value="{{ old('kecamatan_code') ?? $villageIdentity->kecamatan_code }}">
                                        @error('kecamatan_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kepala_camat_name" class="">Nama Camat</label>
                                        <input name="kepala_camat_name" id="kepala_camat_name" type="text"
                                            class="form-control @error('kepala_camat_name') is-invalid @enderror"
                                            value="{{ old('kepala_camat_name') ?? $villageIdentity->kepala_camat_name }}">
                                        @error('kepala_camat_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kepala_camat_nip" class="">NIP Camat</label>
                                        <input name="kepala_camat_nip" id="kepala_camat_nip" type="text"
                                            class="form-control @error('kepala_camat_nip') is-invalid @enderror"
                                            value="{{ old('kepala_camat_nip') ?? $villageIdentity->kepala_camat_nip }}">
                                        @error('kepala_camat_nip')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Kabupaten</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kabupaten_name" class="">Nama Kabupaten</label>
                                        <input name="kabupaten_name" id="kabupaten_name" type="text"
                                            class="form-control @error('kabupaten_name') is-invalid @enderror"
                                            value="{{ old('kabupaten_name') ?? $villageIdentity->kabupaten_name }}">
                                        @error('kabupaten_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="kabupaten_code" class="">Kode Kabupaten</label>
                                        <input name="kabupaten_code" id="kabupaten_code" type="text"
                                            class="form-control @error('kabupaten_code') is-invalid @enderror"
                                            value="{{ old('kabupaten_code') ?? $villageIdentity->kabupaten_code }}">
                                        @error('kabupaten_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Provinsi</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="province_name" class="">Nama Provinsi</label>
                                        <input name="province_name" id="province_name" type="text"
                                            class="form-control @error('province_name') is-invalid @enderror"
                                            value="{{ old('province_name') ?? $villageIdentity->province_name }}">
                                        @error('province_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="province_code" class="">Kode Provinsi</label>
                                        <input name="province_code" id="province_code" type="text"
                                            class="form-control @error('province_code') is-invalid @enderror"
                                            value="{{ old('province_code') ?? $villageIdentity->province_code }}">
                                        @error('province_code')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Sosial Media</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="instagram" class="">Instagram</label>
                                        <input name="instagram" id="instagram" type="text"
                                            class="form-control @error('instagram') is-invalid @enderror"
                                            value="{{ old('instagram') ?? $villageIdentity->instagram }}">
                                        @error('instagram')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="facebook" class="">Facebook</label>
                                        <input name="facebook" id="facebook" type="text"
                                            class="form-control @error('facebook') is-invalid @enderror"
                                            value="{{ old('facebook') ?? $villageIdentity->facebook }}">
                                        @error('facebook')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="twitter" class="">Twitter</label>
                                        <input name="twitter" id="twitter" type="text"
                                            class="form-control @error('twitter') is-invalid @enderror"
                                            value="{{ old('twitter') ?? $villageIdentity->twitter }}">
                                        @error('twitter')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="youtube" class="">Youtube</label>
                                        <input name="youtube" id="youtube" type="text"
                                            class="form-control @error('youtube') is-invalid @enderror"
                                            value="{{ old('youtube') ?? $villageIdentity->youtube }}">
                                        @error('youtube')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="youtube" class="">Link Google Maps</label>
                                        <input name="youtube" id="youtube" type="text"
                                            class="form-control @error('youtube') is-invalid @enderror"
                                            value="{{ old('youtube') ?? $villageIdentity->youtube }}">
                                        @error('youtube')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
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
                            <div class="form-row ml-1 mb-2">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="background_pic" class="">Foto Background</label>
                                        <input name="background_pic" id="background_pic" type="file"
                                            class="form-control-file @error('background_pic') is-invalid @enderror"
                                            value="{{ old('background_pic') ?? $villageIdentity->background_pic }}">
                                        <small class="form-text text-muted">Silahkan unggah foto kantor desa</small>
                                        <small class="form-text text-muted">Ukuran Maksimal : 2MB</small>
                                        @error('background_pic')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="logo" class="">Logo Desa</label>
                                        <input name="logo" id="logo" type="file"
                                            class="form-control-file @error('logo') is-invalid @enderror"
                                            value="{{ old('logo') ?? $villageIdentity->logo }}">
                                        <small class="form-text text-muted">silahkan unggah logo desa</small>
                                        <small class="form-text text-muted">Ukuran Maksimal : 2MB</small>
                                        @error('logo')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-primary">Simpan Data</button>
                            <a href="{{ route('info-desa.identitas') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor.create (document.querySelector('#history') )
        .catch ( error => {
            console.error( error );
        });
    ClassicEditor.create (document.querySelector('#mission'))
        .catch ( error => {
        console.error( error );
        });
</script>

@endsection
