@extends('layouts.home')

@section('title', $setting->title)

@section('description'){{$setting->description}} @endsection


@section('keywords', $setting->keywords)

@section('slider')
    @include('home._slider')
@endsection

@section('content')


    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="section-title">
            <h2>Haberler</h2>
        </div>
        <div class="container">


            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{Storage::url( $news->first()->image)}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    @foreach($news as $rs)

                            <div class="icon-box">
                                <a class="text-decoration-none text-black-50" href="{{route('homedetail', ['id'=>$rs->id])}}">
                                <div class="icon"><img src="{{Storage::url( $rs->image)}}" class="img-fluid" alt="">
                                </div>
                                <h4 class="title">{{$rs->title}}</h4>
                                <p class="description">{{$rs->detail}}</p>
                                </a>
                            </div>

                    @endforeach

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Duyurular</h2>
            </div>
            <!-- ======= Services Section ======= -->
            <section class="services">
                <div class="container">
                    <div class="row">
                        @foreach($slider as $rs )
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                                <div class="icon-box icon-box-cyan">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4 class="title"><a
                                            href="{{route('homedetail', ['id'=>$rs->id])}}">{{$rs->title}}</a></h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias
                                        excepturi sint occaecati cupiditate non provident</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Services Section -->


        </div>
    </section><!-- End Features Section -->

@endsection

