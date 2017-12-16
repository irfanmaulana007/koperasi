<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="/" class="navbar-brand"><span class="navbar-logo">Koperasi</span></a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('img/user-3.jpg')}}" alt="" /> 
                    <span class="hidden-xs text-capitalize">{{ Auth::user()->name }}</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    {{-- <li><a href="profile">Edit Profile</a></li> --}}
                    <li class="visible-xs"><a href="profile">{{ Auth::user()->name }}</a></li>
                    {{-- <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li> --}}
                    <li class="divider visible-xs"></li>
                    <li><a href="/logout">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>