@extends('layouts.app')

@section('content')
<div>
    <div class="left">   
        <img class="image-kolna-motard" style="width: 70%;" src="{{ URL::to('/') }}/login background.png">
    </div>
    <div class="right">
        <div class="logo-kolna-motard">
            <img src="{{ URL::to('/') }}/kolna motard logo.png" alt="" width="180px" class="text-center">
        </div>
        <!-- Login-->
        <div class="login-form">           
            <h2 class="card-title font-weight-bold mb-1">Welcome to KOLNA MOTARD! 👋</h2>
            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password" class="form-label">Password</label>                           
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a> 
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required tabindex="2" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-danger btn-block" tabindex="4" type="submit" name="login">Login</button>
            </form>
            <p class="text-center mt-2">
                <span>New on our platform ? </span>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </p>               
        </div>        
    </div>
</div>
@endsection
