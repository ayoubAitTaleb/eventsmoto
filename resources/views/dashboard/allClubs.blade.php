@extends('layouts.mainDashboard')
@section('content')
<div class="content-body">
	<div class="container-fluid">
        <div class="col-xxl-12">                
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black fs-20 mb-">All Clubs</h4>
                    <div class="table-responsive">
                        <table class="table style-1" id="example3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>logo</th>
                                    <th>Name</th>
                                    <th>Admin</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>city</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clubs as $club)
                                <tr>
                                    <td>
                                        <h6>1.</h6>
                                    </td>
                                    <td>
                                        <div class="media style-1">
                                            <img src="{{URL::asset('images/' . $club->logo)}}" class="img-fluid mr-3" alt="clubs moto">                                            
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{Str::ucfirst($club->club_name)}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{Str::ucfirst($club->admin_name)}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="text-dark">{{$club->email}}</h6>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info light">{{$club->phone}}</span></td>
                                    <td><span class="badge badge-info light">{{$club->country}}</span></td>
                                    <td><span class="badge badge-info light">{{$club->city}}</span></td>
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