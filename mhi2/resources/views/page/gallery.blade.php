@extends('main')

@section('content')

    <main class="main-content font-main">
        <section class="page-banner-section bg-grey font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content txt-color-white">
                    <div class="col-md-11">
                        <header class=" margin-b-20">
                            <h2 class="txt-sm txt-black txt-color-green margin-b-10">RESOURCES</h2>
                            <h1 class="txt-3em font-accent txt-regular margin-b-20">
                                GALLERY
                            </h1>
                        </header>
                        {{--<p class="txt-normal-s txt-height-1-7">--}}
                        {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="font-main txt-dark margin-tb-80">
            <div class="container">
                <div class="masonry margin-b-80">
                    @foreach($galleries as $gallery)
                    <a class="project-item" href="{{URL::to('gallery/'.$gallery->picture)}}" data-lightbox="gallery" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="{{URL::to('gallery/'.$gallery->picture)}}" alt=""/>
                    </a>
                    @endforeach

                </div>
                <div class="row">
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



