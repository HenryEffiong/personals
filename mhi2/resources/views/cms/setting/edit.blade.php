@extends('cms')

@section('content')


			<!-- Page header -->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-select2 position-left"></i> Setting Management
					</div>
					<ul class="breadcrumb">
						<li><a href=""></a></li>
						<li>Setting</li>
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
								<div class="card-title">Edit Setting</div>
							</div>
							<div class="card-block">
								<form action="{{route('cms/setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}


									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage Volunteer Text</label>
										<div class="col-lg-9">
											<input type="text" name="volunteer_text" class="form-control" value="{{ $setting->volunteer_text}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage Fundraise Text</label>
										<div class="col-lg-9">
											<input type="text" name="fundraise_text" class="form-control" value="{{ $setting->fundraise_text}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage Donate Text</label>
										<div class="col-lg-9">
											<input type="text" name="donate_text" class="form-control" value="{{ $setting->donate_text}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage What we do (Part1)</label>
										<div class="col-lg-9">
											<input type="text" name="what_we_do1" class="form-control" value="{{ $setting->what_we_do1}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage What we do (Part2)</label>
										<div class="col-lg-9">
											<input type="text" name="what_we_do2" class="form-control" value="{{ $setting->what_we_do2}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Who we are text</label>
										<div class="col-lg-9">
											<input type="text" name="who_we_are" class="form-control" value="{{ $setting->who_we_are}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Homepage Number of tweets</label>
										<div class="col-lg-9">
											<input type="text" name="tweetno" class="form-control" value="{{ $setting->tweetno}}">
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-lg-3"> Homepage(Beside who we are) Image</label>
										<div class="col-lg-9">
											<input type="file" name="picture" class="form-control">

										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Phone</label>
										<div class="col-lg-9">
											<input type="text" name="phone" class="form-control" value="{{ $setting->phone}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Facebook Link</label>
										<div class="col-lg-9">
											<input type="text" name="facebook" class="form-control" value="{{ $setting->facebook}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Twitter Link</label>
										<div class="col-lg-9">
											<input type="text" name="twitter" class="form-control" value="{{ $setting->twitter}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Instagram Link</label>
										<div class="col-lg-9">
											<input type="text" name="instagram" class="form-control" value="{{ $setting->instagram}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Linkedin Link</label>
										<div class="col-lg-9">
											<input type="text" name="linkedin" class="form-control" value="{{ $setting->linkedin}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Footer Notes</label>
										<div class="col-lg-9">
											<input type="text" name="footernote" class="form-control" value="{{ $setting->footernote}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Footer Notes</label>
										<div class="col-lg-9">
											<input type="text" name="footernote" class="form-control" value="{{ $setting->footernote}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Corporate profile (Overview Page)</label>
										<div class="col-lg-9">
											<input type="text" name="corporate_profile" class="form-control" value="{{ $setting->corporate_profile}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Vision Text</label>
										<div class="col-lg-9">
											<input type="text" name="vision" class="form-control" value="{{ $setting->vision}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Notes</label>
										<div class="col-lg-9">
											<input type="text" name="footernote" class="form-control" value="{{ $setting->footernote}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Staff Text</label>
										<div class="col-lg-9">
											<input type="text" name="stafftext" class="form-control" value="{{ $setting->stafftext}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Board Text</label>
										<div class="col-lg-9">
											<input type="text" name="boardtext" class="form-control" value="{{ $setting->boardtext}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Clinic Vision</label>
										<div class="col-lg-9">
											<input type="text" name="clinicvision" class="form-control" value="{{ $setting->clinicvision}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Address</label>
										<div class="col-lg-9">
											<input type="text" name="address" class="form-control" value="{{ $setting->address}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">General Email</label>
										<div class="col-lg-9">
											<input type="text" name="generalemail" class="form-control" value="{{ $setting->generalemail}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Email 1 Contact Page</label>
										<div class="col-lg-9">
											<input type="text" name="contact_email1" class="form-control" value="{{ $setting->contact_email1}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Email 2 Contact Page</label>
										<div class="col-lg-9">
											<input type="text" name="contact_email2" class="form-control" value="{{ $setting->contact_email2}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Contact Box Text</label>
										<div class="col-lg-9">
											<input type="text" name="contactboxtext" class="form-control" value="{{ $setting->contactboxtext}}">
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-lg-3">Contact Writeup</label>
										<div class="col-lg-9">
											<input type="text" name="contactwriteup" class="form-control" value="{{ $setting->contactwriteup}}">
										</div>
									</div>

									
                            		<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-info">Submit</button>
											<a href="{{ route('cms/setting.show', $setting->id)}}"><button type="button" class="btn btn-default">Cancel</button></a>
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


