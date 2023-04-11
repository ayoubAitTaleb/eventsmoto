@extends('layouts.app')

@section('content')
<div>
    <div class="left">   
        <img class="image-kolna-motard" alt="events moto" src="{{ URL::to('/') }}/login background.png">
    </div>
    <div class="right">
        <div class="logo-kolna-motard">
            <img src="{{ URL::to('/') }}/kolna motard logo.png" alt="events moto" width="180px" class="text-center">
        </div>
        <div class="login-form">
            <h2 class="card-title font-weight-bold mb-3 text-center">Registration Rider</h2>
            <form action="{{ route('riders.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="form-label">First Name</label>
                <input required="required" name="first_name" type="text" maxlength="50" class="form-control @error('first_name') is-invalid @enderror" id="first_name" value="{{ old('first_name') }}">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Family Name</label>
                <input required="required" name="family_name" type="text" maxlength="50" class="form-control @error('family_name') is-invalid @enderror" id="last_name" value="{{ old('family_name') }}">
                    @error('family_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Email</label>
                <input required="required" name="email" type="email" maxlength="50" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Password</label>
                <input required="required" autocomplete="new-password" name="password" type="password" minlength="6" maxlength="50" class="form-control @error('password') is-invalid @enderror" id="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Phone</label>
                <x-indicatifs></x-indicatifs>
                <input required="required" type="number" name="phone" maxlength="11" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                                       
                <label class="form-label" name="country" placeholder="">Country</label>
                <x-countries></x-countries>
                <label class="form-label">City</label>
                <input required="required" name="city" type="text" maxlength="50" class="form-control @error('city') is-invalid @enderror" id="city" value="{{ old('city') }}">
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Address</label>
                <input required="required" name="address" type="text" maxlength="50" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <label class="form-label">Moto Categories</label>
                <x-moto-categories></x-moto-categories>
                <label class="form-label">Moto Brand</label>
                <x-moto-brand></x-moto-brand>                  
                <label class="form-label" placeholder="">Profile Photo: </label><br>
                <input required="required" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" type="file" multiple accept="image/*" >
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                     
                <br>
                <button class="mb-5 btn btn-danger btn-block" type="submit" tabindex="4">Envoyer</button>
            </form>             
        </div>        
    </div>
</div>
@endsection
