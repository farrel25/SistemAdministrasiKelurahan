@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Penduduk",
        'link' => route('penduduk') ,
        'page1' => "Penduduk",
        'page2' => "/ Edit",
        'page3' => "/  $villager->full_name "
    ]
?>
@include('dashboard.layouts.page-title',$data)


{{-- <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Tambah Data Penduduk</h5>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Data Diri</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">
                            <form class="">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">NIK</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Nama Lengkap</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Tempat Lahir</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Tanggal Lahir</label>
                                            <input name="#" id="#" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="#" class=" ">Jenis Kelamin</label>
                                        <div class="position-relative form-check mt-2 mb-3">
                                            <label class="form-check-label">
                                                <input name="radio1" type="radio" class="form-check-input"> Laki - Laki
                                            </label>
                                            <label class="form-check-label ml-5">
                                                <input name="radio1" type="radio" class="form-check-input"> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Agama</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Pendidikan</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Pekerjaan</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Status Kawin</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Status Tinggal</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Status Hidup</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Kewarganegaraan</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Golongan Darah</label>
                                            <select class="mb-2 form-control ">
                                                <option>Pilihan 1</option>
                                                <option>Pilihan 2</option>
                                                <option>Pilihan 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="#" class="">Address</label>
                                    <textarea name="#" id="#" class="form-control"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Email</label>
                                            <input name="#" id="#" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">No. Telepon</label>
                                            <input name="#" id="#" type="tel" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Data Orang Tua</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <form class="">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">NIK Ayah</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Nama Ayah</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">NIK Ibu</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Nama Ibu</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Riwayat Penyakit</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <form class="">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Penyakit Cacat</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Penyakit Menahun</label>
                                            <input name="#" id="#" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-3">
                            <h4 class="card-title">Foto</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <form class="">
                                <div class="form-row ml-1 mb-2 mt-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class="">Upload Foto</label>
                                        <input name="file" id="exampleFile" type="file" class="form-control-file">
                                        <small class="form-text text-muted">Wajib mengisi foto sesuai dengan aslinya</small>
                                    </div>
                                </div>
                                <button class="mt-2 btn btn-primary">Tambah Data</button>
                                <button class="mt-2 btn btn-outline-danger">Cancel</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div> --}}

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">Perbarui Data Penduduk</h5>
                <div tabindex="-1" class="dropdown-divider"></div>

                <form action="{{ route('penduduk-update', $villager->nik) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class=" col-lg-3 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Data Diri</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9 ">

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="nik" class="">NIK</label>
                                        <input name="nik" id="nik" type="text" placeholder="16 digit"
                                            class="form-control @error('nik') is-invalid @enderror"
                                            value="{{ $villager->nik }}" readonly>
                                        @error('nik')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        {{-- <small>
                                                    <font class="mb-3" style="color: red; font-style: italic">{{ $message }}
                                        </font>
                                        </small> --}}
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="full_name" class="">Nama Lengkap</label>
                                        <input name="full_name" id="full_name" type="text"
                                            class="form-control @error('full_name') is-invalid @enderror"
                                            value="{{ old('full_name') ?? $villager->full_name }}">

                                        @error('full_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="birth_place" class="">Tempat Lahir</label>
                                        <input name="birth_place" id="birth_place" type="text"
                                            class="form-control @error('birth_place') is-invalid @enderror"
                                            value="{{ old('birth_place') ?? $villager->birth_place }}">
                                        @error('birth_place')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="birth_date" class="">Tanggal Lahir</label>
                                        <input name="birth_date" id="birth_date" type="date"
                                            class="form-control @error('birth_date') is-invalid @enderror"
                                            value="{{ old('birth_date') ?? $villager->birth_date }}">
                                        @error('birth_date')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="sex_id">Jenis Kelamin</label>
                                    <div class="position-relative form-check mt-2 mb-3">
                                        @foreach ($sexes as $sex)
                                        <label class="form-check-label{{ $sex->id == 2 ? ' ml-5' : '' }}">
                                            <input value="{{ old('sex_id') ?? $villager->villagerSex->id }}"
                                                name="sex_id" type="radio" class="form-check-input"> {{ $sex->sex }}
                                        </label>
                                        @endforeach
                                    </div>
                                    @error('sex_id')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="religion_id" class="">Agama</label>
                                        <select name="religion_id" id="religion_id"
                                            class="mb-2 form-control @error('religion_id') is-invalid @enderror"
                                            value="{{ old('religion_id') ?? $villager->villagerReligion->id }}">
                                            {{-- <option value="{{ old('religion_id') ?? '' }}">
                                            {{ old('religion_id') ?? 'Pilih...' }}
                                            </option> --}}
                                            <option value="{{ old('religion_id') ?? $villager->villagerReligion->id }}">
                                                {{ $religions[old('religion_id') - 1]->religion ?? $villager->villagerReligion->religion }}
                                            </option>
                                            @foreach ($religions as $religion)
                                            <option value="{{ $religion->id }}">{{ $religion->religion }}</option>
                                            @endforeach
                                        </select>
                                        @error('religion_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="education_id" class="">Pendidikan</label>
                                        {{-- <input name="education_id" id="education_id" type="text"
                                                class="form-control @error('education_id') is-invalid @enderror" value="{{ old('education_id') }}">
                                        --}}
                                        <select name="education_id" id="education_id"
                                            class="mb-2 form-control @error('education_id') is-invalid @enderror"
                                            value="{{ old('education_id') ?? $villager->villagerEducation->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('education_id') ?? $villager->villagerEducation->id }}">
                                                {{ $educations[old('education_id') - 1]->education ?? $villager->villagerEducation->education }}
                                            </option>
                                            @foreach ($educations as $education)
                                            <option value="{{ $education->id }}">{{ $education->education }}</option>
                                            @endforeach
                                        </select>
                                        @error('education_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="profession_id" class="">Pekerjaan</label>
                                        <select name="profession_id" id="profession_id"
                                            class="mb-2 form-control @error('profession_id') is-invalid @enderror"
                                            value="{{ old('profession_id') ?? $villager->villagerProfession->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('profession_id') ?? $villager->villagerProfession->id }}">
                                                {{ $professions[old('profession_id') - 1]->profession ?? $villager->villagerProfession->profession }}
                                            </option>
                                            @foreach ($professions as $profession)
                                            <option value="{{ $profession->id }}">{{ $profession->profession }}</option>
                                            @endforeach
                                        </select>
                                        @error('profession_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="marital_status_id" class="">Status Kawin</label>
                                        <select name="marital_status_id" id="marital_status_id"
                                            class="mb-2 form-control @error('marital_status_id') is-invalid @enderror"
                                            value="{{ old('marital_status_id') ?? $villager->villagerMaritalStatus->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('marital_status_id') ?? $villager->villagerMaritalStatus->id }}">
                                                {{ $maritalStatuses[old('marital_status_id') - 1]->marital_status ?? $villager->villagerMaritalStatus->marital_status }}
                                            </option>
                                            @foreach ($maritalStatuses as $maritalStatus)
                                            <option value="{{ $maritalStatus->id }}">
                                                {{ $maritalStatus->marital_status }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('marital_status_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="stay_status_id" class="">Status Tinggal</label>
                                        <select name="stay_status_id" id="stay_status_id"
                                            class="mb-2 form-control @error('stay_status_id') is-invalid @enderror"
                                            value="{{ old('stay_status_id') ?? $villager->villagerStayStatus->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('stay_status_id') ?? $villager->villagerStayStatus->id }}">
                                                {{ $stayStatuses[old('stay_status_id') - 1]->stay_status ?? $villager->villagerStayStatus->stay_status }}
                                            </option>
                                            @foreach ($stayStatuses as $stayStatus)
                                            <option value="{{ $stayStatus->id }}">
                                                {{ $stayStatus->stay_status }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('stay_status_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="life_status_id" class="">Status Hidup</label>
                                        <select name="life_status_id" id="life_status_id"
                                            class="mb-2 form-control @error('life_status_id') is-invalid @enderror"
                                            value="{{ old('life_status_id') ?? $villager->villagerLifeStatus->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('life_status_id') ?? $villager->villagerLifeStatus->id }}">
                                                {{ $lifeStatuses[old('life_status_id') - 1]->life_status ?? $villager->villagerLifeStatus->life_status }}
                                            </option>
                                            @foreach ($lifeStatuses as $lifeStatus)
                                            <option value="{{ $lifeStatus->id }}">
                                                {{ $lifeStatus->life_status }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('life_status_id')
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
                                        <label for="nationality_id" class="">Kewarganegaraan</label>
                                        <select name="nationality_id" id="nationality_id"
                                            class="mb-2 form-control @error('nationality_id') is-invalid @enderror"
                                            value="{{ old('nationality_id') ?? $villager->villagerNationality->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('nationality_id') ?? $villager->villagerNationality->id }}">
                                                {{ $nationalityStatuses[old('nationality_id') - 1]->kewarganegaraan ?? $villager->villagerNationality->kewarganegaraan }}
                                            </option>
                                            @foreach ($nationalityStatuses as $nationalityStatus)
                                            <option value="{{ $nationalityStatus->id }}">
                                                {{ $nationalityStatus->kewarganegaraan }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="blood_type_id" class="">Golongan Darah</label>
                                        <select name="blood_type_id" id="blood_type_id"
                                            class="mb-2 form-control @error('blood_type_id') is-invalid @enderror"
                                            value="{{ old('blood_type_id') ?? $villager->villagerBloodType->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('blood_type_id') ?? $villager->villagerBloodType->id }}">
                                                {{ $bloodTypes[old('blood_type_id') - 1]->blood_type ?? $villager->villagerBloodType->blood_type }}
                                            </option>
                                            @foreach ($bloodTypes as $bloodType)
                                            <option value="{{ $bloodType->id }}">
                                                {{ $bloodType->blood_type }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('blood_type_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="address" class="">Address</label>
                                <textarea name="address" id="address"
                                    class="form-control @error('address') is-invalid @enderror">
                                    {{ old('address') ?? $villager->address }}
                                </textarea>
                                @error('address')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <!--
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="#" class="">Email</label>
                                            <input name="#" id="#" type="email"
                                                class="form-control @error('full_name') is-invalid @enderror"
                                                value="{{ old('full_name') }}">
                                            @error('full_name')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                -->
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="phone_number" class="">No. Telepon</label>
                                        <input name="phone_number" id="phone_number" type="tel"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            value="{{ old('phone_number') ?? $villager->phone_number }}">
                                        @error('phone_number')
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
                            <h4 class="card-title">Data Orang Tua</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="fathe_nik" class="">NIK Ayah</label>
                                        <input name="father_nik" id="father_nik" type="text"
                                            class="form-control @error('father_nik') is-invalid @enderror"
                                            value="{{ old('father_nik') ?? $villager->father_nik }}">
                                        @error('father_nik')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="father_name" class="">Nama Ayah</label>
                                        <input name="father_name" id="father_name" type="text"
                                            class="form-control @error('father_name') is-invalid @enderror"
                                            value="{{ old('father_name') ?? $villager->father_name }}">
                                        @error('father_name')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="mother_nik" class="">NIK Ibu</label>
                                        <input name="mother_nik" id="mother_nik" type="text"
                                            class="form-control @error('mother_nik') is-invalid @enderror"
                                            value="{{ old('mother_nik') ?? $villager->mother_nik }}">
                                        @error('mother_nik')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative form-group">
                                        <label for="mother_name" class="">Nama Ibu</label>
                                        <input name="mother_name" id="mother_name" type="text"
                                            class="form-control @error('mother_name') is-invalid @enderror"
                                            value="{{ old('mother_name') ?? $villager->mother_name }}">
                                        @error('mother_name')
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
                            <h4 class="card-title">Riwayat Penyakit</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="disability_id" class="">Penyakit Cacat</label>
                                        <select name="disability_id" id="disability_id"
                                            class="mb-2 form-control @error('disability_id') is-invalid @enderror"
                                            value="{{ old('disability_id') ?? $villager->villagerDisability->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('disability_id') ?? $villager->villagerDisability->id }}">
                                                {{ $disabilities[old('disability_id') - 1]->disability ?? $villager->villagerDisability->disability }}
                                            </option>
                                            @foreach ($disabilities as $disability)
                                            <option value="{{ $disability->id }}">
                                                {{ $disability->disability }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('disability_id')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="chronic_disease_id" class="">Penyakit Menahun</label>
                                        <select name="chronic_disease_id" id="chronic_disease_id"
                                            class="mb-2 form-control @error('chronic_disease_id') is-invalid @enderror"
                                            value="{{ old('chronic_disease_id') ?? $villager->villagerChronicDisease->id }}">
                                            {{-- <option>Pilih...</option> --}}
                                            <option
                                                value="{{ old('chronic_disease_id') ?? $villager->villagerChronicDisease->id }}">
                                                {{ $chronicDiseases[old('chronic_disease_id') - 1]->disease ?? $villager->villagerChronicDisease->disease }}
                                            </option>
                                            @foreach ($chronicDiseases as $chronicDisease)
                                            <option value="{{ $chronicDisease->id }}">
                                                {{ $chronicDisease->disease }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('chronic_disease_id')
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
                            <h4 class="card-title">Foto</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-9">
                            <div class="form-row ml-1 mb-2">
                                <div class="position-relative form-group">
                                    <label for="photo" class="">Upload Foto</label>
                                    <input name="photo" id="photo" type="file"
                                        class="form-control-file @error('photo') is-invalid @enderror"
                                        value="{{ $villager->photo }}">
                                    <small class="form-text text-muted">Wajib mengisi foto sesuai dengan aslinya</small>
                                    <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                                    @error('photo')
                                    <span class="invalid-feedback mt-2" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="mt-2 btn btn-primary">Simpan Data</button>
                            <a href="{{ route('penduduk') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
