<div id="header" class="header navbar-default  navbar-inverse">

    <div class="navbar-header">
        <a href="{{url('home')}}" class="navbar-brand">
            <!-- <span class="navbar-logo"></span> -->
            <strong>Jhaudia Krishi Ghar</strong>
        </a>
        <!-- <a href="{{ route('logout') }}"
            onclick="event.preventDefault();  document.getElementById('logout-form').submit();"
            class="btn btn-info btn-sm p-4 mr-3"><i class="fa fa-sign-out"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form> -->
    </div>
    <!-- <a class="btn btn-primary text-white" style="padding: 1px 5px;height: 20px;" href="{{url('/')}}"
        target="_blank">Visit Site</a> -->

    <ul class="navbar-nav navbar-right">
        <!-- <li class="navbar-form">
            <form action="#" method="POST" name="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter keyword" />
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </li> -->
        <li class="navbar-user">
            <a href="{{ route('home') }}" class="btn">Home</a>
        </li>
        <li class="navbar-user">
            <a href="{{ route('users') }}" class="btn">Users</a>
        </li>
        <li class="navbar-user">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

</div>