<div class="container">
    <nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <span class="navbar-brand">ScotSki</span>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ URL::to('home') }}">Home</a></li>
                <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="{{ URL::to('posts') }}">Update Homepage</a></li>
                <li class="{{ Request::is('auth/logout') ? 'active' : '' }}"><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
              </ul>
        <ul class="flagnav navbar-flag flagbar-right">
        <li><a href="#" class="english" data-lang="English"><img src="{{asset('flag/GB.png')}}"></a></li>
        <li><a href="#" class="spanish" data-lang="Spanish"><img src="{{asset('flag/ES.png')}}"></a></li>
        <li><a href="#" class="french" data-lang="French"><img src="{{asset('flag/FR.png')}}"></a></li>
        <li><a href="#" class="german" data-lang="German"><img src="{{asset('flag/DE.png')}}"></a></li>
    </ul>
     </div>
    </nav>
</div>