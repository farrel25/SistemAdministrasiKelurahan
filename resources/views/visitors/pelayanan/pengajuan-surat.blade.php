@extends('visitors.layouts.master', ['title' => 'Layanan - Pengajuan Surat'])

@section('content')
{{-- Start Breadcumb Section --}}
@include('visitors.layouts.breadcumb', ['judul' => "Administratif"], ['page1' => "/ Profil Desa", 'page2' => "/
Administratif"])
{{-- Start end Section --}}

<section id="page-title-pelayanan">
    <div class="container mb-5 pt-3">
        <div class="row justify-content-center form-box" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-10 ">

                @if (session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
                @endif

                <form action="{{ route('pengajuan-surat.store') }}" method="post" novalidate>
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="nik">NIK<span class="text-danger">*</span></label>
                            <input type="text" name="nik" id="nik" placeholder="16 digit" class="form-control"
                                value="{{ old('nik') }}">
                            @error('nik')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="full_name">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" name="full_name" class="form-control" id="full_name"
                                value="{{ old('full_name') }}">
                            @error('full_name')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                            @error('email')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                            <label for="letter_type">Jenis Surat<span class="text-danger">*</span></label>

                            <select name="letter_type_id" id="letter_type" class="form-control"
                                value="{{ old('letter_type_id') }}">
                                <option>Pilih...</option>

                                @foreach ($letterTypes as $letterType)
                                <option value="{{ $letterType->id }}">
                                    Surat {{$letterType->type}}
                                </option>
                                @endforeach
                            </select>

                            @error('letter_type')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="keperluan">Keperluan<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="keperluan" id="keperluan" rows="4">
                                {{ old('keperluan') }}
                            </textarea>
                            @error('keperluan')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                    </div>

                    <div class="custom-control custom-checkbox mt-2">

                        <input type="checkbox" class="custom-control-input" id="checkSetuju">
                        <label class="custom-control-label" for="checkSetuju">
                            Anda telah menyetujui segala <a href="">persyaratan dan ketentuan</a> yang berlaku
                        </label>

                    </div>

                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn-submit">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
@endsection
