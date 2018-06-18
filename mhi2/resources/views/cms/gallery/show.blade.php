@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> {{$gallery->name}}
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Gallery</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Gallery Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">



									<dt class="col-sm-3">Gallery Category</dt>
									<dd class="col-sm-9">{{$gallery->event->name}}</dd>


								  <dt class="col-sm-3">Gallery Picture</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('gallery/'.$gallery->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$gallery->picture)}}">
								</div>
							</div> --}}

							<div class="card-block">
							
								<a href="{{ route('cms/gallery.edit', $gallery->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								<a href="{{ route('cms/gallery.delete', $gallery->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>

			</div>
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				



			

		
@endsection
