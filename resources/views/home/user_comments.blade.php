@extends('layouts.home')

@section('title', 'Yorumlarım')



@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Yorumlarım</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">Yorumlarım</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->


    <section class="container" style="max-width: 2000px">
        <div class="row  mr-5 ml-5">
            <div class="col-12">
                <table class="table table-striped"  style="border: 1px solid gray">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Content</th>
                        <th>Comment</th>
                        <th>Rate</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.message')
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('content',['id'=>$rs->content->id])}}" target="_blank">
                                    {{$rs->content->title}}
                                </a></td>
                            <td>{{$rs->comment}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at->format('d M Y')}}</td>
                            <td>
                                <a href="{{route('admin_comment_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! are you sure?)')">
                                    <img src="{{asset('assets')}}/img/trash.png" alt="">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>


@endsection
