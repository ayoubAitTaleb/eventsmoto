@extends('layouts.app')

@section('content')
<div>
    <div class="left">   
        <img class="image-kolna-motard" src="{{ URL::to('/') }}/login background.png">
    </div>
    <div class="right">
        <div class="logo-kolna-motard">
            <img src="{{ URL::to('/') }}/kolna motard logo.png" alt="" width="180px" class="text-center">
        </div>
        <div class="login-form">
            <h2 class="card-title font-weight-bold mb-3 text-center">Registration Media</h2>
            <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="form-label">Admin Name</label>
                    <input required="required" name="admin_name" type="text" maxlength="50" class="form-control @error('admin_name') is-invalid @enderror" id="admin_name" value="{{ old('admin_name') }}">
                    @error('admin_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Media Name</label>
                    <input required="required" name="media_name" type="text" maxlength="50" class="form-control @error('media_name') is-invalid @enderror" value="{{ old('media_name') }}">
                    @error('media_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Email</label>
                    <input required="required" name="email" type="email" maxlength="50" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label">Password</label>
                    <input required="required" autocomplete="new-password" name="password" type="password" minlength="6" maxlength="50" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label">Phone</label>
                    <x-indicatifs></x-indicatifs>
                    <input required="required" type="number" name="phone" maxlength="11" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                                      
                <label class="form-label" name="country">Country</label>
                    <x-countries></x-countries>               
                <label class="form-label">City</label>
                    <input required="required" name="city" type="text" maxlength="50" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label">Address</label>
                    <input required="required" name="address" type="text" maxlength="50" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label">Legal Satus </label>
                    <x-legal-status></x-legal-status>
                <label class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" maxlength="500"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label">Logo</label><br>
                    <input required="required" class="form-control @error('logo') is-invalid @enderror" name="logo" type="file" multiple accept="image/*">
                    @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label" placeholder="">Profissional Card Photo Front</label><br>
                    <input required="required" class="form-control @error('card_front') is-invalid @enderror" name="card_front" type="file" multiple accept="image/*">
                    @error('card_front')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label" placeholder="">Profissional Card Photo Back</label><br>
                    <input required="required" class="form-control @error('card_back') is-invalid @enderror" name="card_back" type="file" multiple accept="image/*">
                    @error('card_back')
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