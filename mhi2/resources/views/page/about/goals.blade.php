@extends('main')

@section('content')

    <main class="main-content font-main">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h2 class="txt-sm txt-black txt-color-green margin-b-10">ABOUT MHI</h2>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                Goals
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                            {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="col-md-12">
                    <div class="row is-flex">
                        <figure class="col-md-4 text-center padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
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
                        <figure class="col-md-4 text-center padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
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
                        <figure class="col-md-4 text-center padding-lr-40 padding-tb-40  border-b-1 border-color-darkgrey">
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
                        <figure class="col-md-4 tech-box padding-lr-40 padding-tb-40 border-r-1 border-b-1 border-color-darkgrey">
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

                        <figure class="col-md-4 tech-box padding-lr-40 padding-tb-40 border-b-1 border-r-1 border-color-darkgrey">
                            <img class="margin-b-10" src="images/icons/services/community.png" width="70" alt="">
                            <figurecaption>
                                <h3 class="txt-normal-s txt-bold margin-b-10">
                                    COMMUNITY ENGAGEMENT
                                </h3>
                                <p class="txt-sm">
                                    To educate, mobilize and motivate communities in changing health behavior, improving environmental health, and influencing policies that support community health
                                </p>
                            </figurecaption>
                        </figure>
                        <figure class="col-md-4 tech-box padding-lr-40 padding-tb-40 border-b-1 border-color-darkgrey">
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
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
