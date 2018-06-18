@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h4 class="font-accent txt-regular margin-b-20">
                                Preventive Health Care Services
                            </h4>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                Services
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                        {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="padding-tb-80">
            <div class="container">
                <div class="col-md-8">
                    {{--some of the lists have external links while the others have thier own description a conditional statement accomodates that here. Therefore the link directs users based on respective link or description--}}
                    @foreach($lists as $index =>$list)
                        <div class="numbered-bucket-circle margin-b-40">
                            <div class="number">
                                <span> {{$index + 1}}</span>
                            </div>
                            @if($list->link)
                                <h2 class="font-accent txt-color-green-light txt-xlg txt-regular txt-height-1-4 margin-b-20">
                                    <a href="{{$list->link}}">{{$list->title}}</a>
                                </h2>
                            @else
                                <h2 class="font-accent txt-color-green-light txt-xlg txt-regular txt-height-1-4 margin-b-20">
                                    <a href="{{route('listdetails', $list->id)}}">{{$list->title}}</a>
                                </h2>
                            @endif
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
