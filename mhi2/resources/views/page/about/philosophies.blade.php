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
                                Framing Philosophies
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
                    <h2 class="txt-xlg txt-height-1-7 margin-b-40 txt-italics">
                        “To achieve health equity, close collaboration between the community and health systems is integral in health decision-making and in the discovery of lasting solutions.”
                    </h2>

                    <h2 class="txt-xlg txt-height-1-7 margin-b-40 txt-italics">
                        “High Performing Healthcare Systems promote health, prevent disease, and provide healthcare that is available, affordable, accessible, accountable, timely and of the highest global standard available for all.”
                    </h2>
                </div>
            </div>
        </section>
    </main>
@endsection
