<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
              <i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.search') }}">
              <i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Search Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa-regular fa-folder-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Minutes Directory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('praise_night_select') }}">Praise Nights</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('healing_stream_select') }}">Healing Streams</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('christmas_select_user') }}">Christmas Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('other_ministry_select_user') }}">Other Ministry</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-regular fa-folder-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Song Leaders Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-regular fa-folder-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Song Directory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('lyrics') }}">
              <i class="fa-solid fa-music"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Lyrics</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.logout') }}">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>