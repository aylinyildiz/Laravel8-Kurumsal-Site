<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="aylin">

    <!-- Favicons -->
    <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Moderna - v2.0.1
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @yield('css')
    @yield('headerjs')

</head>

<body>

@include('home._header')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
    @include('home._slider')
    </div>

</section>

@section('content')
    <main id="main">
    </main>

@show

@include('home._footer')
@yield('footerjs')
</body>


</html>
