<div class="col-xl-8">
    <div class="card">
        <div class="card-body">
            <div class="profile-tab">
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#add-post" data-toggle="tab" class="nav-link active show">Add Post</a>
                        </li>
                        <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                        </li>
                        <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="add-post" class="tab-pane fade active show">
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
                        </div>
                        <div id="about-me" class="tab-pane fade">
                            <div class="profile-about-me">
                                <div class="pt-4 border-bottom-1 pb-3">
                                    <h4 class="text-primary">About Me</h4>
                                    <p class="mb-2">{{ Auth::user()->media->description }}</p>
                                </div>
                            </div>
                            <div class="profile-personal-info">
                                <h4 class="text-primary mb-4">Media Information</h4>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Admin <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->media->admin_name)}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Family Name <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->media->media_name)}}</span>
                                    </div>
                                </div>                                                    
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{Str::ucfirst(Auth::user()->media->email)}}</a></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Phone<span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ Auth::user()->media->phone }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Country <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7">
                                        <span>{{ Auth::user()->media->country }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">City<span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ Str::ucfirst(Auth::user()->media->city) }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Address <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->media->address)}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Social Reason <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{Str::ucfirst(Auth::user()->media->social_reason)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-settings" class="tab-pane fade">
                            <div class="pt-3">
                                <div class="settings-form">
                                    <h4 class="text-primary">Account Setting</h4>
                                    <form action="{{ route('medias.update', Auth::user()->media->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Admin Name</label>
                                                <input type="text" name="admin_name" class="form-control" value="{{Auth::user()->media->admin_name}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Media Name</label>
                                                <input type="text" name="media_name" class="form-control" value="{{Auth::user()->media->media_name}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="{{Auth::user()->media->email}}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Indicatifs</label>
                                                <x-indicatifs></x-indicatifs>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" value="{{Auth::user()->media->phone}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Country</label>
                                                <x-countries></x-countries>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Address</label>
                                                <input name="address" type="text" class="form-control @error('description') is-invalid @enderror" value="{{Auth::user()->media->address}}"></input>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" value="{{Auth::user()->media->city}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Status</label>
                                                <x-legal-status></x-legal-status>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label>About The Media</label>
                                            <input name="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{Auth::user()->media->description}}"></input>
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