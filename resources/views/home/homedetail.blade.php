@extends('layouts.home')

@section('title', $data->title . " " )

@section('slider')

@endsection
@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{$data->title}}</h2>
                <ol>
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="">{{$data->title}}</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= About Section ======= -->
    <section class="about" >
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ Storage::url($data->image)}}" style="width: 600px; height: 400px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  {!! $data->announcement !!}
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


@endsection

