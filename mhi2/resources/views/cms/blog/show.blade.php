@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$blog->title}}
					</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li>Blog</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Title</dt>
								  <dd class="col-sm-9">{{$blog->title}}</dd>

								  <dt class="col-sm-3">Description</dt>
								  <dd class="col-sm-9">{!!$blog->description!!}</dd>

								  <dt class="col-sm-3">Tags</dt>
								  <dd class="col-sm-9">@foreach($blog->tags as $tag) <span class="badge badge-default">{{$tag->name}}</span>@endforeach</dd>


								  <dt class="col-sm-3">Picture</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('/images/blog/'.$blog->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$blog->picture)}}">
								</div>
							</div> --}}

							<div class="card-block">
							
								<a href="{{ route('adminblog.edit', $blog->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('adminblog.delete', $blog->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>
				
				
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				

			</div>

			

		
@endsection
