@extends('layouts.home')

@section('title', $search . "Content List" )


@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2> </h2>
                <ol>
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="{{$search}}"></a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <section class="blog"  data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach($datalist as $rs)
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid" style="width: 100%">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{route('contentdetail', ['id' => $rs->id])}}">{{$rs->title}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul style="display: flex;justify-content: space-between;">
                                    @php
                                        $avgcomment =  \App\Http\Controllers\HomeController::avgcomment($rs->id);
                                        $countcomment = \App\Http\Controllers\HomeController::countcomment($rs->id);
                                    @endphp
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="">

                                        </a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                            href="">{{$countcomment}} Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! $rs->announcement !!}
                                </p>
                                <div class="read-more">
                                    <a href="{{route('contentdetail', ['id' => $rs->id])}}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    @endforeach

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row mb-2">
                            <div class="col-md-2">
                                <img src="{{asset('assets')}}/img/takvim.png" alt="">
                            </div>
                            <div class="col-md-9">
                                <h3 class="sidebar-title">Etkinlikler</h3>
                            </div>
                        </div>
                        <hr>
                        @foreach($activities as $rs)
                            <div class="post-item clearfix mt-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset('assets')}}/img/schedule.png" alt="" >
                                    </div>
                                    <div class="col-md-9">
                                        <h6><a href="{{route('contentdetail', ['id' => $rs->id])}}">{{$rs->title}}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div><!-- End blog sidebar -->

            </div><!-- End .row -->

        </div><!-- End .container -->

    </section><!-- End Blog Section -->



@endsection

