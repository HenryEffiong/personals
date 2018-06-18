@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Basic elements
					</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li>Form components</li>
						<li class="active">Basic elements</li>
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
								<div class="card-title">Basic inputs</div>
							</div>
							<div class="card-block">
								<form action="{{route('adminservice.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Service Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ old('title')}}">
										</div>
									</div>



									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Service Description</label>
										<div class="col-lg-9">
											<textarea rows="3" id="editor1" name="description" cols="5" class="form-control" placeholder="Default textarea"> {{ old('description')}} </textarea>

											<script>
												CKEDITOR.replace('editor1');
											</script>
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Service Icon</label>
										<div class="col-lg-9">
											<input type="text" name="icon" class="form-control" value="{{ old('title')}}">
										</div>
										<small class="small">Eg fa fa-icon</small>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Service Image</label>
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


