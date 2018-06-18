@extends('cms')

@section('content')


			<div class="container-fluid page-content">
				<div class="row p-t-40">
					<div class="col-md-12">
						<div class="card card-inverse card-flat border-none">
							<div class="card-block p-b-10">
								<div class="row p-t-10 p-b-15">

									<!-- Leads -->
									<div class="col-lg-3 col-sm-6 text-danger-a300 p-l-30 p-r-40 mb-5 mb-sm-5 mb-lg-0 br-grey-100 br-lg br-dashed no-b-xs">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Users</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10"> <i class="icon-arrow-up16 text-success text-size-large"></i></div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-comment x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="leads"></div>
									</div>
									<!-- /Leads -->

									<!-- Payments -->
									<div class="col-lg-3 col-sm-6 text-success-a300 p-l-30 p-r-40 mb-5 mb-sm-5 mb-lg-0 br-grey-100 br-lg br-dashed no-b-xs no-b-sm">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Payment</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10">$6,210</div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-coin-dollar x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="payment"></div>
									</div>
									<!-- /Payments -->

									<!-- Sales -->
									<div class="col-lg-3 col-sm-6 text-info p-l-30 p-r-40 mb-5 mb-sm-0 br-grey-100 br-lg br-dashed no-b-xs">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Sales</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10">765 <i class="icon-arrow-down16 text-danger text-size-large"></i></div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-price-tags x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="sales"></div>
									</div>
									<!-- /Sales -->

									<!-- Orders -->
									<div class="col-lg-3 col-sm-6 text-warning p-l-30 p-r-40">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Orders</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10"> <i class="icon-arrow-up16 text-success text-size-large"></i></div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-cart2 x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="orders"></div>
									</div>
									<!-- /Orders -->
								</div>

							</div>
						</div>




						<div class="card card-inverse card-flat border-none">
							<div class="card-block p-b-10">
								<div class="row p-t-10 p-b-15">

									
									<div class="col-lg-3 col-sm-6 text-info p-l-30 p-r-40 mb-5 mb-sm-0 br-grey-100 br-lg br-dashed no-b-xs">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Feedbacks</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10"> <i class="icon-arrow-up16 text-success text-size-large"></i></div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-cart2 x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="orders"></div>
									</div>


									<div class="col-lg-3 col-sm-6 text-warning p-l-30 p-r-40">
										<div class="row">
											<div class="col-md-8 col-8">
												<h4 class="text-uppercase text-muted no-m">Products</h4>
												<div class="x3 no-p no-m m-t-10 m-b-10"> <i class="icon-arrow-up16 text-success text-size-large"></i></div>
											</div>
											<div class="col-md-4 col-4 no-p text-right">
												<i class="icon-cart2 x6 text-grey-100 m-t-15"></i>
											</div>
										</div>
										<div id="orders"></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			

		
@endsection
