{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="">
    <div class="left">   
        <img class="image-kolna-motard" style="width: 70%;" src="{{ URL::to('/') }}/login background.png">
    </div>
    <div class="right">
        <div class="logo-kolna-motard">
            <img src="{{ URL::to('/') }}/kolna motard logo.png" alt="" width="180px">
        </div>
    <div class="div-form">
    <div class="login-form">
        <h2 class="card-title font-weight-bold mb-1 text-center">Registration</h2>
        <p class="card-text mb-2 text-center">Please select your category.</p>
        <div class="category">
            <ul class="text-center">
                <a class="category" href="{{route('clubs.create')}}"><li >Club</li></a>
                <a class="category bg-info" href="{{route('riders.create')}}"><li>Rider</li></a>
                <a class="category" href="{{route('medias.create')}}"><li>Media</li></a>
                <a class="category" href="{{route('companies.create')}}"><li>Company</li></a>
            </ul>
        </div>
        <p class="mb-5 text-center mt-2"><span>Already have an account? </span><a href="{{ route('login') }}">{{ __('Login') }}</a></span></a></p>
    </div>
</div>
@endsection