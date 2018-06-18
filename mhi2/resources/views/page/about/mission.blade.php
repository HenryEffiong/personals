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
                                Mission
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
                    <div class="numbered-bucket margin-b-40">
                        <div class="number">1</div>
                        <p class="txt-lg">
                            To address health disparities that disproportionately affect underserved populations in Nigeria by bridging existing gaps in quality healthcare utilization.
                        </p>
                    </div>
                    <div class="numbered-bucket margin-b-40">
                        <div class="number">2</div>
                        <p class="txt-lg">
                            To improve the general health and wellbeing of individuals and communities in Nigeria
                        </p>
                    </div>


                    <div class="numbered-bucket">
                        <div class="number">3</div>
                        <p class="txt-lg">
                            To address primary healthcare through programs in education, research, and service
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
