@extends('main')

@section('content')

    <main class="font-main main-content">
        <section class="bg-white padding-tb-80">
            <div class="container">
                <header>
                    <h1 class="txt-2em txt-regular">Board of Trustees</h1>
                </header>
            </div>
        </section>
        <section class="">
            <div class="">
                <div class="row">
                    <div class="col-md-6 padding-o-10-percent bg-grey">
                        <h2 class="txt-xlg txt-regular txt-color-light txt-height-1-4">
                            Meet our board of trustees
                        </h2>
                    </div>
                    @foreach($members as $member)
                        <a class="col-md-3 padding-b-20" href="{{route('singlestaff', $member->id)}}">
                            <div class="team-image" style="background-image:url('member2/{{$member->picture2}}');">

                            </div>
                            <div class="padding-tb-40 padding-lr-20">
                                <h2 class="txt-lg margin-b-5 txt-color-light">
                                    {{$member->title}}
                                </h2>
                                <h2 class="txt-lg txt-bold txt-color-default">
                                    {{$member->name}}
                                </h2>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
