<header class="main-header">

<!-- Logo -->
<a href="{{ route('home') }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>BM</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Bookmark</b>.com.ar</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                </div>
              </li>
            </ul>
      </li>
    </ul>
  </div>

</nav>
</header>