@extends('layouts.home')

@section('title', $setting->title)

@section('description'){{$setting->description}} @endsection


@section('keywords', $setting->keywords)

@section('slider')
    @include('home._slider')
@endsection

@section('content')


    <section class="why-us section-bg">
        <div class="section-title">
            <h2>Duyurular</h2>
        </div>
        <div class="container p-5">
            <div class="row">
                {{--<div class="col-lg-6 video-box">
                    <img src="{{Storage::url( $news->first()->image)}}" class="img-fluid" alt="">
                </div>--}}
                @foreach($announcement as $rs)
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="icon-box">
                            <a class="text-decoration-none text-black-50"
                               href="{{route('homedetail', ['id'=>$rs->id])}}">
                                <div
                                    class="row">{{--<img src="{{Storage::url( $rs->image)}}" class="img-fluid" alt="">--}}
                                    <div class="col-md-2">
                                        <img src="{{asset('assets')}}/img/megaphone.png" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h6>{{$rs->title}}</h6>
                                        <hr>
                                    </div>
                                </div>
                                {{--   <p class="description">{{$rs->detail}}</p>--}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Why Us Section -->


    <section class="why-us section-bg">
        <div class="section-title">
            <h2>Etkinlikler</h2>
        </div>
        <div class="container p-5">
            <div class="row">
                {{--<div class="col-lg-6 video-box">
                    <img src="{{Storage::url( $news->first()->image)}}" class="img-fluid" alt="">
                </div>--}}
                @foreach($activity as $rs)
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="icon-box">
                            <a class="text-decoration-none text-black-50"
                               href="{{route('homedetail', ['id'=>$rs->id])}}">
                                <div
                                    class="row">{{--<img src="{{Storage::url( $rs->image)}}" class="img-fluid" alt="">--}}
                                    <div class="col-md-2">
                                        <img src="{{asset('assets')}}/img/calendar.png" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h6>{{$rs->title}}</h6>
                                        <hr>
                                    </div>
                                </div>
                                {{--   <p class="description">{{$rs->detail}}</p>--}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="services">
        <div class="">
            <div class="section-title">
                <h2>Haberler</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        @foreach($news as $rs)
                            <div class="post-slide">
                                <div class="post-img" style="display: flex;justify-content: center; align-items: center;">
                                    <img src="{{Storage::url( $rs->image)}}" alt="" style="width: 90%; height: 250px !important;">
                                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="{{route('homedetail', ['id'=>$rs->id])}}">{{$rs->title}}</a>
                                    </h3>
                                    <p class="post-description"></p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>{{$rs->created_at->format('d/m/Y')}}</span>
                                    <a href="{{route('homedetail', ['id'=>$rs->id])}}" class="read-more">Devamı</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@section('footerjs')
    <script>
        $(document).ready(function () {
            $("#news-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["", ""],
                pagination: true,
                autoPlay: true
            });
        });
    </script>
@endsection



