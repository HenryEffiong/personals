@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Member Management
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Product</li>
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
								<div class="card-title">Create Member</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/member.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Member Name</label>
										<div class="col-lg-9">
											<input type="text" name="name" class="form-control" value="{{ old('name')}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Member Title/ Designation</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
										</div>
									</div>


								<div class="form-group row">
									<label class="control-label col-lg-3">Category</label>
									<div class="col-lg-9">
									<select class="select" name="category">
										{{--@foreach($categories as $category)--}}
											{{--<option value="{{$category->id}}">{{$category->name}}</option>--}}

										{{--@endforeach--}}
										<option value="staff"> Staff</option>
										<option value="board"> Board Member</option>
											
										
									</select>
									</div>
								</div>


								<div class="form-group row">
									<label class="control-label col-lg-3">Titles</label>
									<div class="col-lg-9">
										<select multiple="multiple" class="select" name="titles[]">
											@foreach($titles as $title)
												<option value="{{$title->id}}">{{$title->name}}</option>

											@endforeach


										</select>
									</div>
								</div>


									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Member Full Profile</label>
										<div class="col-lg-9">
											<textarea rows="3" name="profile" cols="5" class="form-control" placeholder="Default textarea">{{ old('profile')}}</textarea>
										</div>
									</div>

									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Member Short Profile( check sample in homepage)</label>
										<div class="col-lg-9">
											<textarea rows="3" name="shortprofile" cols="5" class="form-control" placeholder="Default textarea">{{ old('shortprofile')}}</textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Member Image (Portriat)</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Member Image 2(Square)</label>
										<div class="col-lg-9">
											<input type="file" name="picture2" class="form-control">

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


