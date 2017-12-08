<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    Sean Ngu
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="sidenav nav">
            <li class="nav-header">Navigation</li>
            <li id="nav-dashboard" class="active">
                <a href="/">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li id="nav-master" class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Master</span>
                </a>
                <ul class="sub-menu">
                    <li id="subnav-master-pinjaman"><a href="{{ URL::to('master/pinjaman') }}">Pinjaman</a></li>
                    <li id="subnav-master-role"><a href="{{ URL::to('master/role') }}">Role</a></li>
                    <li id="subnav-master-simpanan"><a href="{{ URL::to('master/simpanan') }}">Simpanan</a></li>
                    <li id="subnav-master-status"><a href="{{ URL::to('master/status') }}">Status</a></li>
                </ul>
            </li>
            <li id="nav-user" class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-user"></i>
                    <span>User</span>
                </a>
                <ul class="sub-menu">
                    <li id="subnav-staff-list"><a href="{{ URL::to('staff') }}">Staff List</a></li>
                    <li id="subnav-user-list"><a href="{{ URL::to('user') }}">User List</a></li>
                </ul>
            </li>
            <li id="nav-auth" class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-unlock-alt"></i>
                    <span>Auth</span>
                </a>
                <ul class="sub-menu">
                    <li id="subnav-login"><a href="login">login</a></li>
                    <li id="subnav-register"><a href="register">register</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>