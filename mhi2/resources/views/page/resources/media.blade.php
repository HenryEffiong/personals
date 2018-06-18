@extends('main')

@section('content')

    <main class="bg-white">

        <section class="page-banner-section-2 bg-grey font-main">
            <div class="container">
                <div class="row content">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h1 class="txt-3em txt-color-dark font-accent txt-regular margin-b-20">
                                Media & Downloads
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                            {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="margin-t-80 margin-b-40 font-main txt-lg">
            <div class="container">
                <div class="col-md-11">
                    <div class="row margin-reset-lr-40">
                        <div class="col-md-3 padding-lr-40">
                            <h2 class="txt-lg margin-b-40">Sort by:</h2>
                            <div class="margin-b-40">
                                <h3 class="txt-sm txt-bold margin-b-20">CONTENT TYPE</h3>
                                <ul>
                                    <li class="row txt-sm">
                                        <div class="col-xs-8"><p><a href="">Webinars</a></p></div>
                                        <div class="col-xs-4 txt-align-right"><p>136</p></div>
                                    </li>
                                    <li class="row txt-sm">
                                        <div class="col-xs-8"><p><a href="">Interviews</a></p></div>
                                        <div class="col-xs-4 txt-align-right"><p>136</p></div>
                                    </li>
                                    <li class="row txt-sm">
                                        <div class="col-xs-8"><p><a href="">Articles</a></p></div>
                                        <div class="col-xs-4 txt-align-right"><p>136</p></div>
                                    </li>
                                    <li class="row txt-sm">
                                        <div class="col-xs-8"><p><a href="">Podcast</a></p></div>
                                        <div class="col-xs-4 txt-align-right"><p>136</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 padding-lr-40">
                            <article class="row margin-reset-lr-20 margin-b-20">
                                <div class="col-md-3 padding-lr-20 margin-b-20">
                                    <img src="{{URL::to('images/blog/1.jpg')}}" alt="">
                                </div>
                                <div class="col-md-9 padding-lr-20">
                                    <header class="">
                                        <h2 class="txt-sm txt-color-lighter margin-b-10">Content type - Source - January 13, 2018</h2>
                                        <h1 class="font-accent txt-lg txt-height-1-2 txt-regular txt-color-orange-dark">
                                            <a href="">
                                                Strategy Consulting - Corporate Strategy, Planning & Innovation
                                            </a>
                                        </h1>
                                    </header>
                                    <article class="txt-color-light padding-b-40">
                                        <p class="txt-sm txt-height-1-7 padding-b-20">
                                            Applying our deep market sector insights and collective design, consultancy, engineering, project and management services.
                                        </p>
                                    </article>
                                </div>
                            </article>
                            <article class="row margin-reset-lr-20 margin-b-20">
                                <div class="col-md-3 padding-lr-20 margin-b-20">
                                    <img src="{{URL::to('images/blog/2.jpg')}}" alt="">
                                </div>
                                <div class="col-md-9 padding-lr-20">
                                    <header class="">
                                        <h2 class="txt-sm txt-color-lighter margin-b-10">Content type - Source - January 13, 2018</h2>
                                        <h1 class="font-accent txt-lg txt-height-1-2 txt-regular txt-color-orange-dark">
                                            <a href="">
                                                Strategy Consulting - Corporate Strategy, Planning & Innovation
                                            </a>
                                        </h1>
                                    </header>
                                    <article class="txt-color-light padding-b-40">
                                        <p class="txt-sm txt-height-1-7 padding-b-20">
                                            Applying our deep market sector insights and collective design, consultancy, engineering, project and management services.
                                        </p>
                                    </article>
                                </div>
                            </article>
                            <article class="row margin-reset-lr-20 margin-b-20">
                                <div class="col-md-3 padding-lr-20 margin-b-20">
                                    <img src="{{URL::to('images/blog/3.jpg')}}" alt="">
                                </div>
                                <div class="col-md-9 padding-lr-20">
                                    <header class="">
                                        <h2 class="txt-sm txt-color-lighter margin-b-10">Content type - Source - January 13, 2018</h2>
                                        <h1 class="font-accent txt-lg txt-height-1-2 txt-regular txt-color-orange-dark">
                                            <a href="">
                                                Strategy Consulting - Corporate Strategy, Planning & Innovation
                                            </a>
                                        </h1>
                                    </header>
                                    <article class="txt-color-light padding-b-40">
                                        <p class="txt-sm txt-height-1-7 padding-b-20">
                                            Applying our deep market sector insights and collective design, consultancy, engineering, project and management services.
                                        </p>
                                    </article>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <article class="pagination-wrapper">
                            <ul>
                                <li><a href="">1</a></li>
                                <li><span class="current">2</span></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">6</a></li>
                                <li><a href="">7</a></li>
                                <li><a href="">8</a></li>
                                <li><a href="">9</a></li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
