@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>Event
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Event</li>
						<li class="active">All Events</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">Event</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>

								<th>Title</th>

								<th>Description</th>
								<th>Page</th>
								<th>Date</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($events as $event)
							<tr>
								<td>{{$event->id}}</td>

								<td>{{$event->title}}</td>

								<td>{{str_limit($event->description, 60) }}
								</td>
								<td>
									{{$event->eventcategory->name}}
								</td>
								<td>
									<span class="badge badge-danger">{{$event->date}}</span>
								</td>
								<td class="text-center">
									<ul class="icons-list">
										<li><a href="#" data-toggle="modal" data-target="#invoice"></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a href="{{route('cms/event.show', $event->id)}}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
												{{-- <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a> --}}
												<div class="dropdown-divider"></div>
												<a href="{{route('cms/event.edit', $event->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
												<a href="{{route('cms/event.delete', $event->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
				<!-- /Basic datatable -->

				

			</div>

			
@endsection


