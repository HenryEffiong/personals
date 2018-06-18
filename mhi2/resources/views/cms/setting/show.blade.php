@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-puzzle2 position-left"></i> Website Settings
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Site Setting</li>
						<li class="active">Display</li>
					</ul>
				</div>
			</div>
			<!-- /Page header -->

			<div class="container-fluid page-content">





				<!-- Inline list options -->
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="page-subtitle">Site Setting Details</div>

						<!-- Description List -->
						<div class="card card-inverse card-flat">
							<div class="card-block">
								<dl class="row">
								  <dt class="col-sm-3">Homepage Volunteer Text</dt>
								  <dd class="col-sm-9">{{$setting->volunteer_text}}</dd>

								  <dt class="col-sm-3">Homepage Fundraise Text</dt>
								  <dd class="col-sm-9">{{$setting->fundraise_text}}</dd>

								  <dt class="col-sm-3">Homepage Donate Text</dt>
								  <dd class="col-sm-9">{{$setting->donate_text}}</dd>

									<dt class="col-sm-3">What We Do Text- Homepage</dt>
									<dd class="col-sm-9">{{$setting->what_we_do1}}</dd>


									<dt class="col-sm-3">What We Do Text (Part2) Homepage</dt>
									<dd class="col-sm-9">{{$setting->what_we_do2}}</dd>

									<dt class="col-sm-3">Who we are Text- Homepage</dt>
									<dd class="col-sm-9">{{$setting->who_we_are}}</dd>

									<dt class="col-sm-3">Number of tweets- Homepage</dt>
									<dd class="col-sm-9">{{$setting->tweetno}}</dd>

									<dt class="col-sm-3">Facebook Link</dt>
									<dd class="col-sm-9">{{$setting->facebook}}</dd>

									<dt class="col-sm-3">Twitter Link</dt>
									<dd class="col-sm-9">{{$setting->twitter}}</dd>

									<dt class="col-sm-3">Instagram Link</dt>
									<dd class="col-sm-9">{{$setting->instagram}}</dd>

									<dt class="col-sm-3">Linkedin Link</dt>
									<dd class="col-sm-9">{{$setting->linkedin}}</dd>

									<dt class="col-sm-3">Footer Note</dt>
									<dd class="col-sm-9">{{$setting->footernote}}</dd>

									<dt class="col-sm-3">corporate profile -Overview Page</dt>
									<dd class="col-sm-9">{{$setting->corporate_profile}}</dd>

									<dt class="col-sm-3">Vision text - Vision Page</dt>
									<dd class="col-sm-9">{{$setting->vision}}</dd>

									<dt class="col-sm-3">Staff Text - Staff page</dt>
									<dd class="col-sm-9">{{$setting->stafftext}}</dd>



									<dt class="col-sm-3">Board Text - Board Page</dt>
									<dd class="col-sm-9">{{$setting->boardtext}}</dd>

									<dt class="col-sm-3">Clinic Vision - Clinic Page</dt>
									<dd class="col-sm-9">{{$setting->clinicvision}}</dd>

									<dt class="col-sm-3">Contact writeup - Contact Page</dt>
									<dd class="col-sm-9">{{$setting->contactwriteup}}</dd>

									<dt class="col-sm-3">Contact Email1 - Contact Page</dt>
									<dd class="col-sm-9">{{$setting->contact_email1}}</dd>

									<dt class="col-sm-3">Contact Email2 - Contact Page</dt>
									<dd class="col-sm-9">{{$setting->contact_email2}}</dd>

									<dt class="col-sm-3">Contact Box Writeup - Contact Page</dt>
									<dd class="col-sm-9">{{$setting->contactboxtext}}</dd>

									<dt class="col-sm-3">Phone Number</dt>
									<dd class="col-sm-9">{{$setting->phone}}</dd>



									<dt class="col-sm-3"></dt>
									<dd class="col-sm-9">{{$setting->footernote}}</dd>

									<dt class="col-sm-3"></dt>
									<dd class="col-sm-9">{{$setting->footernote}}</dd>

								  <dt class="col-sm-3">Who we are Picture - Homepage</dt>
								  <dd class="col-sm-9"><img src="{{URL::to('setting/'.$setting->picture)}}"></dd>
								    
								</dl>
							</div>

							{{-- <div class="row">
								<div class="col-md-6">
									<img src="{{URL::to('images/'.$setting->picture)}}">
								</div>
							</div> --}}

							<div class="card-block">
							
								<a href="{{ route('cms/setting.edit', $setting->id)}}"><button type="button" class="btn btn-primary" >Edit</button></a>
								{{--<a href="{{ route('cms/setting.delete', $setting->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>--}}
							
							</div>

						</div>
						<!-- /Description List -->

					</div>
					
					
					
				</div>

			</div>
			
				
				<!-- /Inline list options -->


				<!-- Blockquote options -->
				



			

		
@endsection
