@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="team-member-header">
            <div class="container text-center">
                <h3 class="title txt-2em txt-bold margin-b-20">
                    OLUWATOYOSI ADEKEYE
                </h3>
                <p class="position">
                    FOUNDER & PRESIDENT
                </p>
            </div>
        </section>

        <section class="">
            <div class="row flex-box margin-reset-lr-10">
                <div class="col-xs-12 col-md-4 padding-tb-60 padding-lr-40 bg-grey text-center">
                    <img class="profile-image" src="{{URL::to('member2/'.$member->picture2)}}" alt="" width="55%">
                    <div class="margin-t-20 padding-lr-60">
                        <ul class="pill-list">
                            @foreach($member->titles as $title)
                                <li>{{$title->name}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 padding-tb-60 padding-lr-40">
                    <article class="">
                        <h3 class="txt-lg txt-bold margin-b-20">PROFILE</h3>
                        {{--<p class="txt-normal-s txt-height-1-7 margin-b-20">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum error alias debitis quis accusantium nam architecto reprehenderit, magnam repellat itaque molestias ea nemo, inventore. Possimus nobis error magnam nam amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum error alias debitis quis accusantium nam architecto reprehenderit, magnam repellat itaque molestias ea nemo, inventore. Possimus nobis error magnam nam amet.--}}
                        {{--</p>--}}
                        <p class="txt-normal-s txt-height-1-7 margin-b-20">
                            {{$member->profile}}

                        </p>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection
