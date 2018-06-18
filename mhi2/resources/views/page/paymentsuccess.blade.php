@extends('main')

@section('content')

    <main class="main-content font-main">



        <section class="txt-align-center padding-tb-80 padding-lr-15 bg-grey">
            <div class="container bg-white padding-o-40">
                <header class="padding-b-15">
                    <h3 class="txt-color-green txt-4em">
                        <i class="fa fa-gift"></i>
                    </h3>
                    <h1 class="txt-xlg padding-b-10">Your donation has been received</h1>
                    <h2 class="title-lg  txt-color-dark">Thank you for your support!</h2>
                </header>
                <article class="txt-light padding-tb-20">
                    {{--<p class="">Your transaction number is: <span class="txt-regular">XXXXXXXXXX</span></p>--}}
                    {{--<p class="txt-sm txt-regular">An order confirmation email has been sent to you, with details of your purchase and a link to track your order's progress</p>--}}
                </article>
                <a href="{{route('homepage')}}" class="btn btn-green">
                    <i class="fa fa-arrow-left"></i>
                    <span class="padding-l-5">
                        Return home
                    </span>
                </a>
            </div>
        </section>
    </main>
@endsection
