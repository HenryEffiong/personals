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
                    <li><a href="{{route('program')}}">Programs</a></li>
                    <li><a href="{{route('training')}}">Trainings</a></li>
                    <li class="active"><a href="{{route('collaborationpartnership')}}">
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
                                    <img src="{{URL::to('images/logos/ahf.png')}}" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    AIDS Healthcare Foundation (AHF)
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    AIDS Healthcare Foundation (AHF) is an international not for profit NGO, with its Headquarters based in Los Angeles, California.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="{{URL::to('images/logos/moorehouse.png')}}" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    Morehouse School of Medicine (MSM)
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Morehouse School of Medicine (MSM) trains physicians, biomedical scientists and public health practitioners to improve the health and well-being of people of color and the underserved urban and rural populations in Georgia and the nation
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
                                    <img src="{{URL::to('images/logos/shl.png')}}" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    Satcher Health Leadership Institute (SHLI)
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    The mission of the Satcher Health Leadership Institute is to develop a diverse group of exceptional health leaders, advance and support comprehensive health system strategies, and actively promote policies and practices that will reduce and ultimately eliminate disparities in health.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 padding-lr-40 margin-b-40">
                        <div class="row margin-reset-lr-20">
                            <div class="col-xs-4 padding-lr-20">
                                <figure class="margin-b-10">
                                    <img src="{{URL::to('images/logos/africare.png')}}" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8 padding-lr-20">
                                <h2 class="txt-xg txt-color-dark txt-bold txt-height-1-4 margin-b-20">
                                    Africare Nigeria
                                </h2>
                                <p class="txt-sm txt-height-1-7">
                                    Africare began operations in Nigeria in 1978. Since that time, Africare has invested in Nigeria's communities through projects addressing… Agriculture & Food Security; HIV & AIDS; Family Planning; Literacy; Malaria Control; Maternal and Child Health; Nutrition; Orphans and Vulnerable Children; Reproductive Health etc
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
