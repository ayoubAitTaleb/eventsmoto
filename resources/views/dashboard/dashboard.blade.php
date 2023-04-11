@extends('layouts.mainDashboard')

@section('content')
<div class="content-body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xxl-12">
				<div class="row">
					@foreach ($events as $event )						
					<div class="col-sm-6">
						<div class="card-bx stacked card">
							<img src="images/card/card1.jpg" alt="">
							<div class="card-info">
								<p class="mb-1 text-white fs-14">{{$event->city}}</p>
								<div class="d-flex justify-content-between">
									<h2 class="num-text text-white mb-5 font-w600">{{Str::upper($event->name)}}</h2>
									<svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
										<circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
									</svg>
								</div>
								<p class="mb-1 text-white fs-14">{{$event->address}}</p>
								<div class="d-flex">
									<div class="mr-4 text-white">
										<p class="fs-12 mb-1 op6">START</p>
										<span>{{$event->start_date}}</span>
									</div>
									<div class="text-white">
										<p class="fs-12 mb-1 op6">END</p>
										<span>{{$event->end_date}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@if(!$events->count())
					<div class="col-xxl-12">
                        <div class="card">
							<div class="card-body">
								<h4 class="text-black fs-20 mb-">Recent Evenements</h4>
                                <div class="alert alert-primary alert-dismissible fade show">
									<svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
									<strong>Info!</strong> There Is No Event Planified !!
									<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
					@endif
					<!--**********************************
						Recent Clubs start
					***********************************-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex mb-3 mt-3 justify-content-between align-items-center">
									<h4 class="text-black fs-20 mb-0">Recent Clubs</h4>
									@if ($clubs->count())
									<a href="javascript:void(0);" class="btn-link">View more</a>
									@endif	
								</div>
								<div class="card-body tab-content p-0">
									<div class="tab-pane active show fade" id="monthly">
										<div class="table-responsive">
											<table class="table shadow-hover card-table border-no tbl-btn short-one">
												<tbody>
													@foreach ($clubs as $club )
													<tr>
														<td class="wspace-no">
															<img src="{{URL::asset('images/' . $club->logo)}}" width="40" alt="events moto">
															<span class="font-w600 text-black">{{Str::upper($club->club_name)}}</span>
														</td>
														<td>
															<span class="text-black">{{Str::upper($club->admin_name)}}</span>
														</td>
														<td>
															<span class="font-w600 text-black">{{Str::upper($club->city)}}</span>
														</td>
														@if (Auth::user()->type == 3) 
															<td>
																@if (Auth::user()->rider->member->club == "not defined")
																<form action="{{route('members.store')}}" method="post">
																	@csrf
																	<input type="hidden" name="club" value="{{$club->club_name}}">
																	<button class="btn btn-outline-success float-right">join club</button>
																</form>														
																@else
																	<button class="btn btn-outline-secondary float-right" disabled>join club</button>
																@endif
															</td>															
														@else
															<td><button class="btn btn-outline-dark float-right" disabled>join club only for riders</button></td>
														@endif
													</tr>
													@endforeach
												</tbody>
												@if(!$clubs->count())
												<div class="alert alert-primary alert-dismissible fade show">
													<svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
													<strong>Info!</strong> There Is No Club Registred !!
													<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span></span>
													</button>
												</div>
												@endif
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<!--**********************************
							Recent Clubs End
						***********************************-->
				</div>
			</div>
		</div>
		<div class="col-md-6 mx-auto">
			@foreach ($posts as $post)
			<div class="card text-center">
				<div class="card-body">
					<div class="profile-uoloaded-post pb-3">
						<img src="{{URL::asset('images/' . $post->image)}}" alt="events moto" class="img-fluid w-20">
						<p>{{$post->description}}</p>
						<button class="btn btn-primary mr-2 btn-sm"><span class="mr-2"><i class="fa fa-heart"></i></span>Posted By {{Str::ucfirst($post->user->name)}}</button>
						<button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#replyModal"><span class="mr-2"><i class="fa fa-reply"></i></span>{{$post->created_at}}</button>
					</div>					
				</div>				
			</div>
			@endforeach				
		</div>
	</div>
</div>
@endsection