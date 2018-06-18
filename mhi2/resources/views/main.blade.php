<!DOCTYPE html>
<html>


<head>
    {{--Google Analytics Begins--}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115882963-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115882963-1');
    </script>

    {{--Google analytics ends--}}
    <meta charset="utf-8">
    <title> Medela Healthcare Initiative</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::to('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::to('images/favicon.ico')}}" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{URL::to('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/responsive.css')}}" rel="stylesheet">
    <link href="{{URL::to('stylesheets/lightbox.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">

    <!-- Styles by Jerry-->
    <!--Hamburger menu icon-->
    <link href="{{URL::to('stylesheets/hamburgers.css')}}" rel="stylesheet" type="text/css"/>

    <!--Swiper Styles-->
    <link href="{{URL::to('stylesheets/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!--Font Awesome Styles-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('stylesheets/fontawesome/css/font-awesome.min.css')}}">

    <!--My Styles-->
    <link href="{{URL::to('stylesheets/styles.css')}}" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css"/>




</head>

<body>

<div class="page-wrapper">


    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->

    <!--Main Header-->
    <header class="main-navigation font-main">
        <div class="container navigation-wrapper">
            <div class="brand col-xs-4 col-md-2">
                <div class="icons">
                    <a href="{{route('homepage')}}">
                        <img class="margin-r-10" src="{{URL::to('images/mhilogo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <nav class="col-xs-8 col-md-10">
                <div class="wrapper">
                    <ul class="navigation-list">
                        <li class="visible-xs">MENU</li>
                        <li class="">
                            <span>
                                <span>About Us</span>
                                <span class="caret"></span>
                            </span>
                            <div class="sub-menu">
                                <div class="sub-menu-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="sub-menu-header">
                                                About Us
                                            </h4>
                                            <ul class="sub-menu-list">
                                                <li>
                                                    <a href="{{route('about')}}">Overview</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('ourvision')}}">Vision</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('mission')}}">Mission</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('ourvalues')}}">Values</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('philosophies')}}">Framing Philosophies</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="sub-menu-header">
                                                More About us
                                            </h4>
                                            <ul class="sub-menu-list">
                                                <li>
                                                    <a href="{{route('ourgoals')}}">Goals</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('strategicplan')}}">Strategic Plan 2018</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('staff')}}">Staff</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('board')}}">Board</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span>
                                <span>Medela Healthcare Initiative</span>
                                <span class="caret"></span>
                            </span>
                            <div class="sub-menu">
                                <div class="sub-menu-content">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="sub-menu-header">
                                                    Clinical Care
                                                </h4>
                                                <ul class="sub-menu-list">
                                                    <li>
                                                        <a href="{{route('goals')}}">
                                                            Goal
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('vision')}}">
                                                            Vision
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('centres')}}">
                                                            Centres
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="sub-menu-header">
                                                    Preventive Healthcare Services
                                                </h4>
                                                <ul class="sub-menu-list">
                                                    <li>
                                                        <a href="{{route('phcsprogram')}}">
                                                            Program
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('outreach')}}">
                                                            Outreach
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('services')}}">
                                                            Services
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="sub-menu-header">
                                                    Healthcare Research
                                                </h4>
                                                <ul class="sub-menu-list">
                                                    <li>
                                                        <a href="{{route('priorities')}}">
                                                            Priorities
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('manuscriptandpublications')}}">
                                                            Manuscripts and Publications
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('research')}}">
                                                            Ongoing Research
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="sub-menu-header">
                                                    Health Policy and Advocacy
                                                </h4>
                                                <ul class="sub-menu-list">
                                                    <li>
                                                        <a href="{{route('advocacypriorities')}}">
                                                            Priorities
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('policy')}}">
                                                            Legislative/Policy Briefs
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('advocacy')}}">
                                                            Ongoing Advocacy
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="sub-menu-header">
                                                    Community Engagement
                                                </h4>
                                                <ul class="sub-menu-list">
                                                    <li>
                                                        <a href="{{route('program')}}">
                                                            Programs
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('training')}}">
                                                            Trainings
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('collaborationpartnership')}}">
                                                            Collaborations and Partnerships
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span>
                                <span>Resources</span>
                                <span class="caret"></span>
                            </span>

                            <div class="sub-menu">
                                <div class="sub-menu-content">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <h4 class="sub-menu-header">
                                                Resource Centre
                                            </h4>
                                            <ul class="sub-menu-list">
                                                <li>
                                                    <a href="{{route('partnersncollaborators')}}">
                                                        Partners and collaborators
                                                    </a>
                                                </li>
                                                {{--<li>--}}
                                                    {{--<a href="{{route('newsnpublication')}}">--}}
                                                        {{--News and publications--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="{{route('healthupdates')}}">--}}
                                                        {{--Health Updates--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                <li>
                                                    <a href="{{route('gallery')}}">
                                                        Gallery
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li class="volunteer-link">
                            <a href="{{route('donation')}}" class="btn-apply">Donate</a>
                        </li>
                        <li class="volunteer-link">
                            <a href="{{route('volunteer')}}" class="btn-apply">Volunteer</a>
                        </li>
                    </ul>
                    <div class="volunteer-btn">
                        <a href="{{route('donation')}}" class="btn-apply">Donate</a>
                        <a href="{{route('volunteer')}}" class="btn-apply">Volunteer</a>
                    </div>
                </div>
                <div class="btn-wrapper">
                    <button class="menu-btn hamburger hamburger--spring">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </nav>
        </div>
    </header>

   @yield('content')


    <!--main-footer-->
    <!--main-footer-->
    <footer class="main-footer font-main">
        <div class="row top margin-reset-lr-20">
            <div class="container">
                <div class="row margin-reset-lr-20">
                    <div class="col-xs-6 col-md-2 padding-lr-20">
                        <div class="logo">
                            <img src="{{URL::to('images/mhilogo-dark.jpeg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3 padding-lr-20">
                        <h3 class="title">About MHI</h3>
                        <ul class="list">
                            <li>
                                <a href="{{route('about')}}">Overview</a>
                            </li>
                            <li>
                                <a href="{{route('ourvision')}}">Vision</a>
                            </li>
                            <li>
                                <a href="{{route('mission')}}">mission</a>
                            </li>
                            <li>
                                <a href="{{route('ourvalues')}}">values</a>
                            </li>
                            <li>
                                <a href="{{route('philosophies')}}">Framing Philosophies</a>
                            </li>
                            <li>
                                <a href="{{route('ourgoals')}}">Goals</a>
                            </li>
                            <li>
                                <a href="{{route('strategicplan')}}">Strategic Plan 2018</a>
                            </li>
                            <li>
                                <a href="#">Staff</a>
                            </li>
                            <li>
                                <a href="#">Board</a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3 padding-lr-20">
                        <h3 class="title">Events</h3>
                        <ul class="list">
                            @foreach($events as $event)
                            <li>
                                <a href="{{route('eventdetails', $event->id)}}">
                                    {{$event->title}}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-4 padding-lr-20">
                        <h3 class="title">Address</h3>
                        <p class="address-line">
                            {{$setting->address}}
                        </p>
                        <p class="contact-us">
                            <a href="#">
                                <i class="fa fa-envelope-o"></i>
                                {{$setting->generalemail}}
                            </a>
                        </p>
                        <p class="contact-us">
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                {{$setting->phone}}
                            </a>
                        </p>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href="{{$setting->facebook}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->twitter}}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->instagram}}">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->linkedin}}">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        <p class="copyright">
                            © MHI Medela Healthcare Initiative 2018
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End main-footer-->


</div>
<!--End pagewrapper-->



<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
    <div class="popup-inner">
        <div class="search-form">
            <form method="post" action="#">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            <br>
            <h3>Events</h3>
            <ul class="recent-searches">
                @foreach($events as $event)
                <li><a href="{{route('eventdetails', $event->id)}}">{{$event->title}}</a></li>
                @endforeach
                {{--<li><a href="#">Web Development</a></li>--}}
                {{--<li><a href="#">SEO</a></li>--}}
                {{--<li><a href="#">Logistics</a></li>--}}
                {{--<li><a href="#">Freedom</a></li>--}}
            </ul>
        </div>
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>

<script src="{{URL::to('js/jquery.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/isotope.js')}}"></script>
<script src="{{URL::to('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{URL::to('js/jquery.fancybox-media.js')}}"></script>
<script src="{{URL::to('js/html5lightbox.js')}}"></script>
<!-- circle progress -->
<script src="{{URL::to('js/circle-progress.js')}}"></script>
<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::to('js/validate.js')}}"></script>
<script src="{{URL::to('js/wow.js')}}"></script>
<script src="{{URL::to('js/jquery.appear.js')}}"></script>
<script src="{{URL::to('js/jquery.countTo.js')}}"></script>

<!-- Scripts by Jerry -->
<script src="{{URL::to('scripts/swiper.min.js')}}"></script>
<script src="{{URL::to('js/script.js')}}"></script>
<script src="{{URL::to('scripts/lightbox.js')}}"></script>
<script src="{{URL::to('scripts/script.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}');
    @endif

</script>
</body>


</html>
