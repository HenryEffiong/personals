@extends('main')

@section('content')

    <main class="font-main main-content">

        <section class="form-bg bottom-green">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 margin-t-80 margin-t-40">
                        <header class=" margin-b-20">
                            <h2 class="txt-xxlg txt-bold txt-color-green-light"></h2>
                        </header>
                        <p class="txt-normal-s txt-height-1-7">
                            {{$setting->contactwriteup}}
                        </p>
                        <div class="margin-t-40">
                            <a class="social-item txt-height-1-7" href="">
                                <i class="fa fa-map-marker fa-fw"></i>
                                <span class="txt-sm txt-color-light">{{$setting->address}}</span>
                            </a>
                            <a class="social-item txt-height-1-4" href="">
                                <i class="fa fa-envelope-o fa-fw"></i>
                                <span class="txt-sm txt-color-light">{{$setting->contact_email1}}</span>
                            </a>

                            <a class="social-item txt-height-1-4" href="">
                                <i class="fa fa-envelope-o fa-fw"></i>
                                <span class="txt-sm txt-color-light"> {{$setting->contact_email2}}</span>
                            </a>

                            <a class="social-item txt-height-1-4" href="">
                                <i class="fa fa-phone fa-fw"></i>
                                <span class="txt-sm txt-color-light">{{$setting->phone}}</span>
                            </a>
                        </div>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href="{{$setting->facebook}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->twitter}}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->instagram}}">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->linkedin}}">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2 padding-tb-40">
                        <div class="box-shadow-form bg-white">
                            <header class="margin-b-20">
                                <h2 class="txt-lg txt-bold txt-color-green-light">{{$setting->contactboxtext}}</h2>
                            </header>
                            <form class="custom-form" action="{{route('savecontact')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-item">
                                    <input name="name" type="text" placeholder="Your Name" required>
                                </div>
                                <div class="form-item">
                                    <input name="subject" type="text" placeholder="Subject" required>
                                </div>
                                <div class="form-item" required>
                                    <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-button">
                                    <input class="full-width" type="submit" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
