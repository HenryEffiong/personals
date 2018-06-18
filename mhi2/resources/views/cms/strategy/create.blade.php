@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Title Management
					</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li>Title</li>
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
								<div class="card-title">Create Title</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/title.store')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Title Name</label>
										<div class="col-lg-9">
											<input type="text" name="name" class="form-control" value="{{ old('name')}}">
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


