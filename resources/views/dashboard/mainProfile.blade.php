@extends('layouts.mainDashboard')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{URL::asset('images/' . Auth::user()->image)}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{Str::ucfirst(Auth::user()->name)}}</h4>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-news">
											<h5 class="text-primary d-inline">Our Latest Posts</h5>
											<div class="media pt-3 pb-3">
												<img src="images/profile/7.jpg" alt="image" class="mr-3 rounded" width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    {{-- profile section --}}
                        @switch($type)
                            @case(0)
                                @include('dashboard.clubProfile')                                                
                                @break
                            @case(1)
                                @include('dashboard.companyProfile')
                                @break
                            @case(2)
                                @include('dashboard.mediaProfile')
                                @break
                            @case(3)
                                @include('dashboard.riderProfile')
                                @break                                                
                        @endswitch
                    {{-- end profile section --}}                                            
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
</body>
</html>
@endsection