@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Gallery Management
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Gallery</li>
						<li class="active">Edit</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">

				<div class="row">
					<div class="col-md-12 col-sm-12">

						<!-- Basic inputs -->
						<div class="card card-inverse">
							<div class="card-header">
								<div class="card-title">Edit Gallery</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/gallery.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}

w


									<div class="form-group row">
									<label class="control-label col-lg-3">Categories</label>
									<div class="col-lg-9">
										<select class="select" name="event_id">
											{{--<option value="">Others</option>--}}
											@foreach($events as $event)
												<option value="{{$event->id}}">{{$event->title}}</option>

											@endforeach

										</select>
									</div>
								</div>




									<div class="form-group row">
										<label class="control-label col-lg-3">Gallery Image</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									
                            		<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-info">Submit</button>
											<a href="{{ route('cms/gallery.show', $gallery->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
										</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /Basic inputs -->










					</div>

					
				</div>

				
			</div>

			
@endsection


