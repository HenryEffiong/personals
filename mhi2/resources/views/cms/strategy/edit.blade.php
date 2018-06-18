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
								<div class="card-title">Edit Title</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/title.update', $title->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Title Title</label>
										<div class="col-lg-9">
											<input type="text" name="name" class="form-control" value="{{ $title->name}}">
										</div>
									</div>


									
									
                            		<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-info">Submit</button>
											<a href="{{ route('cms/title.show', $title->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
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


