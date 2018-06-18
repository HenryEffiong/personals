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
                                Goal
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
                    <li class="active"><a href="{{route('goals')}}">Goal</a></li>
                    <li><a href="{{route('vision')}}">Vision</a></li>
                    <li><a href="{{route('centres')}}">Centres</a></li>
                </ul>
            </div>
        </section>

        <section class="padding-tb-80 txt-color-dark txt-bold">
            <div class="container">
                <div class="col-md-8">
                    <article class="text-box">
                        <p>To provide unrivaled quality and timely integrated healthcare services</p>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection
