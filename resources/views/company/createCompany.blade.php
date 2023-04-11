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
            <h2 class="card-title font-weight-bold mb-1 text-center">Registration Company</h2>
            <form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="form-label">Comercial Name</label>
                <input required="required" name="commercial_name" type="text" maxlength="50" class="form-control @error('commercial_name') is-invalid @enderror" id="commercial_name" value="{{ old('commercial_name') }}">
                    @error('commercial_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Company Name</label>
                <input required="required" name="company_name" type="text" maxlength="50" class="form-control @error('company_name') is-invalid @enderror" id="company_name" value="{{ old('company_name') }}">
                    @error('company_name')
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
                <input required="required" autocomplete="new-password" name="password" type="password" minlength="6" maxlength="50" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}">
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
                <label class="form-label">Patente</label>
                <input required="required" type="number" name="patente" maxlength="11" class="form-control @error('patente') is-invalid @enderror" id="patente" value="{{ old('patente') }}">
                    @error('patente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Register Commerce</label>
                <input required="required" type="number" name="registre_commerce" maxlength="11" class="form-control @error('register_commerce') is-invalid @enderror" id="register_commerce" value="{{ old('registre_commerce') }}">
                    @error('register_commerce')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                <label class="form-label">Identifiant Fiscal</label>
                <input required="required" type="number" name="identifiant_fiscal" maxlength="11" class="form-control @error('identifiant_fiscal') is-invalid @enderror" id="identifiant_fiscal" value="{{ old('identifiant_fiscal') }}">
                    @error('identifiant_fiscal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">ICE</label>
                <input required="required" type="number" name="ice" maxlength="11" class="form-control @error('ice') is-invalid @enderror" id="ice" value="{{ old('ice') }}">
                    @error('ice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">CNSS</label>
                <input required="required" type="number" name="cnss" maxlength="11" class="form-control @error('cnss') is-invalid @enderror" id="cnss" value="{{ old('cnss') }}">
                    @error('cnss')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror     
                <label class="form-label" placeholder="">Description </label>
                <textarea name="description" cols="30" rows="10" class="form-control" maxlength="500" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Logo</label><br>
                <input required="required" class="form-control @error('logo') is-invalid @enderror" name="logo" type="file" multiple accept="image/*,video/*">
                    @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label" placeholder="">Status (PDF, DOC, ETC..)</label>
                <input required="required" class="form-control" name="status" type="file" accept=".pdf,image/*">
                    @error('admin_name')
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