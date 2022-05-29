<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/assets/css/persidangan.css')}}" />
	<link rel="icon" href="{{asset('admin/assets/img/Prime_Logo.png')}}">

	<!-- VENDOR CSS -->
	{{-- <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	 --}}
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/persidangan.css')}}" />
	{{-- <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> --}}
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/Prime_Logo.png')}}">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
	/>
	<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>

	<style>
		html {
		font-size: 62.5%;
	  }
	  
	  body {
		width: 100%;
	  }
	  
	  .navbar-collapse {
		margin-left: 30px;
	  }
	  
	  .navbar-nav {
		padding-left: 20px;
	  }
	  
	  .nav-link {
		font-size: 2rem;
		margin-left: 2.4rem;
	  }

	  .nav-link:hover {
		color: #fdb514;
	  }
	  
	  .bi:hover{
		color: #fdb514; 
	  }
	  
	  .active {
		font-weight: bold;
	  }
	  
	  .navbar-brand {
		display: flex;
		justify-content: center;
		align-items: center;
		padding-left: 25px;
		padding-bottom: 0 !important;
	  }
	  
	  nav .nav-link {
		color: #fff;
	  }
	  
	  .bg {
		background: #14117a;
	  }
	  
	  .navbar-brand h3 {
		font-size: 2rem;
		line-height: 3rem;
		font-weight: bold;
		color: #fdb514;
		padding: 0;
		margin: 0;
		padding-left: 10px;
	  }
	  
	  .icon {
		width: 50px;
		height: 50px;
	  }
	  
	  .navbar-icons {
		font-size: 2.4rem;
	  }

	  .menu{
		  font-family: Poppins;
		  font-weight: bold;
		  height:60px;
		  width: 100%;
		  background:#14117a;
		  font-size: 17px;
	  }

	  .menu ul{
		  margin:0px;
		  padding:5px;
		  background: none;
		  display:block;
	  }

	  .menu ul li{
		  list-style: none;
		  display: inline-block;
	  }
	  .menu ul li a{
		  display:block;
		  text-decoration: none;
		  padding:5px;
		  color: :#000;
	  }
	  
	  .menu ul li:hover{
		  display:block;
		  color:#fff;

	  }

	  .menu ul li .dropdown{
		  display: none;
	  }

	  .menu ul li:hover .dropdown{
		  display: block;
		  background: #fff;
		  position:absolute;
		  padding:10px;
	  }

	  .menu ul li:hover .dropdown li{
		  display: block;
	  }

	  .menu ul li:hover .dropdown li a{
		  padding:10px;
		  border-radius: 5px;
		  margin-bottom: 5px;
	  }

	  .menu ul li:hover .dropdown li a:hover{
		 
		 box-shadow: inset 0px 0px 55;
	  }
	  </style>

    <nav class="navbar navbar-expand-lg bg">
      <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#">
          <img class="icon" src="{{asset('admin/assets/img/Prime_Logo.png')}}" />
          <h3>
            Marves <br />
            Prime
          </h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a
              class="nav-link active"
              aria-current="page"
              href="/persidangan"
              >Persidangan</a>
            <a class="nav-link" href="/showArahanMenteri">Arahan Menteri</a>
          </div>
        </div>
        <div class="navbar-icons">
    		{{-- <div class="d-flex bd-highlight text-white">
			  <div class="p-2 bd-highlight" style="margin-right: 20px;">
				<i class="bi bi-bell"></i>
			  </div>
			  <div class="p-2 bd-highlight" style="margin-right: 5px;">
				<i class="bi bi-person-circle"></i>
			  </div>
			  <div class="p-2 bd-highlight">
				<i class="bi bi-caret-down"></i>
              </div>				
            </div> --}}
			<nav class = "menu">
				<ul>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/default.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown">
							<li> <a href="/logout">Logout</a></li>
							<li> <a href="/pengguna">My Profile</a></li>					
						</ul>
					</li>
				</ul>
			</nav>
        </div>
      </div>
    </nav>

    @yield('container-md-8')

	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script>
    $(document).ready(function() {
      $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Your Data",
        }
    });

} );
    </script>
  </body>
</html>