@extends('layouts.home')

@section('title', 'Frequently asked question')


@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>SSS</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('faq')}}">Sık Sorulan Sorular</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            @foreach($datalist as $rs)
                <h2>{{$rs->question}}</h2>
                <p> {!! $rs->answer !!}</p>
                <hr>
                @endforeach

        </div>
    </section><!-- End Contact Section -->
@endsection
