@extends('main')

@section('content')
    <main class="main-content font-main">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h2 class="txt-sm txt-black txt-color-green margin-b-10">CLINICAL CARE</h2>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                Centers
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                            {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="secondary-menu">
            <div class="container">
                <ul class="list">
                    <li><a href="{{route('goals')}}">Goal</a></li>
                    <li><a href="{{route('vision')}}">Vision</a></li>
                    <li class="active"><a href="{{route('centres')}}">Centres</a></li>
                </ul>
            </div>
        </section>

        <section class="padding-tb-80">
            <div class="container">
                <div class="row margin-reset-lr-40">
                    <div class="col-md-4 padding-lr-40">
                        <h2 class="txt-2em txt-height-1-2 margin-b-20">Clinical Centres Nigeria</h2>
                        <div class="dropdown margin-b-20">
                            {{--<button class="btn-trans dropdown-toggle" type="button" data-toggle="dropdown">Select State--}}
                                {{--<span class="caret"></span></button>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{----}}
                                {{--<li><a href="#">FCT</a></li>--}}
                                {{--<li><a href="#">Abia</a></li>--}}
                                {{--<li><a href="#">Adamawa</a></li>--}}
                                {{--<li><a href="#">Akwa Ibom</a></li>--}}
                                {{--<li><a href="#">...</a></li>--}}
                            {{--</ul>--}}

                            <select class="btn-trans dropdown-toggle" onchange="showCity(this.value)" id="state">
                                <option label="Select State">Select State</option>
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 padding-lr-40">
                        <div class="custom-panel">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="toggle-icon collapsed" aria-expanded="false">
                                                <i class="fa fa-bank txt-color-green-light padding-r-10"></i>
                                                MHI Medical Center, Wuye, Abuja
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body padding-tb-40 bg-grey">
                                            <div class="custom-tabs-calendar">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true">Contact</a></li>
                                                    <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false">Team</a></li>
                                                    <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false">Services</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane fade active in">
                                                        <p class="txt-normal-s txt-height-1-7 margin-b-10">
                                                            <i class="fa fa-map-marker padding-r-10"></i>
                                                            <span>
                                                                697 Idris Gidado Street, Wuye, Abuja Nigeria
                                                            </span>
                                                        </p>
                                                        <p class="txt-normal-s txt-height-1-7 margin-b-10">
                                                            <i class="fa fa-phone padding-r-10"></i>
                                                            <span>
                                                                +234 908 010 6341
                                                            </span>
                                                        </p>
                                                        <p class="txt-normal-s txt-height-1-7 margin-b-10">
                                                            <i class="fa fa-envelope-o padding-r-10"></i>
                                                            <span>
                                                               +234 908 010 6341
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div id="menu1" class="tab-pane fade">
                                                        <div class="row">
                                                            <a class="col-md-4 padding-b-20" href="{{route('singlestaff')}}">
                                                                <div class="team-image-sm" style="background-image:url('images/people/adekeye.jpg');">

                                                                </div>
                                                                <div class="padding-tb-20 padding-lr-20">
                                                                    <h2 class="margin-b-5 txt-color-light">
                                                                        Founder and President
                                                                    </h2>
                                                                    <h2 class="txt-bold txt-color-default">
                                                                        Oluwatoyosi Adekeye
                                                                    </h2>
                                                                </div>
                                                            </a>
                                                            <a class="col-md-4 padding-b-20" href="{{route('singlestaff')}}">
                                                                <div class="team-image-sm" style="background-image:url('images/people/onewoman.png');">

                                                                </div>
                                                                <div class="padding-tb-20 padding-lr-20">
                                                                    <h2 class="margin-b-5 txt-color-light">
                                                                        Founder and President
                                                                    </h2>
                                                                    <h2 class="txt-bold txt-color-default">
                                                                        Oluwatoyosi Adekeye
                                                                    </h2>
                                                                </div>
                                                            </a>
                                                            <a class="col-md-4 padding-b-20" href="{{route('singlestaff')}}">
                                                                <div class="team-image-sm" style="background-image:url('images/people/oneman.jpg');">

                                                                </div>
                                                                <div class="padding-tb-20 padding-lr-20">
                                                                    <h2 class="margin-b-5 txt-color-light">
                                                                        Founder and President
                                                                    </h2>
                                                                    <h2 class="txt-bold txt-color-default">
                                                                        Oluwatoyosi Adekeye
                                                                    </h2>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div id="menu2" class="tab-pane fade">
                                                        <div class="row">
                                                            <ul>Internal Medicine</ul>
                                                                <ul>Paediatric medicine</ul>
                                                                    <ul>Surgery</ul>
                                                                    <ul>Obstetrics and Gynaecology</ul>
                                                                    <ul> Dentistry</ul>
                                                                    <ul>Opthalmology/Optometry</ul>
                                                                    <ul> Radiology</ul>
                                                                    <ul>Oncology</ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
