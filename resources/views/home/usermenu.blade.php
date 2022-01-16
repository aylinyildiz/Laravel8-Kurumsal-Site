{{--kullanılmıyor--}}
<div class="sidebar">
    <h3 class="sidebar-title">Categories</h3>
    <div class="sidebar-item categories">
        <ul>
            <li><a href="#">Hesabım </a></li>
            <li><a href="#">Mesajlar </a></li>
            <li><a href="{{route('logout')}}">Çıkış </a></li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if (!$userRoles->contains('admin')){
            <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
            @endif
        </ul>
    </div><!-- End sidebar categories-->
</div><!-- End sidebar -->

