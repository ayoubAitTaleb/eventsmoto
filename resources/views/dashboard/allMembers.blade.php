@extends('layouts.mainDashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-sm-flex d-block">
                <div class="mr-auto mb-sm-0 mb-3">
                    <h4 class="card-title mb-2">All Members Of {{Str::ucfirst(Auth::user()->club->club_name)}} Club</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table style-1" id="example3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Moto</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <tr>
                                <td>
                                    <h6>1.</h6>
                                </td>
                                <td>
                                    <div class="media style-1">
                                        <img src="{{URL::asset('images/' . $member->rider->photo)}}" class="img-fluid mr-3" alt="">
                                        <div class="media-body">
                                            <h6>{{$member->rider->first_name}}</h6>
                                            <span>{{$member->rider->family_name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6>{{$member->rider->country}}</h6>
                                        <span>{{$member->rider->city}}</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="text-dark">{{$member->rider->phone}}</h6>
                                        <span></span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="text-darck">{{$member->rider->moto_type}}</h6>
                                        <span>{{$member->rider->brand}}</span>
                                    </div>
                                </td>
                                <td><span class="badge badge-info light">{{$member->rider->address}}</span></td>
                                <td>                                    
                                    <div>
                                        <form action="{{route('members.destroy', $member->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-rounded btn-danger btn-xs">Reject</button>
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
@endsection