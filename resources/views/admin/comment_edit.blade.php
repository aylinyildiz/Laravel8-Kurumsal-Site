<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/venobox/venobox.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet">


<div class="breadcrumbs">
    <div class="content mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Comments </strong>
                    @include('home.message')
                </div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_comment_update', ['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td>{{$data->content->title}}</td>
                            </tr>
                            <tr>
                                <th>Comment</th>
                                <td>{{$data->comment}}</td>
                            </tr>
                            <tr>
                                <th>Rate</th>
                                <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th>IP</th>
                                <td>{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Güncelle</button>
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
        </div> <!-- .content -->

