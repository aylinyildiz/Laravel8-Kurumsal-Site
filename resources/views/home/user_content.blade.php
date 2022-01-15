@extends('layouts.home')

@section('title', 'Contents')

@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Content</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">User Content</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <div class="content mt-3">
        <div class="col-md-12">
            <div class="container">
                <div class="mb-2">
                    <a href="{{route('user_content_add')}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Add Content</a>
                </div>
                <div>
                    <table class="table table-striped mb-5 " style="border: 1px solid #dee2e6; ">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Menu </th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>News</th>
                            <th>Announcement</th>
                            <th>Activity</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr style="overflow: hidden;height: 60px;">
                                <td>{{$rs->id}}</td>
                                <td>
                                    {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu, $rs->menu->title)}}
                                </td>
                                <td>{{$rs->title}}</td>
                                <td>{{Str::limit($rs->detail,50)}}</td>
                                <td>{{Str::limit($rs->news,50)}}</td>
                                <td>{{Str::limit($rs->announcement,50)}}</td>
                                <td>{{Str::limit($rs->activity,50)}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">

                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user_image_add', ['content_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700') ">
                                        <img src="{{asset('assets')}}/img/image.png" alt="">
                                    </a>
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('user_content_edit', ['id'=> $rs->id])}})}}" ><img src="{{asset('assets')}}/img/edit.png" alt=""></a> </td>
                                <td><a href="{{route('user_content_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets')}}/img/trash.png" alt=""></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- .content -->


@endsection

