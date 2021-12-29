@extends('layouts.home')

@section('title', 'User Profile')

@section('slider')

@endsection

@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Profile</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('myaccount')}}">User Profile</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact"  >
        <div class="container">

            <div class="row">
                @include('profile.show')
            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
