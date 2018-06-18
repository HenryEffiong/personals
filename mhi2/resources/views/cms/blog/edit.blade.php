@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Blog Management
					</div>
					<ul class="breadcrumb">
						<li><a href="#"></a></li>
						<li>Blog</li>
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
								<div class="card-title">Edit Blog</div>
							</div>
							<div class="card-block">
								<form action="{{route('adminblog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group row">
										<label class="control-label col-lg-3">Blog Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{ $blog->title}}">
										</div>
									</div>


									{{-- <div class="form-group row">
										<label class="control-label col-lg-3">Blog Price</label>
										<div class="col-lg-9">
											<input type="number" name="price" class="form-control" value="{{ $blog->price}}">
										</div>
									</div> --}}


									<div class="form-group row">
									<label class="control-label col-lg-3">Tagss</label>
									<div class="col-lg-9">
									<select multiple="multiple" class="select" name="tags[]">
										@foreach($tags as $tag)
											<option value="{{$tag->id}}" @foreach($blog->tags as $cat) @if($cat->name == $tag->name) selected @endif  @endforeach>{{$tag->name}}</option>

										@endforeach
											
										
									</select>
									</div>
								</div>





									<div class="form-group row pb-10">
										<label class="control-label col-lg-3">Blog Description</label>
										<div class="col-lg-9">
											<textarea rows="3" name="description" cols="5" class="form-control" placeholder="Default textarea"> {{ $blog->description }}</textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Blog Image</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									
                            		<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-info">Submit</button>
											<a href="{{ route('adminblog.show', $blog->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
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


