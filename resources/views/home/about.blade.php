@extends('layouts.home')

@section('title', 'About Us - ' . $setting->title)

@section('slider')

@endsection

@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Profile</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('myaccount')}}">About Us</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">
                {{--Html tagları gelmemesi için yapıldı--}}
                {!! $setting->aboutus !!}
            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
