@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="panel-heading text-right" style="display:flex; justify-content:flex-end;padding:5px 25px;">
                    <a href="/" style="color:green; text-align:right; text-decoration:none;padding:10px;"> Home</a>
                </div>
                <div style="display: flex; width:100%; justify-content:center; align-items:center; margin:-20px 0 10px 0;">
                    <img src="/img/logo.png" alt="logo" style="width:130px; height:130px;">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-1">
                            <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="mb-1">
                            <label for="password" class="col-form-label ">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row">
                            <div>

                                {{-- <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label> --}}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div style="display: flex; justify-content:flex-end;">
                                <button type="submit" class="btn btn-primary" style="color:white; background-color:green;">
                                    {{ __('Login') }}
                                </button>                                
                            </div>
                        </div>
                        <div class="panel panel-footer text-center" style="margin-top:10px;">
                            <small>Don't have an account : <a href="/register"> Register </a> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
