@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$service->title}}
					</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li>Service</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Service Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Service Title</dt>
								  <dd class="col-sm-9">{{$service->title}}</dd>

								  <dt class="col-sm-3">Service Description</dt>
								  <dd class="col-sm-9">{!! $service->description !!}</dd>

								  <dt class="col-sm-3">Service Picture</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('images/'.$service->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$service->picture)}}">
								</div>
							</div> --}}

				<div class="card-block">
				
					<a href="{{ route('adminservice.edit', $service->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
					<a href="{{ route('adminservice.delete', $service->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
				
				</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>
				
				
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				

			</div>

			

		
@endsection
