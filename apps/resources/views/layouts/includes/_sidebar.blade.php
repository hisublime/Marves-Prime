<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<br>
						@if(auth()->user()->role=="administration")
						<li><span>MENU</span></a></li>
						<li><a href="/dashboard/admin" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/pengguna" class=""><i class="lnr lnr-user"></i> <span>Data User</span></a></li>
						<li><a href="/aktivitas" class=""><i class="lnr lnr-database"></i> <span>User log</span></a></li>
						<br>
						@endif
						{{-- <li><a href="/program" class=""><i class="lnr lnr-layers"></i> <span>Program Kerja</span></a></li>
						
						<li><span>ESELON 1</span></a></li>
						<li><a href="/program" class=""><i class="lnr lnr-layers"></i> <span>Program Kerja</span></a></li>
						<li><a href="/#" class=""><i class="lnr lnr-database"></i> <span>Arahan Menteri</span></a></li>
						<br>
						<li><a href="/#" class=""><i class="lnr lnr-layers"></i> <span>Menko</span></a></li>
						<br>
						<li><a href="/#" class=""><i class="lnr lnr-database"></i> <span>Persidangan</span></a></li>
						 --}}
				</nav>
			</div>
		</div>
		