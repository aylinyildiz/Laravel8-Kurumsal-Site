@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Content</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Home/Contact Message</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('home.message')
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Notu</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->message}}</td>
                                <td>{{$rs->note}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin_message_edit', ['id'=> $rs->id])}})}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')" ><i class="fa fa-edit" style="color: #00cc00"></i></a> </td>
                                <td><a href="{{route('admin_message_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="fa fa-trash-o" style="color: #950B02"></i></a></td>
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


@endsection
