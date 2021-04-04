@extends('layouts.app', ['title' => 'Kelurahan - Login'])

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container my-4">
    <div class="card login-card">
        <div class="row no-gutters">

            <div class="col-md-5">
                <img src="{{ asset('auth') }}/images/login_2.jpg" alt="login" class="login-card-img" />
            </div>

            <div class="col-md-7">
                <div class="card-body">
                    <div class="brand-wrapper">
                        <!-- <img src="assets/images/logo.svg" alt="logo" class="logo" /> -->
                        <h1 class="font-weight-bold">Desa</h1>
                    </div>

                    @if (session()->has('success'))
                    <div class="alert alert-success text-center col-md-8">
                        {{ session()->get('success') }}
                        {{-- Akun anda berhasil dibuat, silahkan login --}}
                    </div>
                    @elseIf(session()->has('fail'))
                    <div class="alert alert-danger text-center col-md-8">
                        {{ session()->get('fail') }}
                        {{-- Akun anda berhasil dibuat, silahkan login --}}
                    </div>
                    @endif

                    <p class="login-card-description">Sign into your account</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="Email address" />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="***********" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-block login-btn mb-4">
                            {{ __('Login') }}
                        </button>

                    </form>

                    @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif

                    <p class="login-card-footer-text">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-reset">Register here</a>
                    </p>

                    <nav class="login-card-footer-nav">
                        <a href="{{ route('visitors.beranda.index') }}">Back to Home page</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
