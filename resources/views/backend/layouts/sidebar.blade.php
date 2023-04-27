<div id="sidebar" class="sidebar">

    <div data-scrollbar="true" data-height="100%">

        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="@if(!empty(Auth::user()->image)) {{asset( Auth::user()->image ) }} @else {{asset('img/avatar.png')}} @endif"
                            alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>{{Auth::user()->name}}
                        <small>Admin</small>
                    </div>
                </a>
            </li>

            <li>
                <ul class="nav nav-profile">
                    <li><a href=""><i class="fa fa-user-circle"></i>Profile</a></li>
                    <li><a href=""><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i
                                class="fa fa-sign-out"></i> Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>


        <ul class="nav">
            <li class="nav-header">General</li>
            <li>
                <a href="https://localhost/circle/admin/dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/applications')}}">
                    <i class="fa fa-circle"></i>
                    <span>Applications</span>
                </a>
            </li>
            <!-- <li>
                <a href="{{url('admin/complain')}}">
                    <i class="fa fa-circle"></i>
                    <span>Complain</span>
                </a>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i>
                    <span>Member List</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="https://localhost/circle/admin/reseller/index">Reseller</a></li>
                    <li><a href="https://localhost/circle/admin/admin/index">Admin</a></li>
                </ul>
            </li> -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>

        </ul>

    </div>

</div>
<!-- <div class="sidebar-bg"></div> -->