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

    {{--  <div>
          <form action="{{route('getcontent')}}" method="post">
              @csrf
              @livewire('search')
              <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
          </form>
          @livewireScripts
      </div>
  --}}
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
            <li><a href="">Hakkımızda</a></li>
            <li><a href="">Referanslar</a></li>
            <li><a href="">İletişim</a></li>


            @auth
                <li class="drop-down"><a href="#">{{Auth::user()->name}}</a>
                    <ul>
                        <li><a href="{{route('myaccount')}}">Hesabım</a></li>
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

        </ul>
    </nav><!-- .nav-menu -->


</header><!-- End Header -->
