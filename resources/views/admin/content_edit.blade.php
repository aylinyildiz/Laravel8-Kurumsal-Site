@extends('layouts.admin')

@section('title', 'Edit Content')

@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection


@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Content</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Edit Content</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Basic Form</strong> Elements
                </div>
                <div class="card-body card-block">
                    <form action="{{route('admin_content_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf {{--dışardan birinin bu formu post etmesini engeller--}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Parent</label></div>
                            <div class="col-12 col-md-9">
                                <select name="menu_id" id="select" class="form-control">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"  @if($rs->id == $data->parentid) selected="selected" @endif>
                                            {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" class="form-control" value="{{$data->title}}"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Detail</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="detail" class="form-control" value="{{$data->detail}}"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">News</label></div>
                            <textarea id="news" name="news" >{{$data->news}}</textarea>

                            <script>
                                CKEDITOR.replace( 'news' );
                            </script>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Announcement</label></div>
                            <textarea id="announcement" name="announcement" >{{$data->announcement}}</textarea>
                            <script>
                                CKEDITOR.replace( 'announcement' );
                            </script>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Activity</label></div>
                            <textarea id="activity" name="activity">{{$data->activity}}</textarea>
                            <script>
                                CKEDITOR.replace( 'activity' );
                            </script>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file"  name="image" class="form-control" ></div>
                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" height="60" alt="">
                            @endif
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select" class="form-control" value="{{$data->status}}">
                                    <option value="0" selected="selected">False</option>
                                    <option value="1">True</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update Content
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- .content -->

        <script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/main.js"></script>


        <script src="{{asset('assets')}}/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/jszip/dist/jszip.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="{{asset('assets')}}/admin/assets/js/init-scripts/data-table/datatables-init.js"></script>


@endsection
