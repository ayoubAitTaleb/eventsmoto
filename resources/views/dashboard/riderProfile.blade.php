<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="profile-tab">
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a>
                        </li>
                        <li class="nav-item"><a href="#add-post" data-toggle="tab" class="nav-link">Add Post</a>
                        </li>
                        <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="add-post" class="tab-pane fade">
                            <div class="my-post-content pt-3">
                                <div class="post-input">
                                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <textarea name="description" cols="30" rows="5" class="form-control bg-transparent @error('description') is-invalid @enderror" placeholder="Please type what you want...."></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                   
                                        <a href="javascript:void(0);" class="btn btn-primary light mr-1 px-3" data-toggle="modal" data-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a>
                                        <div class="modal fade" id="cameraModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Upload images</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror">
                                                                <label class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Post</button>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-news">
                                        <h5 class="text-primary d-inline">Our Latest Posts</h5>
                                        @forelse ($myPosts as $mypost)
                                        <div class="media pt-3 pb-3">                                                    
                                            <img src="{{ URL::asset('images/' . $mypost->image) }}" alt="events moto" class="mr-3 rounded" width="75">
                                            <div class="media-body">
                                                <p class="mb-0">{{$mypost->description}}</p>
                                                <form action="{{ route('posts.destroy', $mypost->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><span class="mr-2"><i class="fa fa-trash"></i></span>Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                        @empty                                            
                                        <div class="alert alert-info alert-dismissible fade show mt-3">
                                            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                            <strong>Info!</strong> You Have No Posts To Show.
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>                                         
                                        @endforelse                                               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="about-me" class="tab-pane fade active show">
                            <div class="profile-about-me">
                                <div class="pt-4 border-bottom-1 pb-3">
                                    <h4 class="text-primary">About Me</h4>
                                    <p class="mb-2">{{ Auth::user()->rider->description }}</p>
                                </div>
                            </div>
                            <div class="profile-skills mb-5">
                                <h4 class="text-primary mb-2">Member Of Club</h4>
                                <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">{{Str::ucfirst(Auth::user()->rider->member->club)}}</a>
                            </div>
                            <div class="profile-personal-info">
                                <h4 class="text-primary mb-4">Personal Information</h4>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">First Name <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->rider->first_name)}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Family Name <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->rider->family_name)}}</span>
                                    </div>
                                </div>                                                    
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{Str::ucfirst(Auth::user()->rider->email)}}</a></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Phone<span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ Auth::user()->rider->phone }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Country <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7">
                                        <span>{{ Auth::user()->rider->country }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">City<span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ Str::ucfirst(Auth::user()->rider->city) }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Address <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->rider->address)}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Moto Category <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->rider->moto_type)}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Brand <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->rider->brand)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-settings" class="tab-pane fade">
                            <div class="pt-3">
                                <div class="settings-form">
                                    <h4 class="text-primary">Account Setting</h4>
                                    <form action="{{ route('riders.update', Auth::user()->rider->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Admin Name</label>
                                                <input type="text" name="first_name" class="form-control" value="{{Auth::user()->rider->first_name}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>rider Name</label>
                                                <input type="text" name="family_name" class="form-control" value="{{Auth::user()->rider->family_name}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="{{Auth::user()->rider->email}}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Indicatifs</label>
                                                <x-indicatifs></x-indicatifs>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" value="{{Auth::user()->rider->phone}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Country</label>
                                                <x-countries></x-countries>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Address</label>
                                                <input name="address" type="text" class="form-control @error('description') is-invalid @enderror" value="{{Auth::user()->rider->address}}"></input>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" value="{{Auth::user()->rider->city}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Moto categories</label>
                                                <x-moto-brand></x-moto-brand>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Moto Brand</label>
                                                <x-moto-categories></x-moto-categories>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>About The rider</label>
                                                <input name="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{Auth::user()->rider->description}}"></input>
                                            </div>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary btn-sm" type="submit">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="replyModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Post Reply</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <textarea class="form-control" rows="4">Message</textarea>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>