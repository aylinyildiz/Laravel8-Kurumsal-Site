@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp


<header id="header" class="fixed-top header-transparent">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="index.html"><span>Kurumsal Site</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                @foreach($parentMenus as $rs)
                    <li class="drop-down"><a href="#">{{$rs->title}}</a>
                        @if(count($rs->children))
                            @include('home.menutree', ['children'=> $rs->children])
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav><!-- .nav-menu -->


    </div>
</header><!-- End Header -->
