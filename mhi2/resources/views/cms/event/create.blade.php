@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Event Management
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Event</li>
						<li class="active">Create</li>
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
								<div class="card-title">Create Event</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/event.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Event Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Event Venue</label>
										<div class="col-lg-9">
											<input type="text" name="venue" class="form-control" value="{{ old('venue')}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Event Time</label>
										<div class="col-lg-9">
											<input type="text" name="time" class="form-control" value="{{ old('time')}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Event Date</label>
										<div class="col-lg-9">
											<input type="date" name="date" class="form-control" value="{{ old('date')}}">
										</div>
									</div>


									<!-- Multiple select -->
						
							
							
								<div class="form-group row">
									<label class="control-label col-lg-3">Categories</label>
									<div class="col-lg-9">
									<select class="select" name="eventcategory_id">
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>

										@endforeach
											
										
									</select>
									</div>
								</div>

								
							
						





									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Event Description</label>
										<div class="col-lg-9">
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea">{{ old('description')}}</textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Event Image</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									<div class="card-block">
                                		<button type="submit" class="btn btn-primary">Submit</button>
                            		</div>
								</form>
							</div>
						</div>
						<!-- /Basic inputs -->

						

					</div>

					
				</div>

				
			</div>

			
@endsection


