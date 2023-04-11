@extends('layouts.mainDashboard')
@section('content')
<div class="content-body">
	<div class="container-fluid">
        <div class="col-xxl-12 mx-auto">                
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black fs-20 mb-">My Evenement</h4>
                    <div class="table-responsive">
                        <table class="table style-1" id="ListDatatableView">
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
                                            <img src="{{URL::asset('images/' . $event->image)}}" class="img-fluid mr-3" alt="events moto">                                            
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