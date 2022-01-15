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


    <section class="container mb-5 pr-5" style="background-color: white">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11">
                <form action="{{route('user_content_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf {{--dışardan birinin bu formu post etmesini engeller--}}
                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Parent</label></div>
                        <div class="col-12 col-md-9">
                            <select name="menu_id" id="select" class="form-control">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Detail</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="detail" class="form-control"></div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">News</label></div>
                        <div class="col col-md-9">
                            <textarea id="news" name="news" ></textarea>
                            <script>
                                CKEDITOR.replace( 'news' );
                            </script>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Announcement</label></div>
                        <div class="col col-md-9">
                        <textarea id="announcement" name="announcement" ></textarea>
                        <script>
                            CKEDITOR.replace( 'announcement' );
                        </script>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Activity</label></div>
                        <div class="col col-md-9">
                        <textarea id="activity" name="activity"></textarea>
                        <script>
                            CKEDITOR.replace( 'activity' );
                        </script>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Image</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="text-input" name="image" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label  class=" form-control-label">Status</label></div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="select" class="form-control">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add Content
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>


@endsection
