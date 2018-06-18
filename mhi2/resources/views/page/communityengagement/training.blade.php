@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h4 class="font-accent txt-regular margin-b-20">
                                Community Engagement
                            </h4>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                Training
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                        {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-tb-20 border-b-1 border-color-darkgrey">
            <div class="container">
                <h2 class="txt-lg txt-color-dark txt-bold txt-height-1-4">
                    Training
                </h2>
            </div>
        </section>
        <section class="padding-b-80">
            <div class="container">
                @foreach($events as $event)
                    <div class="event-rule padding-tb-40 border-b-1 border-color-darkgrey">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-2 col-md-2 padding-lr-20 margin-b-20 text-center">
                                <div class="bg-grey padding-tb-10 padding-lr-30 inline-block">
                                    <div class="margin-b-5">{!! date('M', strtotime($event->date)) !!}</div>
                                    <div class="txt-2-6em txt-bold">{!! date('d', strtotime($event->date)) !!}</div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-md-10 padding-lr-20">
                                <div class="row margin-reset-lr-20">
                                    <div class="col-md-5 padding-lr-20 margin-b-20">
                                        <figure class="margin-b-10">
                                            <img src="{{URL::to('event/'.$event->picture)}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-7 padding-lr-20">
                                        <h2 class="txt-xlg txt-regular txt-height-1-4 margin-b-20">
                                            {{$event->title}}
                                        </h2>
                                        {{--<div class="margin-b-20">--}}
                                        {{--<ul class="pill-list-sm">--}}
                                        {{--<li>Charity Event</li>--}}
                                        {{--<li>African Health</li>--}}
                                        {{--<li>Health Care</li>--}}
                                        {{--</ul>--}}
                                        {{--</div>--}}
                                        <div class="txt-normal-s txt-color-dark margin-b-20">
                                            <p class="margin-b-5">
                                                <i class="fa fa-map-marker padding-r-10"></i>
                                                {{$event->venue}}
                                            </p>
                                            <p class="">
                                                <i class="fa fa-clock-o padding-r-10"></i>
                                                {{$event->time}}
                                            </p>
                                        </div>
                                        <p class="txt-sm margin-b-20 txt-height-1-7">
                                            {{ str_limit($event->description, '500')}}
                                        </p>
                                        <a class="hover-arrow right txt-regular padding-r-40" href="{{route('eventdetails', $event->id)}}">
                                            View Event Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection
