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
                <li class="{{ Request::is('locations') ? 'active' : '' }}"><a href="{{ URL::to('locations') }}">Locations</a></li>
                <li class="{{ Request::is('bookings') ? 'active' : '' }}"><a href="{{ URL::to('bookings') }}">Bookings</a></li>
                <li class="{{ Request::is('facilities') ? 'active' : '' }}"><a href="{{ URL::to('facilities') }}">Facilities</a></li>
                <li class="{{ Request::segment(1) === 'penguinclub' ? 'active' : null }}"><a href="{{ URL::to('penguinclub') }}">Penguin Club</a></li>
              </ul>
               <ul class="nav navbar-nav navbar-right translation-links" style="margin-right: 0px;">
               <li><a href="#" class="spanish" data-lang="Spanish"><img src="{{asset('flags/es.gif')}}"></a></li>
               <li><a href="#" class="english" data-lang="English"><img src="{{asset('flags/gb.gif')}}"></a></li>
               <li> <a href="#" class="french" data-lang="French"><img src="{{asset('flags/fr.gif')}}"></a></li>
                <li> <a href="#" class="german" data-lang="German"><img src="{{asset('flags/de.gif')}}"></a></li>
               </ul>
            </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                 <form class="form" role="form" method="POST" action="/auth/login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                 </form>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
              </div>
    </nav>
</div>
