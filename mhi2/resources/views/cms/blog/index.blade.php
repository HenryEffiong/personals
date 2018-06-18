@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>Blogs 
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Blogs</li>
						<li class="active">All Blogs</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">Blogs</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Image</th>
								<th>Description</th>
								
								<th>Tags</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($blogs as $blog)
							<tr>
								<td>{{$blog->id}}</td>
								<td>{{$blog->title}}</td>
								<td>
									<img src="{{URL::to('/images/blog/'.$blog->picture)}}" height="60px" width="100px">
								</td>
								<td>{{str_limit($blog->description, 60) }}
								</td>
								
								<td>
									@foreach($blog->tags as $tag)<span class="badge badge-danger">{{$tag->name}}</span>@endforeach
								</td>
								<td class="text-center">
									<ul class="icons-list">
										<li><a href="#" data-toggle="modal" data-target="#invoice"></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a href="{{route('adminblog.show', $blog->id)}}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
												{{-- <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a> --}}
												<div class="dropdown-divider"></div>
												<a href="{{route('adminblog.edit', $blog->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
												<a href="{{route('adminblog.delete', $blog->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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


