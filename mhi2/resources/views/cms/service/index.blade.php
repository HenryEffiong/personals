@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>Products 
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Products</li>
						<li class="active">All Products</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">Products</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Availability</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($services as $service)
							<tr>
								<td>{{$service->id}}</td>
								<td>{{$service->title}}</td>
								<td>{{str_limit($service->description, 60) }}
								</td>
								<td>
									<img src="{{URL::to('/images/'.$service->picture)}}" height="50px" width="80px">
								</td>
								<td>
									{{$service->icon}}
								</td>
								<td class="text-center">
									<ul class="icons-list">
										<li><a href="#" data-toggle="modal" data-target="#invoice"></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a href="{{route('adminservice.show', $service->id)}}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
												{{-- <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a> --}}
												<div class="dropdown-divider"></div>
												<a href="{{route('adminservice.edit', $service->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
												<a href="{{route('adminservice.delete', $service->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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


