@extends('layouts.mainDashboard')
@section('content')
<div class="content-body">
	<div class="container-fluid">
        <div class="col-xl-6 col-xxl-10 mx-auto">                
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black fs-20 mb-">Add Evenement</h4>
                    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="form-label">Event Name</label>
                        <input required="required" name="name" type="text" maxlength="50" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label class="form-label">Type Of Event</label>
                            <select class="form-control" name="type">
                                <option value="touristic">Touristic</option>
                                <option value="commercial">Commercial</option>
                                <option value="social">Social</option>
                                <option value="sportif">Sportif</option>
                            </select>
                        <label class="form-label">Start Date</label>
                        <input required="required" name="start_date" type="date" maxlength="50" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ old('start_date') }}">
                            @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label class="form-label">End Date</label>
                            <input required="required" name="end_date" type="date" maxlength="50" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ old('end_date') }}">
                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
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
                        <label class="form-label">Description </label>
                        <textarea name="description" cols="30" rows="10" class="form-control" maxlength="500" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label class="form-label">Image</label><br>
                        <input required="required" class="form-control @error('image') is-invalid @enderror" name="image" type="file" multiple accept="image/*,video/*">
                            @error('image')
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
	</div>
</div>
@endsection