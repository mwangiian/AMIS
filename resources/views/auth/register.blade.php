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

                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-1">
                            <label for="id_number" class=" col-form-label ">{{ __('National ID Number') }}</label>
                            <div>
                                <input  id="id_number" type="number" class="form-control @error('number') is-invalid @enderror w-100" name="id_number" value="{{ old('number') }}" required  autofocus>
                            </div>
                        </div>
                        

                        <div class="mb-1 form-group">
                            <label for="name" class="col-md-4 col-form-label ">{{ __('Names') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="mb-1 ">
                            <label for="surname" class="col-md-4 col-form-label ">{{ __('Surname') }}</label>

                            <div>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                            </div>
                        </div>

                        <div class="mb-1 ">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="mb-1 ">
                            <label for="institution" class="col-md-4 col-form-label ">{{ __('Institution') }}</label>

                            <div>
                                <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') }}" required autocomplete="institution" autofocus>
                            </div>
                        </div>

                        <div class="mb-1 ">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div style="display: flex; justify-content:flex-end;">
                                <button type="submit" class="btn btn-primary" style="color:white; background-color:green;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="panel panel-footer text-center">
                            <small>Have an account : <a href="/login"> Sign In </a> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
