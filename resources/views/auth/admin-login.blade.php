@extends('layouts.app')

@section('title')
<title>Shopping | Admin SIgn-in</title>
@endsection

@section('head')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">
<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="/img/sign-in.svg" alt=""> {{ __('SIGN IN | ADMIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.signin.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="em_id" class="col-md-4 col-form-label text-md-right"><img src="/img/EMAILICON.png" class="emailicon"></label>

                            <div class="col-md-6">
                                <input id="em_id" type="text" placeholder="EMPLOYEE NUMBER" class="form-control @error('em_id') is-invalid @enderror" name="em_id" value="{{ old('em_id') }}" required autocomplete="em_id" autofocus>

                                @error('EmployeeNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><img src="/img/PASSWICON.png" class="emailicon"></label>

                            <div class="col-md-6">

                                <input id="password" type="password" placeholder="PASSWORD" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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