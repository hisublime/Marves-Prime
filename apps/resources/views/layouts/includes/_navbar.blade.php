<nav class="navbar navbar-default navbar-fixed-top">
			@if(auth()->user()->role=='administration')
			<div class="brand">
				<a href="/dashboard"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='eseloni')
			<div class="brand">
				<a href="/dashboard"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='persidangan')
			<div class="brand">
				<a href="/dashboard"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 1')
			<div class="brand">
				<a href="/dashboard"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 2')
			<div class="brand">
				<a href="/dashboard2"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 3')
			<div class="brand">
				<a href="/dashboard3"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 4')
			<div class="brand">
				<a href="/dashboard4"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 5')
			<div class="brand">
				<a href="/dashboard5"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='Deputi 6')
			<div class="brand">
				<a href="/dashboard6"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='menkomarves')
			<div class="brand">
				<a href="/menko/home"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
			</div>
			@endif
			@if(auth()->user()->role=='sekretariat')
		<div class="brand">
			<a href="/sekretariat-kemenko/home"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
		</div>
		@endif
		@if(auth()->user()->role=='inspektorat')
		<div class="brand">
			<a href="/inspektorat/home"><img src="{{asset('admin/Prime_Logo.png')}}" alt="Marves Prime" class="img-responsive logo"></a>
		</div>
		@endif
			<div class="brand">
				<p>Marves</p>
				<p>Prime<p>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
			</div>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
			@if(auth()->user()->role=='Deputi 1')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='Deputi 2')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='Deputi 3')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='Deputi 4')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='Deputi 5')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='Deputi 6')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='pemimpin')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='menkomarves')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
			@if(auth()->user()->role=='eseloni')
			<a
              class="nav-link active"
              aria-current="page"
              href="/program"
              >Program/Isu</a>
			  <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
			@endif
          </div>
				{{-- <form class="navbar-form navbar-left">
				<form action="/search" method="POST" role="search">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				</form> --}}
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/default.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							
							<ul class="dropdown-menu">
								<li><a href="/pengguna"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>