<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('css')
    @yield('javascript')
</head>

<body>
@include('admin._leftpanel')
<div id="right-panel" class="right-panel">
    @include('admin._header')

   @yield('content')


   {{-- @section('content')
        @include('admin._header')
    @endsection--}}

</div>


<script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/main.js"></script>


<script src="{{asset('assets')}}/admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/dashboard.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/widgets.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>


</body>
</html>
