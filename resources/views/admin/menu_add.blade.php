@extends('layouts.admin')

@section('title', 'Add Menu')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Add Menu</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add Menu</li>
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
                    <form action="{{route('admin_menu_create')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf {{--dışardan birinin bu formu post etmesini engeller--}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Parent</label></div>
                            <div class="col-12 col-md-9">
                                <select name="parentid" id="select" class="form-control">
                                    <option value="0" selected="selected">Main Menu</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Keywords</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="keywords" class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="description" class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label  class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select" class="form-control">
                                    <option value="0" selected="selected">False</option>
                                    <option value="1">True</option>
                                </select>
                            </div>
                        </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Add Menu
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
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


@endsection
