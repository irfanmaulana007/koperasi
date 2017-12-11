<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{asset('img/user-3.jpg')}}" alt="" /></a>
                </div>
                <div class="info">
                    <?php
                        $role = DB::table('ms_role')->where('id', Auth::user()->id_role)->first();
                    ?>
                    <span class="text-capitalize">{{ Auth::user()->name }}</span>
                    <small>{{ $role->role_name }}</small>
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
            @if(Auth::user()->id_role == 3)
                <li id="nav-simpan" class="active">
                    <a href="{{ URL::to('simpan') }}">
                        <i class="fa fa-folder-open-o"></i>
                        <span>Simpan</span>
                    </a>
                </li>
                <li id="nav-pinjam" class="active">
                    <a href="{{ URL::to('pinjam') }}">
                        <i class="fa fa-reply-all"></i>
                        <span>Pinjam</span>
                    </a>
                </li>
                <li id="nav-angsur" class="active">
                    <a href="{{ URL::to('angsur') }}">
                        <i class="fa fa-level-up"></i>
                        <span>Angsuran</span>
                    </a>
                </li>
            @endif

            @if(Auth::user()->id_role == 2)
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
                <li id="nav-transaction" class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-book"></i>
                        <span>Transaction</span>
                    </a>
                    <ul class="sub-menu">
                        <li id="subnav-pinjaman-list"><a href="{{ URL::to('pinjaman-list') }}">Pinjaman</a></li>
                        <li id="subnav-angsuran-list"><a href="{{ URL::to('angsuran-list') }}">Angsuran</a></li>
                        <li id="subnav-simpanan-list"><a href="{{ URL::to('simpanan-list') }}">Simpanan</a></li>
                        <li id="subnav-tarikdana-list"><a href="{{ URL::to('tarikdana-list') }}">Tarik Dana Simpanan</a></li>
                    </ul>
                </li>
                <li id="nav-master" class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cogs"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu">
                        <li id="subnav-master-pinjaman"><a href="{{ URL::to('master/pinjaman') }}">Jenis Pinjaman</a></li>
                        <li id="subnav-master-simpanan"><a href="{{ URL::to('master/simpanan') }}">Jenis Simpanan</a></li>
                        <li id="subnav-master-role"><a href="{{ URL::to('master/role') }}">Role</a></li>
                        <li id="subnav-master-status"><a href="{{ URL::to('master/status') }}">Status</a></li>
                    </ul>
                </li>
            @endif
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>