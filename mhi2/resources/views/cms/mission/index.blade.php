@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>List
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>List</li>
						<li class="active">All Lists</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">List</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>

								<th>Title</th>

								<th>Description</th>
								<th>Page</th>
								<th>Link</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($lists as $list)
							<tr>
								<td>{{$list->id}}</td>

								<td>{{$list->title}}</td>

								<td>{!! str_limit($list->description, 60) !!}
								</td>
								<td>
									{{$list->listcategory->name}}
								</td>
								<td>
									<span class="badge badge-danger">{{$list->link}}</span>
								</td>
								<td class="text-center">
									<ul class="icons-list">
										<li><a href="#" data-toggle="modal" data-target="#invoice"></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a href="{{route('cms/list.show', $list->id)}}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
												{{-- <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a> --}}
												<div class="dropdown-divider"></div>
												<a href="{{route('cms/list.edit', $list->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
												<a href="{{route('cms/list.delete', $list->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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


