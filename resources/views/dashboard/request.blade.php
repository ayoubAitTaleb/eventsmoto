@extends('layouts.mainDashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-sm-flex d-block">
                <div class="mr-auto mb-sm-0 mb-3">
                    <h4 class="card-title mb-2">New Members Listing</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table style-1" id="ListDatatableView">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Moto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members_requests as $request)
                            <tr>
                                <td>
                                    <h6>1.</h6>
                                </td>
                                <td>
                                    <div class="media style-1">
                                        <img src="{{URL::asset('images/' . $request->rider->photo)}}" class="img-fluid mr-3" alt="">
                                        <div class="media-body">
                                            <h6>{{$request->rider->first_name}}</h6>
                                            <span>{{$request->rider->family_name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6>{{$request->rider->country}}</h6>
                                        <span>{{$request->rider->city}}</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="text-primary">{{$request->rider->phone}}</h6>
                                        <span></span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="text-primary">{{$request->rider->moto_type}}</h6>
                                        <span>{{$request->rider->brand}}</span>
                                    </div>
                                </td>
                                <td><span class="badge badge-warning light">Pending</span></td>
                                <td>                                    
                                    <div class="mb-1">
                                        <form action="{{route('members.update', $request->id)}}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="approved" value="{{true}}">
                                            <input type="hidden" name="club" value="{{$request->club}}">
                                            <button type="submit" class="btn btn-rounded btn-success btn-xs">Accept</button>
                                        </form>
                                    </div>
                                    <div>
                                        <form action="{{route('members.destroy', $request->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-rounded btn-danger btn-xs">Refuse</button>
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