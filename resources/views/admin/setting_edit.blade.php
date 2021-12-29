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
                    <h1>Edit Setting</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Edit Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf {{--dışardan birinin bu formu post etmesini engeller--}}

            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-body">
                            <div class="default-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                                        <a class="nav-item nav-link" id="nav-smtp-tab" data-toggle="tab" href="#nav-smtp" role="tab" aria-controls="nav-smtp" aria-selected="false">Smtp Email</a>
                                        <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false">Social Media</a>
                                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About Us</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Page</a>
                                        <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references" aria-selected="false">References</a>
                                    </div>
                                </nav>
                                <div class="tab-content pl-3 pt-2" id="general">
                                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                        <div class="row form-group">
                                            <div class="col-12 col-md-12">  <input type="text" id="id" name="id" value="{{$data->id}}" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" class="form-control" value="{{$data->title}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">Keywords</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keywords" class="form-control" value="{{$data->keywords}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="description" class="form-control" value="{{$data->description}}"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">company</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="company" class="form-control" value="{{$data->company}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">address</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="address" class="form-control" value="{{$data->address}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">phone</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="phone" class="form-control" value="{{$data->phone}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">fax</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="fax" class="form-control" value="{{$data->fax}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">email</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" class="form-control" value="{{$data->email}}"></div>
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
                                    </div>
                                    <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">smtpserver</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="smtpserver" class="form-control" value="{{$data->smtpserver}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">smtpemail</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="smtpemail" class="form-control" value="{{$data->smtpemail}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">smtppassword</label></div>
                                            <div class="col-12 col-md-9"><input type="password"  name="smtppassword" class="form-control" value="{{$data->smtppassword}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">smtpport</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="smtpport" class="form-control" value="{{$data->smtpport}}"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">facebook</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="facebook" class="form-control" value="{{$data->facebook}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">instagram</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="instagram" class="form-control" value="{{$data->instagram}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">twitter</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="twitter" class="form-control" value="{{$data->twitter}}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">youtube</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="youtube" class="form-control" value="{{$data->youtube}}"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class="form-control-label">aboutus</label></div>
                                            <div class="col-12 col-md-9"><textarea name="aboutus" id="aboutus" cols="30" rows="10">{{$data->aboutus}}</textarea></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class="form-control-label">Contact</label></div>
                                            <div class="col-12 col-md-9"><textarea name="contact" id="contact" cols="30" rows="10">{{$data->contact}}</textarea></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label  class=" form-control-label">references</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="references" id="references" cols="30" rows="10">{{ $data->references}}</textarea>
                                            </div>

                                            <script>
                                                $(document).ready(function (){
                                                    $('#aboutus').summernote();
                                                    $('#contact').summernote();
                                                    $('#references').summernote();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>
                    </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update Setting
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
        </form>
    </div>




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
