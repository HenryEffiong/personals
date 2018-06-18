@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-8">
                        <header class=" margin-b-20">
                            <h1 class="txt-2em font-accent txt-regular margin-b-20">
                                {{$list->title}}
                            </h1>
                        </header>
                        {{--<div class="margin-b-20">--}}
                            {{--<ul class="pill-list-sm-white">--}}
                                {{--<li>Charity Event</li>--}}
                                {{--<li>African Health</li>--}}
                                {{--<li>Health Care</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
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
                                {!! $list->description !!}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
