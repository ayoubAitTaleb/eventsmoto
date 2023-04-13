@extends('layouts.mainDashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="email-left-box px-0 mb-3">
                            <div class="mail-list mt-4">
                                <a href="email-inbox.html" class="list-group-item"><i class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span class="badge badge-primary badge-sm float-right">198</span> </a>
                                <a href="javascript:void()" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a>
                                <a href="javascript:void()" class="list-group-item"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>
                            </div>
                        </div>
                        <div class="email-right-box ml-0 ml-sm-4 ml-sm-0 mt-4">
                            <div class="compose-content">
                                <form action="{{route('messages.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input required type="email" name="destination" class="form-control bg-transparent" placeholder=" To:">
                                    </div>
                                    <div class="form-group">
                                        <input required  type="text" name="subject" class="form-control bg-transparent" placeholder=" Subject:">
                                    </div>
                                    <div class="form-group">
                                        <textarea required  id="email-compose-editor" name="content" class="textarea_editor form-control bg-transparent" rows="3" placeholder="Enter text ..."></textarea>
                                    </div>
                                    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchments</h5>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="attatchments" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>                                            
                                        </div>                                        
                                    </div>
                                    <div class="text-left mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm mr-2" type="submit"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="reset"><span class="mr-2"><i class="fa fa-times" aria-hidden="true"></i></span>Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection