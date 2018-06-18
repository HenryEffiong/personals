@extends('main')

@section('content')

    <main class="bg-white main-content">
        <section class="font-main">
            <div class="swiper-container-home-slider relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="home-slider-item">
                            <div
                                    class="slide-bg"
                                    style="background-image:url('images/background/1.jpg');">
                            </div>
                            <div class="content-wrapper">
                                <div class="content txt-color-white">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-4">
                                                <h3 class="title txt-bold">
                                                    MEDELA HEALTHCARE INITIATIVE
                                                </h3>
                                                <h3 class="title txt-bold txt-color-green">
                                                    {{--HELP--}}
                                                </h3>
                                                <div class="cto">
                                                    <a class="" href="{{route('contact')}}">JOIN US</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-slider-item">
                            <div
                                    class="slide-bg"
                                    style="background-image:url('images/background/2.jpg');">
                            </div>
                            <div class="content-wrapper">
                                <div class="content txt-color-white">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-4">
                                                <h1 class="txt-bold txt-height-1-4">
                                                    "To achieve health equity, close collaboration between the community and health systems is integral in health decision-making and in the discovery of lasting solutions."
                                                </h1>
                                                <h3 class="title txt-bold txt-color-green">
                                                    {{--HELP--}}
                                                </h3>
                                                <div class="cto">
                                                    <a class="" href="{{route('contact')}}">JOIN US</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-slider-item">
                            <div
                                    class="slide-bg"
                                    style="background-image:url('images/slider/1.jpg');">
                            </div>
                            <div class="content-wrapper">
                                <div class="content txt-color-white">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-4">
                                               <strong> <h1 class="txt-bold txt-height-1-4">
                                                    "High Performing Healthcare Systems promote health, prevent disease, and provide healthcare that is available, affordable, accessible, accountable, timely and of the highest global standard available for all."
                                                </h1>
                                               </strong>
                                                {{--<h3 class="title txt-bold txt-color-green">--}}
                                                    {{--HELP--}}
                                                {{--</h3>--}}
                                                <div class="cto">
                                                    <a class="" href="{{route('donation')}}">DONATE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <div class="hero-action font-main padding-t-40 txt-color-white">
                    <div class="container">
                        <div class="row margin-reset-lr-20 homepage-links">
                            <div class="col-xs-12 col-md-4 padding-lr-20 padding-b-20 margin-b-20">
                                <div class="col-xs-3">
                                    <img src="images/icons/map-marker.png" alt="">
                                </div>
                                <div class="col-xs-9">
                                    <h3 class="txt-mormal-s txt-bold margin-b-10">VOLUNTEER</h3>
                                    <p class="txt-sm txt-height-1-7 margin-b-20">{{$setting->volunteer_text}}</p>
                                    <a class="btn btn-trans-white" href="{{route('volunteer')}}">BECOME A VOLUNTEER</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 padding-lr-20 padding-b-20 margin-b-20">
                                <div class="col-xs-3">
                                    <img src="images/icons/map-marker.png" alt="">
                                </div>
                                <div class="col-xs-9">
                                    <h3 class="txt-mormal-s txt-bold margin-b-10">FUNDRAISE</h3>
                                    <p class="txt-sm txt-height-1-7 margin-b-20">
                                        {{$setting->fundraise_text}}
                                    </p>
                                    <a class="btn btn-trans-white" href="{{route('donation')}}">JOIN US</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 padding-lr-20 padding-b-20 margin-b-20">
                                <div class="col-xs-3">
                                    <img src="images/icons/map-marker.png" alt="">
                                </div>
                                <div class="col-xs-9">
                                    <h3 class="txt-mormal-s txt-bold margin-b-10">DONATE</h3>
                                    <p class="txt-sm txt-height-1-7 margin-b-20">
                                       {{$setting->donate_text}}
                                    </p>
                                    <a class="btn btn-trans-white" href="{{route('donation')}}">DONATE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="font-main">
            <div class="container-fluid">
                <div class="row margin-reset-lr-40">
                    <div class="col-md-9 border-r-1 border-color-darkgrey">
                        <div class="home-container">
                            <article class="border-tb-1 border-color-darkgrey">
                                <div class="row is-flex">
                                    <header class="col-xs-12 col-md-3 padding-lr-40 padding-t-40  border-r-1 border-b-1 border-color-darkgrey">
                                        <h2 class="txt-2em txt-bold txt-color-dark center-mobile">WHAT WE DO</h2>
                                        <p class="txt-sm">
                                            {{$setting->what_we_do1}}
                                        </p>
                                    </header>
                                    <figure class="col-md-3 text-center padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/clinic.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                CLINICAL CARE
                                            </h3>
                                            <p class="txt-sm">
                                                To provide unrivaled quality and timely integrated healthcare services
                                            </p>
                                        </figurecaption>
                                    </figure>
                                    <figure class="col-md-3 text-center padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/preventivehealth.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                PREVENTIVE HEALTH SERVICES
                                            </h3>
                                            <p class="txt-sm">
                                                To provide access to chronic disease prevention & education including cancer screenings
                                            </p>
                                        </figurecaption>
                                    </figure>
                                    <figure class="col-md-3 text-center padding-lr-40 padding-tb-40  border-b-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/research.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                HEALTHCARE RESEARCH
                                            </h3>
                                            <p class="txt-sm">
                                                To conduct effective research that will inform national health practices and policies
                                            </p>
                                        </figurecaption>
                                    </figure>
                                </div>
                                <div class="row is-flex text-center">
                                    <div class="col-md-3 border-b-1 border-r-1 border-color-darkgrey"> <p class="txt-sm" style="margin-top: 30px;">Medela Healthcare Initiative (MHI) is a not-for-profit organization founded and registered with the Corporate Affairs Commission (CAC) of Nigeria in 2017. The Organization is aimed at addressing the health needs of disadvantaged individuals, particularly, those who reside in rural communities with limited access to quality healthcare services.</p></div>
                                    <figure class="col-md-3 tech-box padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/policy.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                HEALTH POLICY AND ADVOCACY
                                            </h3>
                                            <p class="txt-sm">
                                                To Provide leadership that promotes policies and practices that reduce disparities in health while advancing health equity
                                            </p>
                                        </figurecaption>
                                    </figure>
                                    <figure class="col-md-3 tech-box padding-lr-40 padding-tb-40 border-b-1 border-r-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/community.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                COMMUNITY ENGAGEMENT
                                            </h3>
                                            <p class="txt-sm">
                                                To educate, mobilize and motivate communities in changing health behavior, improving environmental health, and influencing policies that support
                                            </p>
                                        </figurecaption>
                                    </figure>
                                    <figure class="col-md-3 tech-box padding-lr-40 padding-tb-40 border-b-1 border-r-1 border-color-darkgrey">
                                        <img class="margin-b-10" src="images/icons/services/financial.png" width="70" alt="">
                                        <figurecaption>
                                            <h3 class="txt-normal-s txt-bold margin-b-10">
                                                FINANCIAL SUSTAINABILITY
                                            </h3>
                                            <p class="txt-sm">
                                                To achieve financial stability through the development of diverse funding sources and programs
                                            </p>
                                        </figurecaption>
                                    </figure>
                                    {{--<figure class="col-md-4 tech-box padding-lr-40 padding-tb-40 border-b-1 border-color-darkgrey">--}}
                                        {{--<img class="margin-b-10" src="images/icons/services/financial.png" width="70" alt="">--}}
                                        {{--<figurecaption>--}}
                                            {{--<h3 class="txt-normal-s txt-bold margin-b-10">--}}
                                                {{--FINANCIAL SUSTAINABILITY--}}
                                            {{--</h3>--}}
                                            {{--<p class="txt-sm">--}}
                                                {{--We believe success in business, as in life, depends largely on relationships. Extensive public and private sector contracts throughout Nigeria and across the globe are our links to a bright future.--}}
                                            {{--</p>--}}
                                        {{--</figurecaption>--}}
                                    {{--</figure>--}}
                                    <div class="col-md-3"></div>
                                </div>
                            </article>
                        </div>

                        <div class="service-wrapper margin-b-80">
                            <div class="padding-l-40">
                                <img src="images/background/2.jpg" alt="">
                            </div>
                            <div class="padding-tb-10 padding-lr-40 bg-grey">
                                <div class="padding-lr-20">
                                    <h2 class="txt-2em txt-color-dark center-mobile txt-bold margin-b-20">
                                        WHO WE ARE
                                    </h2>

                                    <p class="txt-normal-s txt-regular txt-color-dark txt-height-1-7">
                                        {{$setting->what_we_do2}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="padding-l-40">
                            <div class="">
                                <header class="padding-lr-40 margin-b-40 text-center">
                                    <h2 class="txt-2em txt-bold txt-color-dark margin-b-20">
                                        BOARD OF TRUSTEES
                                    </h2>
                                    <p class="txt-normal-s txt-height-1-7">Meet our Board of Trustees</p>
                                </header>
                                <div class="service-wrapper">
                                    <div class="row">

                                        <div class="row margin-reset-lr-10">
                                            @foreach($members as $member)
                                            <div class="col-md-6">
                                                <div class="director-card padding-o-10">
                                                    <div class="image-box" style="background-image:url('member/{{$member->picture}}')">

                                                    </div>
                                                    <div class="bio text-center padding-o-20 bg-grey">
                                                        <div class="wrapper">
                                                            <h3 class="font-accent txt-xlg txt-height-1-2 margin-b-20">
                                                                {{$member->name}} <br> @foreach($member->titles as $title) {{$title->name}},@endforeach
                                                            </h3>
                                                            <p class="txt-normal-s txt-bold margin-b-20">{{$member->title}}</p>
                                                            <p class="txt-sm txt-height-1-7 margin-b-20">

                                                                {{$member->shortprofile}}


                                                            </p>
                                                            <p>
                                                                <a class="padding-r-10" href="">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                                <a class="padding-r-10" href="">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                                <a class="padding-r-10" href="">
                                                                    <i class="fa fa-instagram"></i>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 padding-lr-40 padding-tb-80">
                        <div class="tweet-box">
                            <a class="twitter-timeline" data-tweet-limit="{{$setting->tweet}}" href="https://twitter.com/MHIorg?ref_src=twsrc%5Etfw"> Tweets by Medela Healthcare Initiative</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
