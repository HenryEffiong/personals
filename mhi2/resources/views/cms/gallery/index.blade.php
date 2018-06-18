@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>Gallery
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Gallery</li>
						<li class="active">All Galleries</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">Gallery</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>

								<th>Image</th>

								<th>Category</th>
								<th></th>
								<th></th>
								<th></th>

							</tr>
						</thead>
						<tbody>
							@foreach($galleries as $gallery)
							<tr>
								<td>{{$gallery->id}}</td>

								<td><img src="{{URL::to('gallery/'.$gallery->picture)}}" height="100px" width="100px"></td>

								<td>{{$gallery->event->title }}
								</td>
								<td><a href="{{route('cms/gallery.show', $gallery->id)}}" class="btn btn-info" >View</a></td>
								<td><a href="{{route('cms/gallery.edit', $gallery->id)}}" class="btn btn-primary">Edit</a></td>
								<td><a href="{{route('cms/gallery.delete', $gallery->id)}}" class="btn btn-danger">Delete</a></td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
				<!-- /Basic datatable -->

				

			</div>

			
@endsection


