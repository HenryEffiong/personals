<!doctype html>
<html lang="en">

<!-- Mirrored from followtechnique.com/demo/bs4/datatable_basic.php?t=metalgrey-material by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2017 09:06:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('cmspartials._head')
<body id="top">

<!-- Preloader -->
<div id="preloader">
	<div id="status">
		<div class="loader"></div>
	</div>
</div>
<!-- /Preloader -->

<div id="body-wrapper" class="body-container">

	<!-- Header begins -->
	<header class="main-nav clearfix">

		<!-- Searchbar -->
		<div class="top-search-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="search-input-addon">
							<span class="addon-icon"><i class="icon-search4"></i></span>
							<input type="text" class="form-control top-search-input" placeholder="Enter your keyword...">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Searchbar -->

		<!-- Branding -->
		<div class="navbar-left float-left">
			<div class="clearfix">
				<ul class="left-branding float-left">
					<li class="visible-handheld"><span class="left-toggle-switch"><i class="icon-menu7"></i></span></li>
					<li>
						<a href="index.html"><div class="logo"></div></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Branding -->

		<!-- Search & Languages -->
		<div class="navbar float-left">
			<div class="clearfix">
				<ul class="float-left top-icons hidden-xs-down">
					<li><a href="#" class="btn-top-search m-l-15"><i class="icon-search4"></i></a></li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag7"></i></a>
						<ul class="dropdown-menu languages animated fadeIn">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Deutsch</a>
                            <a class="dropdown-item" href="#">Українська</a>
							<a class="dropdown-item" href="#">España</a>
                        </ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Search & Languages -->

		<!-- Navbar icons -->
		<div class="navbar float-right navbar-toggleable-sm">
			<div class="clearfix">
				<ul class="float-right top-icons">
					<li><a href="#" class="btn-top-search hidden-sm-up"><i class="icon-search4"></i></a></li>

					<!-- Quick apps dropdown -->
					<li class="dropdown apps-dropdown hidden-xs-down">
						<a href="#" class="dropdown-toggle" id="apps_dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"><i class="icon-grid2"></i></a>
						{{--<div class="dropdown-menu animated fadeIn" aria-labelledby="apps_dropdown">--}}

							{{--<ul class="shortcuts clearfix">--}}
							    {{--<li>--}}
							        {{--<a href="emails.php">--}}
							            {{--<img src="img/icons/emails.png"/>--}}
							            {{--<span class="apps-noty">4</span>--}}
							            {{--<span class="apps-label">Email</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							    {{--<li>--}}
							        {{--<a href="messages.php">--}}
							            {{--<img src="img/icons/messages.png"/>--}}
							            {{--<span class="apps-noty">8</span>--}}
							            {{--<span class="apps-label">Messages</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							    {{--<li>--}}
							        {{--<a href="people.html">--}}
							            {{--<img src="img/icons/people.png"/>--}}
							            {{--<span class="apps-label">People</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							    {{--<li>--}}
							        {{--<a href="invoice_list.html">--}}
							            {{--<img src="img/icons/invoices.png"/>--}}
							            {{--<span class="apps-label">Invoices</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							    {{--<li>--}}
							        {{--<a href="projects_list.html">--}}
							            {{--<img src="img/icons/projects.png"/>--}}
							            {{--<span class="apps-label">Projects</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							    {{--<li>--}}
							        {{--<a href="ecom_cart.html">--}}
							            {{--<img src="img/icons/cart.png"/>--}}
							            {{--<span class="apps-noty">3</span>--}}
							            {{--<span class="apps-label">Cart</span>--}}
							        {{--</a>--}}
							    {{--</li>--}}
							{{--</ul>--}}

						{{--</div>--}}
					</li>
					<!-- /Quick apps dropdown -->

					<!-- Rightbar -->
					<li><a class="toggle_rightbar" href="#" onclick="open_rightbar()"><span class="bubble">6</span><i class="icon-list-unordered"></i></a></li>
					<!-- /Rightbar -->

					<!-- User dropdown -->
					<li class="dropdown user-dropdown">
						<a href="#" class="btn-user dropdown-toggle hidden-xs-down" data-toggle="dropdown"><img src="img/demo/img1.jpg" class="rounded-circle user" alt=""/></a>
						<a class="user-name hidden-xs-down" data-toggle="dropdown"><small>Administrator</small></a>
						<a href="#" class="dropdown-toggle hidden-sm-up" data-toggle="dropdown"><i class="icon-more"></i></a>
						<div class="dropdown-menu animated fadeIn no-p">
							<div class="user-icon text-center p-t-15">
							    <img src="img/demo/img1.jpg" class="rounded-circle" alt=""/>
							    <h5 class="text-center p-b-15">Hi! </h5>
							</div>
							<ul class="user-links">
							    <li><a href="#"><i class="icon-profile"></i> My profile</a></li>
							    <li><a href="#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger float-right">0</span></a></li>
							    <li><a href="#"><i class="icon-cogs"></i> Profile settings</a></li>
							    
							</ul>
							<div class="text-center p-10"><a href="" class="btn btn-block"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
						</div>
					</li>
					<!-- /User dropdown -->

				</ul>
			</div>
		</div>
		<!-- /Navbar icons -->

	</header>
	<!-- /Header ends -->
    <!-- Sidebar -->
	@include('cmspartials._sidebar')
	<!-- /Sidebar -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
	<!-- Page container begins -->
    <section class="main-container">
	
	@yield('content')

		<!-- /Page Container ends -->
        <!-- Footer -->
            <footer class="footer-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="float-left">
                                ©  2018 Medela Health Initiative &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Web app kit by <a href="#" target="_blank">Thrivers  </a>.                            </div>
                            <div class="float-right">
                                <div class="badge badge-danger">Version: 1.0.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </section>

		<!-- ScrolltoTop -->
		<a id="scrollTop" href="#top"><i class="icon-arrow-up12"></i></a>
		<!-- /ScrolltoTop -->

	</div>

<!-- Rightbar -->
{{--<div id="right_sidebar" class="right_bar">--}}

	{{--<div class="rightbar-wrapper">--}}

		{{--<div class="rightbar-header">--}}
			{{--<img src="img/demo/img1.jpg" class="rounded-circle user" alt=""/>--}}
			{{--<div class="username">Jane Elliott</div>--}}
			{{--<div class="close-rightbar"><a onclick="close_rightbar()"><i class="icon-cross2"></i></a></div>--}}
			{{--<div class="clearfix"></div>--}}
		{{--</div>--}}
		{{--<div class="clearfix"></div>--}}

		{{--<div class="searchbar">--}}
			{{--<div class="form-group">--}}
				{{--<div class="input-group">--}}
					{{--<input type="text" class="form-control" placeholder="Search..." autocomplete="off">--}}
					{{--<span class="input-group-addon"><i class="icon-search4"></i></span>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="card friend-list">--}}
			{{--<div class="card-header">--}}
				{{--<div class="card-title">Friends</div>--}}
				{{--<ul class="icons-list">--}}
					{{--<li><a data-action="reload"></a></li>--}}
					{{--<li><a data-action="collapse" data-toggle="collapse" href="#friends"></a></li>--}}
				{{--</ul>--}}
			{{--</div>--}}
			{{--<div class="card-block collapse show" id="friends">--}}

				{{--<div id="friends">--}}
					{{--<div class="friend">--}}
						{{--<img src="img/demo/img1.jpg" />--}}
						{{--<div class="detail">--}}
							{{--<span>Jane Elliott</span>--}}
							{{--<cite>You just got LITT...</cite>--}}
						{{--</div>--}}
						{{--<div class="status available"></div>--}}
						{{--<div class="time">1:10 AM</div>--}}
						{{--<div class="badge badge-pill badge-danger">4</div>--}}
					{{--</div>--}}
					{{--<div class="friend">--}}
						{{--<img src="img/demo/img2.jpg" />--}}
						{{--<div class="detail">--}}
							{{--<span>Florence Douglas</span>--}}
							{{--<cite>Wrong. You take the gun...</cite>--}}
						{{--</div>--}}
						{{--<div class="status available"></div>--}}
						{{--<div class="time">9:14 PM</div>--}}
						{{--<div class="badge badge-pill badge-danger">23</div>--}}
					{{--</div>--}}
					{{--<div class="friend">--}}
						{{--<img src="img/demo/img3.jpg" />--}}
						{{--<div class="detail">--}}
							{{--<span>Jacqueline Howell</span>--}}
							{{--<cite>I was thinking that we...</cite>--}}
						{{--</div>--}}
						{{--<div class="status busy"></div>--}}
						{{--<div class="time">Yesterday</div>--}}
					{{--</div>--}}
					{{--<div class="friend">--}}
						{{--<img src="img/demo/img4.jpg" />--}}
						{{--<div class="detail">--}}
							{{--<span>Eugine Turner</span>--}}
							{{--<cite>Mike, I know everything</cite>--}}
						{{--</div>--}}
						{{--<div class="status away"></div>--}}
						{{--<div class="time">Yesterday</div>--}}
					{{--</div>--}}
				{{--</div>--}}

			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="card notifications">--}}
			{{--<div class="card-header">--}}
				{{--<div class="card-title">Notifications</div>--}}
				{{--<ul class="icons-list">--}}
					{{--<li><a data-action="collapse" data-toggle="collapse" href="#notifications"></a></li>--}}
				{{--</ul>--}}
			{{--</div>--}}
			{{--<div class="card-block collapse show" id="notifications">--}}
				{{--<div class="media-container">--}}
					{{--<ul class="clearfix">--}}
						{{--<li class="clearfix">--}}
							{{--<a href="#" class="media-thumb bg-info"><i class="icon-cart2"></i>--}}
							{{--</a><a href="#" class="media-title"><div>You have new order</div><span class="media-time">Just now</span></a>--}}
						{{--</li>--}}
						{{--<li class="clearfix">--}}
							{{--<a href="#" class="media-thumb bg-indigo"><i class="icon-stats-growth"></i>--}}
							{{--</a><a href="#" class="media-title"><div>Sales report generated</div><span class="media-time">20 minutes ago</span></a>--}}
						{{--</li>--}}
						{{--<li class="clearfix">--}}
							{{--<a href="#" class="media-thumb bg-success"><i class="icon-checkmark"></i>--}}
							{{--</a><a href="#" class="media-title"><div>Task completed</div><span class="media-time">yesterday at 2:23 pm</span></a>--}}
						{{--</li>--}}
						{{--<li class="clearfix">--}}
							{{--<a href="#" class="media-thumb bg-danger"><i class="icon-server"></i>--}}
							{{--</a><a href="#" class="media-title"><div>Server load (80%)</div><span class="media-time">Currently</span></a>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="card activities">--}}
			{{--<div class="card-header">--}}
				{{--<div class="card-title">Activities</div>--}}
				{{--<ul class="icons-list">--}}
					{{--<li><a data-action="collapse" data-toggle="collapse" href="#activities"></a></li>--}}
				{{--</ul>--}}
			{{--</div>--}}
			{{--<div class="card-block collapse show" id="activities">--}}

				{{--<ol class="activity-feed">--}}
					{{--<li class="feed-item" data-content="&#xeb35">--}}
						{{--<section>--}}
							{{--<input type="checkbox" id="expand_1" name="expand_1" />--}}
							{{--<label for="expand_1">--}}
								{{--<cite>2 minutes ago</cite>--}}
								{{--<span><b>Jane Elliott</b> added 2 new friends</span>--}}
							{{--</label>--}}
							{{--<main class="content">--}}
								{{--<b>Jane Elliott</b> added:<br />--}}
								{{--<img src="img/demo/img3.jpg" alt="image" class="rounded-circle img-20 m-t-10 m-r-10"/>--}}
								{{--<img src="img/demo/img4.jpg" alt="image" class="rounded-circle img-20 m-t-10"/>--}}
							{{--</main>--}}
						{{--</section>--}}
					{{--</li>--}}
					{{--<li class="feed-item" data-content="&#xe914">--}}
						{{--<section>--}}
							{{--<input type="checkbox" id="expand_2" name="expand_2" />--}}
							{{--<label for="expand_2">--}}
								{{--<cite>Yesterday at 12:15 pm</cite>--}}
								{{--<span><b>Florence Douglas</b> posted on your timeline.</span>--}}
							{{--</label>--}}
							{{--<main class="content">--}}
								{{--Duis iaculis commodo condimentum. Donec quis felis libero. Nunc feugiat nisi ut ullamcorper congue.--}}
							{{--</main>--}}
						{{--</section>--}}
					{{--</li>--}}
					{{--<li class="feed-item" data-content="&#xeb35">--}}
						{{--<section>--}}
							{{--<input type="checkbox" id="expand_3" name="expand_3" />--}}
							{{--<label for="expand_3">--}}
								{{--<cite>2 Days ago</cite>--}}
								{{--<span>You have a new friend request</span>--}}
							{{--</label>--}}
							{{--<main class="content">--}}
								{{--<b>Jane Elliott</b> wants to be your friend<br />--}}
								{{--<img src="img/demo/img1.jpg" alt="image" class="rounded-circle img-20 m-t-10 m-r-10"/>--}}
							{{--</main>--}}
						{{--</section>--}}
					{{--</li>--}}
					{{--<li class="feed-item" data-content="&#xeab6">--}}
						{{--<section>--}}
							{{--<label for="expand_4">--}}
								{{--<cite>2 days ago</cite>--}}
								{{--<span><b>Florence Douglas</b> invited you for <a href="#">New event</a>.</span>--}}
							{{--</label>--}}
						{{--</section>--}}
					{{--</li>--}}
					{{--<li class="feed-item" data-content="&#xea49">--}}
						{{--<section>--}}
							{{--<input type="checkbox" id="expand_5" name="expand_5" />--}}
							{{--<label for="expand_5">--}}
								{{--<cite>3 days ago</cite>--}}
								{{--<span>You have 4 documents pending</span>--}}
							{{--</label>--}}
							{{--<main class="content">--}}
								{{--<i class="icon-file-presentation x4 position-left m-b-10"></i>--}}
								{{--<i class="icon-file-picture x4 position-left m-b-10"></i>--}}
								{{--<i class="icon-file-locked x4 position-left m-b-10"></i>--}}
								{{--<i class="icon-file-xml x4 position-left m-b-10"></i>--}}
							{{--</main>--}}
						{{--</section>--}}
					{{--</li>--}}
				{{--</ol>--}}

			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="card settings">--}}
			{{--<div class="card-header">--}}
				{{--<div class="card-title">Settings</div>--}}
				{{--<ul class="icons-list">--}}
					{{--<li><a data-action="collapse" data-toggle="collapse" href="#settings"></a></li>--}}
				{{--</ul>--}}
			{{--</div>--}}
			{{--<div class="card-block collapse show" id="settings">--}}
				{{--<section>--}}
					{{--<div class="checkbox checkbox-right checkbox-switchery switchery-xs">--}}
						{{--<label class="display-block">--}}
							{{--<input type="checkbox" class="switchery">--}}
							{{--Notifications--}}
						{{--</label>--}}
					{{--</div>--}}
				{{--</section>--}}

				{{--<section>--}}
					{{--<div class="checkbox checkbox-right checkbox-switchery switchery-xs">--}}
						{{--<label class="display-block">--}}
							{{--<input type="checkbox" class="switchery">--}}
							{{--Notification Sounds--}}
						{{--</label>--}}
					{{--</div>--}}
				{{--</section>--}}

				{{--<section>--}}
					{{--<div class="checkbox checkbox-right checkbox-switchery switchery-xs">--}}
						{{--<label class="display-block">--}}
							{{--<input type="checkbox" class="switchery" checked="checked">--}}
							{{--Show Online--}}
						{{--</label>--}}
					{{--</div>--}}
				{{--</section>--}}

				{{--<section>--}}
					{{--<div class="checkbox checkbox-right">--}}
						{{--<label>--}}
							{{--<input type="checkbox" class="styled" checked="checked">--}}
							{{--Activities--}}
						{{--</label>--}}
					{{--</div>--}}
				{{--</section>--}}
			{{--</div>--}}
		{{--</div>--}}

	{{--</div>--}}

	{{--<div id="conversation">--}}

		{{--<div class="conversation-header">--}}
			{{--<i class="icon-arrow-left32" id="back"></i>--}}
			{{--<img src="img/demo/img1.jpg" />--}}
			{{--<div class="friend-details">--}}
				{{--<span>Jane Elliott</span>--}}
				{{--<cite>Online</cite>--}}
			{{--</div>--}}
			{{--<div class="actions">--}}
				{{--<div class="dropdown">--}}
					{{--<i class="icon-attachment dropdown-toggle" data-toggle="dropdown"></i>--}}
					{{--<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-file-pdf position-left"></i>Document</a>--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-camera position-left"></i>Camera</a>--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-images2 position-left"></i>Gallery</a>--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-music position-left"></i>Audio</a>--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-location3 position-left"></i>Location</a>--}}
						{{--<a href="#" class="dropdown-item"><i class="icon-user position-left"></i>Contact</a>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class='chat-wrapper'>--}}
			{{--<div class='chat-message chat-message-recipient'>--}}
				{{--<img class='chat-image' src='img/demo/img1.jpg' />--}}
				{{--<div class='chat-message-wrapper'>--}}
					{{--<div class='chat-message-content'>--}}
						{{--<p>Sushi tonight?</p>--}}
					{{--</div>--}}
					{{--<div class='chat-details'>--}}
						{{--<span>10:14 am</span>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class='chat-message chat-message-sender'>--}}
				{{--<img class='chat-image' src='img/demo/img2.jpg' />--}}
				{{--<div class='chat-message-wrapper'>--}}
					{{--<div class='chat-message-content'>--}}
						{{--<p>Pizza?</p>--}}
						{{--<p>We had sushi last time!</p>--}}
						{{--<p>For me one Vegetariana! Plus some chili oil on it!</p>--}}
					{{--</div>--}}
					{{--<div class='chat-details'>--}}
						{{--<i class="icon-check2 text-info"></i>--}}
						{{--<span>10:15 am</span>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class='chat-message chat-message-recipient'>--}}
				{{--<img class='chat-image' src='img/demo/img1.jpg' />--}}
				{{--<div class='chat-message-wrapper'>--}}
					{{--<div class='chat-message-content'>--}}
						{{--<p>Done. Delivery takes 5 minutes!</p>--}}
					{{--</div>--}}
					{{--<div class='chat-details'>--}}
						{{--<span>10:16 am</span>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class='chat-message chat-message-sender'>--}}
				{{--<img class='chat-image' src='img/demo/img2.jpg' />--}}
				{{--<div class='chat-message-wrapper'>--}}
					{{--<div class='chat-message-content'>--}}
						{{--<p>Awesome! See you later! : )</p>--}}
					{{--</div>--}}
					{{--<div class='chat-details'>--}}
						{{--<i class="icon-check2 text-slate"></i>--}}
						{{--<span>Just now</span>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="conversation-compose">--}}
			{{--<input class="input-msg" name="input" placeholder="Type a message..." autocomplete="off">--}}
			{{--<div class="photo">--}}
	          	{{--<i class="icon-camera"></i>--}}
	        {{--</div>--}}
			{{--<button class="send">--}}
				{{--<div class="circle">--}}
				  	{{--<i class="icon-paperplane"></i>--}}
				{{--</div>--}}
			{{--</button>--}}
		{{--</div>--}}

	{{--</div>--}}

{{--</div>--}}

<!-- /Rightbar -->

<!-- Layout settings -->
<div class="layout"></div>
<span class="is_hidden" id="jquery_vars">
	<span class="is_hidden switch-active"></span>
	<span class="is_hidden switch-inactive"></span>
	<span class="is_hidden chart-bg"></span>
	<span class="is_hidden chart-gridlines-color"></span>
	<span class="is_hidden chart-legends-text-color"></span>
	<span class="is_hidden chart-grid-text-color"></span>
	<span class="is_hidden chart-data-color-option1"></span>
	<span class="is_hidden chart-data-color-option2"></span>
	<span class="is_hidden chart-data-color-option3"></span>
	<span class="is_hidden chart-data-color-option4"></span>
	<span class="is_hidden chart-data-color-option5"></span>
	<span class="is_hidden chart-data-color-option6"></span>
	<span class="is_hidden chart-data-color-option7"></span>
	<span class="is_hidden chart-data-color-option8"></span>
</span>
<!-- /Layout settings -->

<!-- Global scripts -->
@include('cmspartials._footerscript')

</body>

<!-- Mirrored from followtechnique.com/demo/bs4/datatable_basic.php?t=metalgrey-material by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2017 09:06:37 GMT -->
</html>
