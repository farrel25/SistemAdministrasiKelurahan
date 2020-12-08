@extends('visitors.layouts.master', ['title' => 'Layanan - Pengajuan Surat'])

@section('content')

<section id="page-title-pelayanan">
    <div class="container mb-5">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-12 text-center">
                <h2>Pengajuan Surat</h2>
                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="breadcrumb justify-content-center" style="background: none">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Surat</li>
                        </ol>
                    </small>
                </nav>
            </div>
        </div>

        <div class="row justify-content-center form-box" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-10 mt-4">

                @if (session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
                @endif

                <form action="{{ route('pengajuan-surat.store') }}" method="post">
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" placeholder="16 digit" class="form-control">
                            @error('nik')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="full_name">Nama Lengkap</label>
                            <input type="text" name="full_name" class="form-control" id="full_name">
                            @error('full_name')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                            @error('email')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                            <label for="letter_type">Jenis Surat</label>
                            <select name="letter_type_id" id="letter_type" class="form-control">
                                <option selected>Pilih...</option>
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
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
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
