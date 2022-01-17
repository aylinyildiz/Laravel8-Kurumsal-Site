@extends('layouts.home')

@section('title', $data->title . " " )

@section('slider')

@endsection
@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2></h2>
                <ol>
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="">{{$data->title}}</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= About Section ======= -->
    <section class="about">
        <div class="container" style="background-color: white">
            <div class="row pt-3 pb-3" style="display: flex; justify-content: center;">
                {{--  <img src="{{ Storage::url($data->image)}}" style="width: 600px; height: 400px" class="img-fluid" alt="">--}}
            </div>
            <div class="row  pl-5 pr-5 pb-5">

                @if($data->announcement!=null)
                    {!! $data->announcement !!}
                @endif
                @if($data->news!=null)
                    {!! $data->news !!}
                @endif
                @if($data->activity!=null)
                    {!! $data->activity !!}
                @endif
            </div>
            <hr>
            <div class="row pb-4 ">
                <p>
                    <small> <b> Eklenme Zamanı:</b> {{$data->created_at->format('d/m/Y')}}</small>
                </p>

            </div>

        </div>
    </section><!-- End About Section -->


@endsection

