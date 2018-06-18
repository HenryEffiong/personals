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
						<li class="active">Create</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">

				<div class="row">
					<p class="badge badge-danger">List creation is supposed to have either a link or a description but not both. Links (with the format http://wwww... ) are for external websites while description are for content that are owned by MHI</p>
					<div class="col-md-12 col-sm-12">

						<!-- Basic inputs -->
						<div class="card card-inverse">
							<div class="card-header">
								<div class="card-title">Create List</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/list.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">List Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">List Link <small class="badge badge-danger">use http://... format</small> </label>
										<div class="col-lg-9">
											<input type="text" name="link" class="form-control" placeholder=" eg http://www.google.com" value="{{ old('link')}}">
										</div>
									</div>



							
								<div class="form-group row">
									<label class="control-label col-lg-3">Page Category</label>
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
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea">{{ old('description')}}</textarea>
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
			<script>
                CKEDITOR.replace( 'description' );
			</script>
			
@endsection


