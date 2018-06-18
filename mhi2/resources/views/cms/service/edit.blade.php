@extends('cms')

@section('content')
<section class="main-container">

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
								<form action="{{route('adminservice.update', $service->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Service Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{$service->title}}">
										</div>
									</div>



									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Service Description</label>
										<div class="col-lg-9">
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea">{{ $service->description }}</textarea>
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Service Icon</label>
										<div class="col-lg-9">
											<input type="text" name="icon" class="form-control" value="{{$service->icon}}">
										</div>
										<small class="small">Eg use fa fa-icon</small>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Service Image</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									<div class="card-block">
                                		<button type="submit" class="btn btn-primary">Submit</button>
                                		<a href="{{ route('adminservice.show', $service->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
                            		</div>
								</form>
							</div>
						</div>
						<!-- /Basic inputs -->

						

					</div>

					
				</div>

				
			</div>

			<!-- Footer -->
			<footer class="footer-container">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="float-left">
								©  2017 Pyramid Pharmacy&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Web app kit by <a href="http://followtechnique.com/" target="_blank">Infostrategy Technology Limited </a>.							</div>
	                        <div class="float-right">
								<div class="badge badge-danger">Version: 2.0.0</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</section>

		
@endsection


