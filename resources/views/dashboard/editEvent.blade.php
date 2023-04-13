@extends('layouts.mainDashboard')

@section('content')
<div class="content-body text-center">
	<div class="container-fluid">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Horizontal Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('events.update', $event->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Event Name</label>
                                    <input type="text" name="name" value="{{$event->name}}" class="form-control" placeholder="1234 Main St">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Type Of Event</label>
                                    <select class="form-control" name="type">
                                        <option value="{{Str::ucfirst($event->type)}}" selected>{{Str::ucfirst($event->type)}}</option>
                                        <option value="touristic">Touristic</option>
                                        <option value="touristic">Touristic</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="social">Social</option>
                                        <option value="sportif">Sportif</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Start Date</label>
                                    <input type="date" name="start_date" value="{{$event->start_date}}" class="form-control" placeholder="Password">
                                </div>                                
                                <div class="form-group col-md-3">
                                    <label>End Date</label>
                                    <input type="date" name="end_date" value="{{$event->end_date}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>City</label>
                                    <input type="text" name="city" value="{{$event->city}}" class="form-control">
                                </div>
                                <div class="form-group col-md-9">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$event->address}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>About the Event</label>
                                    <input type="text" name="description" value="{{$event->description}}" class="form-control">
                                </div>                               
                            </div>
                            <div class="basic-list-group">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Image Cover</label>
                                                <img src="{{URL::asset('images/' . $event->cover)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="cover" value="{{$event->cover}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Image 1</label>
                                                <img src="{{URL::asset('images/' . $event->image_1)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="image_1" value="{{$event->image_1}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Image 2</label>
                                                <img src="{{URL::asset('images/' . $event->image_2)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="image_2" value="{{$event->image_2}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Image 3</label>
                                                <img src="{{URL::asset('images/' . $event->image_3)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="image_3" value="{{$event->image_3}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Imager 4</label>
                                                <img src="{{URL::asset('images/' . $event->image_4)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="image_4" value="{{$event->image_4}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Image 5</label>
                                                <img src="{{URL::asset('images/' . $event->image_5)}}" width="20%" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" name="image_5" value="{{$event->image_5}}" class="form-control">
                                            </div>                               
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary">Update the Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <div class="col-xl-6 col-xxl-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="post-details">
                <h3 class="mb-2 text-black text-center">{{Str::upper($event->name)}}</h3>
                <br>
                <img src="{{URL::asset('images/' . $event->cover)}}" alt="" class="img-fluid mb-3 w-100">
                <p>{{$event->description}}</p>
                <div class="profile-skills mt-5 mb-5">
                    <h4 class="text-primary mb-2 text-center">About the Event</h4>                            
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">event: {{$event->name}}</a>
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">type: {{$event->type}}</a>
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">start: {{$event->start_date}}</a>
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">end: {{$event->end_date}}</a>
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">city: {{$event->city}}</a>
                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">address: {{$event->address}}</a>
                </div>
                <img src="{{URL::asset('images/' . $event->image_1)}}" alt="" class="img-fluid mb-3 w-100">
                <img src="{{URL::asset('images/' . $event->image_2)}}" alt="" class="img-fluid mb-3 w-100">
                <img src="{{URL::asset('images/' . $event->image_3)}}" alt="" class="img-fluid mb-3 w-100">
                <img src="{{URL::asset('images/' . $event->image_4)}}" alt="" class="img-fluid mb-3 w-100">
                <img src="{{URL::asset('images/' . $event->image_5)}}" alt="" class="img-fluid mb-3 w-100">
            </div>
        </div>
    </div>
</div> --}}