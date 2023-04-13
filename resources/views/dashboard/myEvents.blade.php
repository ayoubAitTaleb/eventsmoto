@extends('layouts.mainDashboard')
@section('content')
<div class="content-body">
	<div class="container-fluid">
        <div class="col-xxl-12 mx-auto">                
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black fs-20 mb-">My Evenement</h4>
                    <div class="table-responsive">
                        <table class="table style-1" id="example3">
                            <thead>
                                <tr>                                    
                                    <th>image</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($myEvents as $event)
                                <tr>                                    
                                    <td>
                                        <div class="media style-1">                                            
                                            <a href="{{ route('events.show', $event->id) }}">
                                                <img src="{{URL::asset('images/' . $event->cover)}}" class="rounded-circle" width="100" alt="events moto">                                         
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{$event->name}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{$event->type}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{$event->city}}</h6>
                                        </div>
                                    </td>
                                    <td><span class="badge light badge-light">{{$event->address}}</span></td>
                                    <td><span class="badge light badge-light">{{$event->end_date}}</span></td>
                                    <td><span class="badge light badge-light">{{$event->end_date}}</span></td>
                                    <td>                                    
                                        <div>
                                            <form action="{{route('events.destroy', $event->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-rounded btn-danger btn-xs">Delete</button>
                                            </form>
                                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-rounded btn-warning btn-xs mt-1">Edit</a>
                                        </div>                                                                           
                                    </td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>			
        </div>
	</div>
</div>
@endsection