@extends('layouts.mainDashboard')
@section('content')
<div class="content-body">
	<div class="container-fluid">
        <div class="col-xxl-12">                
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black fs-20 mb-">All Evenement</h4>
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>                                    
                                    <th>image</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Start</th>
                                    <th>End</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
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
                                            
                                            <h6 class="text-dark">{{Str::ucfirst($event->name)}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{Str::ucfirst($event->type)}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{Str::ucfirst($event->city)}}</h6>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info light">{{Str::ucfirst($event->address)}}</span></td>
                                    <td><span class="badge badge-info light">{{$event->end_date}}</span></td>
                                    <td><span class="badge badge-info light">{{$event->end_date}}</span></td>
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