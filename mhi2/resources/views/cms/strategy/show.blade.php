@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$title->name}}
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Tag</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">

				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Title Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Title Name</dt>
								  <dd class="col-sm-9">{{$title->name}}</dd>

								 
								    
								</dl>
							</div>

							
							<div class="card-block">
							
								<a href="{{ route('cms/title.edit', $title->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('cms/title.delete', $title->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
				</div>
				
			</div>

@endsection
