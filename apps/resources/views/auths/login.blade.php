<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	<style>
	.button{
		background-color: #14117a;
		border:none;
		color: white;
		padding: 14px 48%;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}
	p{	
		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		color: rgb(0, 0, 139)
	}
</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<!--<div class="logo text-center"><img src="{{asset('admin/simalab.jpg')}}" alt="Simalab Logo"></div>-->
								<h1> Marves Prime</h1>
								<h3>Best way to report your
										work progress
								</h3>
							
							</div>
							<form class="form-auth-small" action="/postlogin" method="POST">
                                  {{csrf_field()}}
                                  <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username/email</label>
									<input name="email" type="email" class="form-control" id="signin-email" placeholder="Username/email">
								</div>
								
								<div class="form-group">
									<!--<label for="signin-password" class="control-label sr-only">Password</label>-->
									<!--<span class="glyphicon glyphicon-eye-open"></span>--> <!-- untuk membuat ikon mata-->
									<!--<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">-->
									<input type="password" class="form-control" id="password" placeholder="Password " name="password">
									<span class="input-group-btn">
									<button id="show_password" class="btn btn-secondary" type="button" style="padding:9px;">
									<span class="glyphicon glyphicon-eye-open"></span>
									</button>
									</span>
									<script>
									$('#show_password').hover(function functionName() {
										//Change the attribute to text
										$('#password').attr('type', 'text');
										$('.glyphicon').removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
									}, function () {
										//Change the attribute back to password
										$('#password').attr('type', 'password');
										$('.glyphicon').removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
									}
									);
									</script>
								</div>
								<div class="form-group clearfix">
									<div class="card-footer">
										<a href="{{route('register')}}"><p class="text-left">Lupa password?</p></a> 
									</div>
								</div>
								<button type="submit" class="button">Login</button>		
							</form>
						</div>
					</div>
					<div class="right">
						<img src="{{asset('admin/marves.jpg')}}" width="500" height="400" alt="Marves Prime">
						</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
