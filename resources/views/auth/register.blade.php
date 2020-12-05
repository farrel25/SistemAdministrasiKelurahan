@extends('layouts.app', ['title' => 'Kelurahan - Register'])

@section('content')
<div class="container my-3">
    <div class="card register-card">
        <div class="row no-gutters">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="brand-wrapper">
                        <!-- <img src="assets/images/logo.svg" alt="logo" class="logo" /> -->
                        <h1 class="font-weight-bold">Kelurahan</h1>
                    </div>

                    <h4 class="mb-4">
                        <div class="text-secondary">Welcome,</div>
                        <small>
                            It only takes a <span class="text-success">few seconds</span> to create your account
                        </small>
                    </h4>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="nik">NIK</label>
                                </small>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                                    autofocus />
                            </div>

                            <div class="form-group col-md-6">
                                <small>
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                </small>

                                <input type="text" id="nama_lengkap" placeholder="Nama Lengkap"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <small>
                                <label for="email">{{ __('E-Mail Address') }}</label>
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
