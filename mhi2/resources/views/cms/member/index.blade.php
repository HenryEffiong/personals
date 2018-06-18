@extends('cms')

@section('content')
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table2 position-left"></i>Members
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Members</li>
						<li class="active">All Members</li>
					</ul>
				</div>
			</div>
			<!--/Page Header-->

			<div class="container-fluid page-content">

				<!-- Basic datatable -->
				<div class="card card-inverse card-flat table-responsive">
					<div class="card-header">
						<div class="card-title">Members</div>
					</div>
					
					<table class="table datatable table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Profile</th>
								<th>category</th>
								<th>title</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($members as $member)
							<tr>
								<td>{{$member->id}}</td>
								<td>{{$member->name}}</td>
								<td>{{str_limit($member->profile, 60) }}
								</td>
								<td>
									{{$member->category}}
								</td>
								<td>
									{{$member->title}}
								</td>
								<td class="text-center">
									<ul class="icons-list">
										<li><a href="#" data-toggle="modal" data-target="#invoice"></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a href="{{route('cms/member.show', $member->id)}}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
												{{-- <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a> --}}
												<div class="dropdown-divider"></div>
												<a href="{{route('cms/member.edit', $member->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
												<a href="{{route('cms/member.delete', $member->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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


