@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>categorys 
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>categorys</li>
						<li class="active">All categorys</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">categorys</div>
					</div>
					
					<table class="table table-striped">
						<thead>
							<th>#</th>
							<th>Name</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>

						<tbody>
							@foreach($categories as $category)
								<tr>
									<th>{{$category->id}}</th>
									<td>{{ $category->name}}</td>
									<td><a href="{{route('admincategory.show', $category->id)}}" class="btn btn-info" >View</a></td>
									<td><a href="{{route('admincategory.edit', $category->id)}}" class="btn btn-primary">Edit</a></td>
									<td><a href="{{route('admincategory.delete', $category->id)}}" class="btn btn-danger">Delete</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /Basic datatable -->

				

			</div>

			
@endsection


