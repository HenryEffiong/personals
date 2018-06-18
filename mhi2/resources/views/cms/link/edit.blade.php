@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> List Management
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>List</li>
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
								<div class="card-title">Edit List</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/list.update', $list->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}


									<div class="form-group row">
										<label class="control-label col-lg-3">List Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ $list->title}}">
										</div>
									</div>



									<div class="form-group row">
										<label class="control-label col-lg-3">List external link</label>
										<div class="col-lg-9">
											<input type="text" name="link" class="form-control" value="{{ $list->link}}">
										</div>
									</div>



									<div class="form-group row">
									<label class="control-label col-lg-3">Categories</label>
									<div class="col-lg-9">
										<select class="select" name="listcategory_id">
											@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>

											@endforeach

										</select>
									</div>
								</div>

									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">List Description</label>
										<div class="col-lg-9">
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea"> {{ $list->description }}</textarea>
										</div>
									</div>

									
                            		<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-info">Submit</button>
											<a href="{{ route('cms/list.show', $list->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
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
			<script>
                CKEDITOR.replace( 'description' );
			</script>
			
@endsection


