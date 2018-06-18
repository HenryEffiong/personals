@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Blog Management
					</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li>Blog</li>
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
								<div class="card-title">Post Blog</div>
							</div>
							<div class="card-block">
								<form action="{{route('adminblog.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
										</div>
									</div>

									<!-- Multiple select -->
						
							
							
								<div class="form-group row">
									<label class="control-label col-lg-3">Tags</label>
									<div class="col-lg-9">
									<select multiple="multiple" class="select" name="tags[]">
										@foreach($tags as $tag)
											<option value="{{$tag->id}}">{{$tag->name}}</option>

										@endforeach
											
										
									</select>
									</div>
								</div>

								
							
						





									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Description</label>
										<div class="col-lg-9">
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea">{{ old('description')}}</textarea>
										</div>
									</div>
									<script>
										CKEDITOR.replace( 'description' );
									</script>

									<div class="form-group row">
										<label class="control-label col-lg-3">Image Cover</label>
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


