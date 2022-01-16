<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #272c33; border-color: #272c33; ">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('admin_home')}}"><img src="{{asset('assets')}}/admin/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{route('admin_home')}}"><img src="{{asset('assets')}}/admin/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('admin_home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title"></h3><!-- /.menu-title -->

                <li>
                    <a href="{{route('admin_menu')}}"> <i class="menu-icon fa fa-tasks"></i>Menu </a>
                </li>
                <li>
                    <a href="{{route('admin_contents')}}"> <i class="menu-icon fa fa-tasks"></i>Contents </a>
                </li>
                <li>
                    <a href="{{route('admin_setting')}}"> <i class="menu-icon fa fa-cogs"></i>Setting </a>
                </li>
                <li>
                    <a href="{{route('admin_message')}}"> <i class="menu-icon fa fa-envelope-o"></i>Contact Messages </a>
                </li>
                <li>
                    <a href="{{route('admin_comment')}}"> <i class="menu-icon fa fa-comments"></i>Comments</a>
                </li>
                <li>
                    <a href="{{route('admin_users')}}"> <i class="menu-icon fa fa-user"></i>Users</a>
                </li>
                <li>
                    <a href="{{route('admin_faq')}}"> <i class="menu-icon fa fa-question-circle"></i>FAQ</a>
                </li>


                <h3 class="menu-title"></h3><!-- /.menu-title -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
