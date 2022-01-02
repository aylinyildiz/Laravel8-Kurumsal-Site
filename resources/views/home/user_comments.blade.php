@extends('layouts.home')

@section('title', 'User Profile')



@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Profile</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">User Profile</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container">

            <div class="row">
                @include('home.usermenu')
            </div>

        </div>
    </section><!-- End Contact Section -->
    <section class="contact">
        <div class="container">
            <table>
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
                        <td>{{$rs->created_at}}</td>
                        <td>
                            <a href="{{route('admin_comment_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! are you sure?)')"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>


@endsection
