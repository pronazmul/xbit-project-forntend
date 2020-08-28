<nav class="navbar fixed-top navbar-expand-lg lightgreen px-5 mb-5">
    <a class="navbar-brand" href="{{url('/')}}"><img class="nav-logo" src="images/navlogo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link nav-font" href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="{{url('/registration')}}">Registration</a>
            </li>
            <li class="nav-item">
            @if(Session::has('name'))
                <a class="nav-link btn btn-danger btn-sm text-light" href="{{url('/logout')}}">Logout</a>
            @else    
                <a class="nav-link nav-font" href="{{url('/login')}}">Login</a>
            @endif
            </li>

        </ul>

    </div>
</nav>

