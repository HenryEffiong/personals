@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$list->title}}
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>List</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">List Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">List Title</dt>
								  <dd class="col-sm-9">{{$list->title}}</dd>

									<dt class="col-sm-3">List External Link</dt>
									<dd class="col-sm-9">{{$list->link}}</dd>

								  <dt class="col-sm-3">List Description</dt>
								  <dd class="col-sm-9">{!! $list->description !!}</dd>



								  <dt class="col-sm-3">List Category</dt>
								  <dd class="col-sm-9">{{$list->listcategory->name}}</dd>



								</dl>
							</div>



							<div class="card-block">
							
								<a href="{{ route('cms/list.edit', $list->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('cms/list.delete', $list->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>

			</div>
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				



			

		
@endsection
