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
        <!-- Login-->
        <div class="login-form">           
            <h2 class="card-title font-weight-bold mb-3 text-center">Registration Club</h2>
            <form action="{{ route('clubs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="form-label" >Name of Admin</label>
                <input required="required" name="admin_name" type="text" maxlength="50" class="form-control @error('admin_name') is-invalid @enderror" id="admin_name" value="{{ old('admin_name') }}">
                    @error('admin_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label" >Name of Club</label>
                <input required="required" name="club_name" type="text" maxlength="50" class="form-control @error('club_name') is-invalid @enderror" id="club_name" value="{{ old('club_name') }}">
                    @error('club_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label" >Email</label>
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
                <label class="form-label" name="country">Country</label>
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
                <label class="form-label" placeholder="">Description </label>
                <textarea name="description" cols="30" rows="10" maxlength="500" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                <label class="form-label" placeholder="">Logo</label><br>
                <input required="required" class="form-control @error('logo') is-invalid @enderror" id="logo" value="{{ old('logo') }}" name="logo" type="file" multiple accept="image/*">
                    @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="form-label" placeholder="">Recepisse definitif (PDF, DOC, ETC..)</label>
                <input required="required" class="form-control @error('req_def') is-invalid @enderror" id="req_def" value="{{ old('req_def') }}" name="rec_def" type="file" accept=".pdf,image/*">
                    @error('req_def')
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