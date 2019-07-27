@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="app-name">
        <p>ハビログ</p>
    </div>
    <div class="register-link">
        <a href="#">新規登録</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-page-card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="logo d-flex align-items-center justify-content-center">
                            <img src="/img/logo.png" class="logo-img">
                        </div>
                    </div>
                    <p class="mt-4 mb-4 text-center signin-text">ハビログへサインイン</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row d-flex justify-content-center mb-0">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
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
</div>
@endsection
