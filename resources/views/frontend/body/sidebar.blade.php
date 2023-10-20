<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.search') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Search Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Minutes Directory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('praise_night_select') }}">Praise Night</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('healing_stream_select') }}">Healing Stream</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('christmas_select') }}">Christmas Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Other Ministry Program</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="$">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Song Leaders Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Song Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('lyrics') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Lyrics</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.logout') }}">
              <i class="icon-grid mdi mdi-face"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>