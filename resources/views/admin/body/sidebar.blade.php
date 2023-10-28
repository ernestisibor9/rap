<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend/assets/images/logo-icon2.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">RAP</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('admin.dashboard') }}" class="">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				{{-- <li>
					<a href="{{ route('search.directory') }}" class="">
						<div class="parent-icon"><i class='bx bx-search'></i>
						</div>
						<div class="menu-title">Search Directory</div>
					</a>
				</li> --}}
				
				<li class="menu-label">RAP Menus</li>
				<li>
					<a href="#" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-search'></i>
						</div>
						<div class="menu-title">Search Directory</div>
					</a>
					<ul>
						<li> <a href="{{ route('search.directory') }}"><i class='bx bx-radio-circle'></i>Add Directory</a>
						</li>
						<li> <a href="{{ route('search.manage') }}"><i class='bx bx-radio-circle'></i>Manage Directory</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-book'></i>
						</div>
						<div class="menu-title">Minutes Directory</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.praise.night.view') }}"><i class='bx bx-radio-circle'></i>Praise Night</a>
						</li>
						<li> <a href="{{ route('admin.healing.stream.view') }}"><i class='bx bx-radio-circle'></i>Healing Streams</a>
						</li>
						<li> <a href="{{ route('admin.christmas.service.view') }}"><i class='bx bx-radio-circle'></i>Christmas Eve Service</a>
						</li>
						<li> <a href="{{ route('admin.other.ministry.view') }}"><i class='bx bx-radio-circle'></i>Other Ministry Programs</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="#">
						<div class="parent-icon"><i class='bx bx-book'></i>
						</div>
						<div class="menu-title">Songs Directory</div>
					</a>
					<ul>
						<li> <a href="#"><i class='bx bx-radio-circle'></i>Add Song</a>
						</li>
						<li> <a href="#"><i class='bx bx-radio-circle'></i>Manage Songs</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="#">
						<div class="parent-icon"><i class="bx bx-microphone"></i>
						</div>
						<div class="menu-title">Lyrics</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.add.lyrics') }}"><i class='bx bx-radio-circle'></i>Add Lyrics</a>
						</li>
						<li> <a href="{{ route('admin.manage.lyrics') }}"><i class='bx bx-radio-circle'></i>Manage Lyrics</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="#">
						<div class="parent-icon"> <i class="bx bx-microphone"></i>
						</div>
						<div class="menu-title">Lead Singers</div>
					</a>
					<ul>
						<li> <a href="#"><i class='bx bx-radio-circle'></i>Add Leader</a>
						</li>
						<li> <a href="#"><i class='bx bx-radio-circle'></i>Manage Leader</a>
						</li>
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>