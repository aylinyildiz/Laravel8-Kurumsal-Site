@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp

<nav class="nav-menu float-right d-none d-lg-block">
    <ul>
        @foreach($parentMenus as $rs)
            <li class="drop-down"><a href="#">{{$rs->title}}</a>
                @if(count($rs->children))
                    @include('menutree', ['children'=> $rs->children])
                @endif
            </li>
        @endforeach
    </ul>
</nav><!-- .nav-menu -->
