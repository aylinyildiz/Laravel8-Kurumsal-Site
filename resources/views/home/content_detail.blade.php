@extends('layouts.home')


@section('title', $data->title . " " )


<main id="main">
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{!! $data->title !!}</h2>

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
                            <ul>
                                @php
                                    $avgcomment =  \App\Http\Controllers\HomeController::avgcomment($data->id);
                                    $countcomment = \App\Http\Controllers\HomeController::countcomment($data->id);
                                @endphp
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{!! $data->title !!}</a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$data->created_at}}</time></a></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">{{$countcomment}} Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            {!! $data->announcement !!}
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

                        <h4 class="comments-count">{{$countcomment}} Comments</h4>
                        @foreach($comments as $rs)

                        <div id="comment-1" class="comment clearfix">
                            <img src="{{asset('assets')}}/img/user.png" class="comment-img  float-left" alt="">
                            <h5><a href="">{{$rs->user->name}}</a> </h5>
                            <div style="display: flex; justify-content: space-between">
                                <div>
                                    <time datetime="2020-01-01">{{$rs->created_at}}</time>
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
                            <h4>Write your comment</h4>
                            @livewire('comment', ['id' => $data->id])
                        </div>
                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/recent-posts-1.jpg" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/recent-posts-2.jpg" alt="">
                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/recent-posts-3.jpg" alt="">
                                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/recent-posts-4.jpg" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/recent-posts-5.jpg" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>
                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>

                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End row -->

        </div><!-- End container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->


