@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h2 class="txt-sm txt-black txt-color-green margin-b-10">COMMUNITY ENGAGEMENT</h2>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                Our Collaborators and Partners
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
                    <li><a href="community_programs.html">Programs</a></li>
                    <li><a href="community_trainings.html">Trainings</a></li>
                    <li class="active"><a href="community_partnerships.html">
                            Collaborators and Partners
                        </a></li>
                </ul>
            </div>
        </section>

        <section class="padding-tb-80">
            <div class="container">
                <div class="row margin-reset-lr-40">
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="images/people/oneman.jpg" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    Dr. John Doe, CHief Medical Officer, National Hospital Aboja
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae accusantium, corporis accusamus nam, quidem, quis alias minus sit reprehenderit aut, optio laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="images/blog/1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    John Hopkins Hospital, Aboja
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae accusantium, corporis accusamus nam, quidem, quis alias minus sit reprehenderit aut, optio laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-reset-lr-40">
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="images/vendors/google.png" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    Google Corporation
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae accusantium, corporis accusamus nam, quidem, quis alias minus sit reprehenderit aut, optio laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="images/people/onewoman.png" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    John Hopkins Hospital, Aboja
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae accusantium, corporis accusamus nam, quidem, quis alias minus sit reprehenderit aut, optio laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-t-80">
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
        </section>
    </main>
@endsection
