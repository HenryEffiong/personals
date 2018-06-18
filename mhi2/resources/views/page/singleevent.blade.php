@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-2 margin-b-20">
                        <div class="padding-tb-20 padding-lr-30 inline-block border-o-1 border-color-white-trans">
                            <div class="margin-b-5">{!! date('M', strtotime($event->date)) !!}</div>
                            <div class="txt-2-6em txt-bold">{!! date('d', strtotime($event->date)) !!}</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <header class=" margin-b-20">
                            <h1 class="txt-2em font-accent txt-regular margin-b-20">
                                {{$event->title}}
                            </h1>
                        </header>
                        {{--<div class="margin-b-20">--}}
                            {{--<ul class="pill-list-sm-white">--}}
                                {{--<li>Charity Event</li>--}}
                                {{--<li>African Health</li>--}}
                                {{--<li>Health Care</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <div class="txt-normal-s txt-color-white margin-b-20">
                            <p class="margin-b-5">
                                <i class="fa fa-map-marker padding-r-10"></i>
                                {{$event->venue}}
                            </p>
                            <p class="">
                                <i class="fa fa-clock-o padding-r-10"></i>
                                {{$event->time}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-tb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <article class="text-box">
                                {{$event->description}}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
