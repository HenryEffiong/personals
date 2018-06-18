@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$event->name}}
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Event</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Event Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Event Title</dt>
								  <dd class="col-sm-9">{{$event->title}}</dd>

								  <dt class="col-sm-3">Event Description</dt>
								  <dd class="col-sm-9">{{$event->description}}</dd>

								  <dt class="col-sm-3">Event Time</dt>
								  <dd class="col-sm-9">{{$event->time}}</dd>

									<dt class="col-sm-3">Event Venue</dt>
									<dd class="col-sm-9">{{$event->venue}}</dd>

								  <dt class="col-sm-3">Event Categories</dt>
								  <dd class="col-sm-9">{{$event->eventcategory->name}}</dd>

									<dt class="col-sm-3">Event Date</dt>
									<dd class="col-sm-9">{{$event->date}}</dd>


								  <dt class="col-sm-3">Event Picture</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('event/'.$event->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$event->picture)}}">
								</div>
							</div> --}}

							<div class="card-block">
							
								<a href="{{ route('cms/event.edit', $event->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('cms/event.delete', $event->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>

			</div>
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				



			

		
@endsection
