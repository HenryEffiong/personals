@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$member->name}}
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Member</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Member Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Member Title</dt>
								  <dd class="col-sm-9">{{$member->title}}</dd>

									<dt class="col-sm-3">Member Name</dt>
									<dd class="col-sm-9">{{$member->name}}</dd>

								  <dt class="col-sm-3">Member Profile</dt>
								  <dd class="col-sm-9">{{$member->profile}}</dd>

									<dt class="col-sm-3">Member Short Profile</dt>
									<dd class="col-sm-9">{{$member->shortprofile}}</dd>


								  <dt class="col-sm-3">Member Category</dt>
								  <dd class="col-sm-9">{{$member->category}}</dd>



								  <dt class="col-sm-3">Member Picture</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('member/'.$member->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$member->picture)}}">
								</div>
							</div> --}}

							<div class="card-block">
							
								<a href="{{ route('cms/member.edit', $member->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('cms/member.delete', $member->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>

			</div>
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				



			

		
@endsection
