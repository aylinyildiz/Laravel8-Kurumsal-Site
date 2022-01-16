@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp

{{--anasayfa dışındaki header rengi ayarlandı--}}
<header id="header" class="fixed-top header-transparent" @if(!isset($page)) style="background-color: #1e4356;" @endif>

    <div class="logo float-left">
        <h1 class="text-light"><a href="{{route('home')}}"><span>Kurumsal Site</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>


    <nav class="nav-menu float-right d-none d-lg-block mr-5">
        <ul>
            <li><a href="">Anasayfa</a></li>
            <li class="drop-down"><a href="">Birimler</a>
                <ul>
                    @foreach($parentMenus as $rs)
                        <li class="drop-down"><a href="#">{{$rs->title}}</a>
                            @if(count($rs->children))
                                @include('home.menutree', ['children'=> $rs->children])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="">Galeri</a></li>
            <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
            <li><a href="{{route('references')}}">Referanslar</a></li>
            <li><a href="{{route('faq')}}">Sık Sorulan Sorular</a></li>
            <li><a href="{{route('contact')}}">İletişim</a></li>


            @auth
                <li class="drop-down"><a href="#">{{Auth::user()->name}}</a>
                    <ul>
                        <li><a href="{{route('myaccount')}}">Hesabım</a></li>
                        <li><a href="{{route('mycomments')}}">Yorumlarım</a></li>
                        <li><a href="{{route('user_contents')}}">İçeriklerim</a></li>
                        @php
                            $userRoles = Auth::user()->roles->pluck('name');
                        @endphp
                        @if (!$userRoles->contains('admin')){
                        <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
                        @endif
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
            @endauth
            @guest
                <li class="drop-down"><a href="#">Giriş</a>
                    <ul>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </li>
            @endguest
            <li>
                <form action="{{route('getcontent')}}" method="post" class="d-flex ml-3">
                    @csrf
                    @livewire('search')
                    <button type="submit" class="btn" style="background-color: #29566B; color: white;  ">Search</button>
                </form>

                    @livewireScripts

            </li>

        </ul>
    </nav><!-- .nav-menu -->


</header><!-- End Header -->
