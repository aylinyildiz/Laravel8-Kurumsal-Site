@extends('layouts.home')


@section('title', $data->title . " " )


<main id="main">
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2></h2>

                <ol>
                    <li><a href="">Home</a></li>
                    <li><a href="">{!! $data->title !!}</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">{!! $data->title !!}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul style="display: flex;justify-content: space-between;">
                                @php
                                    $avgcomment =  \App\Http\Controllers\HomeController::avgcomment($data->id);
                                    $countcomment = \App\Http\Controllers\HomeController::countcomment($data->id);
                                @endphp
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$data->created_at}}</time></a></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="">{{$countcomment}} Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>

                                @if($data->announcement!=null)
                                    {!! $data->announcement !!}
                                @endif
                                @if($data->news!=null)
                                    {!! $data->news !!}
                                @endif
                                @if($data->activity!=null)
                                    {!! $data->activity !!}
                                @endif

                            </p>
                        </div>

                        <div class="entry-footer clearfix">

                            <div class="float-right share">
                                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                            </div>

                        </div>

                    </article><!-- End blog entry -->


                    <div class="blog-comments">

                        <h4 class="comments-count">{{$countcomment}} Yorum</h4>
                        @foreach($comments as $rs)
                        <div id="comment-1" class="comment clearfix">
                            <img src="{{asset('assets')}}/img/user.png" class="comment-img  float-left" alt="">
                            <h5><a href="">{{$rs->user->name}}</a> </h5>
                            <div style="display: flex; justify-content: space-between">
                                <div>
                                    <time datetime="2020-01-01">{{$rs->created_at->format('d/m/Y')}}</time>
                                </div>
                              <div>
                                  @for ($i = $rs->rate; $i >= 1; $i--)
                                      <i class="fa fa-star text-warning" >☆</i>
                                  @endfor
                                  @for ($i = 5-$rs->rate; $i >= 1; $i--)
                                      <i class="fa fa-star ">☆</i>
                                  @endfor
                              </div>
                            </div>

                            <p>
                                {{$rs->comment}}
                            </p>

                        </div><!-- End comment #1 -->
                        @endforeach
                        @livewireScripts
                        <div class="reply-form">
                            <h4>Yorumunuz</h4>
                            @livewire('comment', ['id' => $data->id])
                        </div>
                    </div><!-- End blog comments -->

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
                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End row -->

        </div><!-- End container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->


