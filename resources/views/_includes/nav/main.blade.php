<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/logo.png')}}" width="auto" height="40">
      </a>

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
        @if (Auth::guest())
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
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-sign-out m-r-10"></i></span>
              Logout
            </a>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>  
</nav>