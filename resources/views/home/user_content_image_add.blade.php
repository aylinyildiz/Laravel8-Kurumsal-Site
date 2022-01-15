<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
</head>
<body>
<div class="content mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{route('user_image_store', ['content_id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data" class="form-horizontal">
                    @csrf {{--dışardan birinin bu formu post etmesini engeller--}}

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="title"
                                                            class="form-control"></div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Image</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="text-input" name="image"
                                                            class="form-control"></div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add Image
                        </button>
                    </div>
                </form>

                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('user_image_delete', ['id'=> $rs->id, 'content_id'=>$data->id])}}"
                                   onclick="return confirm('Delete! Are you sure?')"><i class="fa fa-trash-o"
                                                                                        style="color: #950B02"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

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
</body>
</html>

