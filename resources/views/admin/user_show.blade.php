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
                    <strong>User Detail</strong>
                    @include('home.message')
                </div>
                <div class="card-body card-block">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <tr>
                            <th rowspan="8" style="align-items: center">
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                @endif

                            </th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Adress</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete', ['userid' => $data->id, 'roleid'=>$row->id])}}"
                                                   onclick="return !window.open(this.href, '','top=50 left=100 width=800, height=600')"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form action="{{route('admin_user_roles_add', ['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </form>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- .content -->

    </div>
</div>
