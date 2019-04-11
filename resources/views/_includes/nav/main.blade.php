<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
        <img src="{{asset('images/logo.png')}}" width="auto" height="40">
      </a>

      @if (Request::segment(1) == "manage")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon"><i class="fa fa-arrow-circle-o-right"></i></span>
        </a>
      @endif

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Learn
        </a>
        <a class="navbar-item">
          Discuss
        </a>
        <a class="navbar-item">
          Share
        </a>
      </div>

      <div class="navbar-end">
        {{-- @if (Auth::guest()) --}}
        @guest
        <div class="navbar-item">
          <div class="buttons">
            <a href="{{route('register')}}" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a href="{{route('login')}}" class="button is-light">
              Log in
            </a>
          </div>
        </div>
        @else
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Hey {{Auth::user()->name}}
          </a>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-user m-r-10"></i></span>
              Profile
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-bell m-r-10"></i></span>
              Notifications
            </a>
            <a href="{{route('manage.dashboard')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-cog m-r-10"></i></span>
              Manage
            </a>
            <hr class="navbar-divider">
            <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <span class="icon"><i class="fa fa-sign-out m-r-10"></i></span>
              Logout
            </a>
            @include('_includes.forms.logout')
          </div>
        </div>
        @endguest
      </div>
    </div>
  </div>  
</nav>