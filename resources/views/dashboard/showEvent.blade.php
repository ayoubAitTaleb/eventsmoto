@extends('layouts.mainDashboard')

@section('content')
<div class="content-body text-center">
	<div class="container-fluid">
        <div class="col-xl-6 col-xxl-10 mx-auto">
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
        </div>
    </div>
</div>
@endsection