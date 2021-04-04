@extends('layouts.app', ['title' => 'Kelurahan - Register'])

@section('content')
<div class="container my-3">
    <div class="card register-card">
        <div class="row no-gutters">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="brand-wrapper">
                        <!-- <img src="assets/images/logo.svg" alt="logo" class="logo" /> -->
                        <h1 class="font-weight-bold">Desa</h1>
                    </div>

                    @if (session()->has('fail'))
                    <div class="alert alert-danger text-center col-md-10">
                        {{ session()->get('fail') }}
                        {{-- Akun anda berhasil dibuat, silahkan login --}}
                    </div>
                    @endif

                    <h4 class="mb-4">
                        <div class="text-secondary">Welcome,</div>
                        <small>
                            It only takes a <span class="text-success">few seconds</span> to create your account
                        </small>
                    </h4>

                    <form method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="nik">NIK</label>
                                </small>

                                <input type="text" id="nik" name="nik" placeholder="NIK"
                                    class="form-control @error('nik') is-invalid @enderror" autofocus
                                    value="{{ old('nik') }}" />

                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="full_name">Nama Lengkap</label>
                                </small>

                                <input type="text" id="full_name" placeholder="Nama Lengkap sesuai KTP/KK"
                                    class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                                    value="{{ old('full_name') }}" required />

                                @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>
                                    <label for="email">{{ __('E-Mail') }}</label>
                                </small>

                                <input type="email" name="email" id="email" placeholder="Email address"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="phone">No. Hp</label>
                                </small>

                                <input type="text" id="phone" placeholder="08xxxxxxxxxx"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required />

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>
                                    <label for="password">{{ __('Password') }}</label>
                                </small>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="***********" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                </small>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="***********" required
                                    autocomplete="new-password">
                            </div>

                        </div>

                        <button type="submit" class="btn register-btn mb-4">
                            {{ __('Register') }}
                        </button>

                    </form>

                    <p class="register-card-footer-text">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-reset">Login here</a>
                    </p>

                    <nav class="register-card-footer-nav">
                        <a href="{{ route('visitors.beranda.index') }}">Back to Home page</a>
                    </nav>
                </div>
            </div>

            <div class="col-md-5">
                <img src="{{ asset('auth') }}/images/login_2.jpg" alt="login" class="register-card-img" />
            </div>

        </div>
    </div>
</div>
@endsection
