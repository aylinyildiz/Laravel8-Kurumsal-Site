<ul>
    @foreach($children as $submenu)

        @if(count($submenu->children))
            <li class="drop-down">
                {{$submenu->title}}
                @include('home.menutree', ['$children'=>$submenu->$children])
            </li>
        @else
            <li><a href="{{route('menucontent', ['id'=>$submenu->id])}}">{{$submenu->title}}</a></li>
        @endif

    @endforeach
</ul>
