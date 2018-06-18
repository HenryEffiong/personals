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
                                About MHI
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                            {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="padding-tb-80 txt-color-dark txt-bold">
            <div class="container">
                <div class="col-md-8">
                    <article class="text-box">
                        <p class="txt-normal-s txt-height-1-7 margin-b-20">
                            Medela Healthcare Initiative (MHI) is a not-for-profit organization established in 2017 in Abuja, Nigeria, and incorporated with the Corporate Affairs Commission (CAC) of Nigeria as a charity organization with registration number CAC/IT/NO 102565. The Organization is aimed at addressing the health needs of disadvantaged individuals, particularly, those who reside in rural communities with limited access to quality healthcare services.
                        </p>
                        <p class="txt-normal-s txt-height-1-7 margin-b-20">
                            The MHI is built on six pillars, namely; Quality and timely Clinical Care; Preventive Health and Health Promotion; Health Advocacy and Policy; Community Engagement; fund development; and Healthcare Research.
                        </p>
                        <p class="txt-normal-s txt-height-1-7 margin-b-20">
                        MHI is governed by a Board of Trustees (BoTs) while routine activities are managed by Professional Staff that reflect our corporate policy of inclusivity.
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection
