<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Default Css -->
	
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!-- parallex -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="parallax.js-1.5.0/parallax.min.js"></script>
	<!-- Fonts links -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&display=swap&subset=latin-ext,tamil" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- Default Css -->
	<!-- <link rel="stylesheet" type="text/css" href="css/navigation.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navi.css">
	<style type="text/css">
		span
		{
			color: white;
		}
		span:hover
		{
			color: gray;
		}
		label
		{
			color: white;
		}
	</style>
</head>
<body>
	<!-- header -->
	<div  class="parallax" data-parallax="scroll" data-image-src="css/images/login.png" data-z-index="100px">
		<div class="h-100">
			<div class="col-md-12 align-self-center">
				<div class="col-xs-1" align="center">
										<a href="index.php"><img src="css/images/title.png"  height="20%" width="20%"></a>
				</div>
				<header class="floating-header">
					<div class="floating-menu-btn">
						<div class="floating-menu-toggle-wrap">
							<div class="floating-menu-toggle">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span>
							</div>
						</div>
					</div>

					<div class="main-navigation-wrap">
						<nav class="main-navigation" data-back-btn-text="Back">
							<ul class="menu">
								<li class="delay-1"><a href="index.php">Home</a></li>
								<li class="delay-2"><a href="our_work.php">Our Work</a></li>
								<li class="delay-3"><a href="client.php">Clients</a></li>
								<li class="delay-4"><a href="work.php">Collaboration</a></li>
								<li class="delay-5"><a href="schedule.php">Schedule</a></li>
							</ul><!-- .menu -->
						</nav><!-- .main-navigation -->
					</div><!-- .main-navigation-wrap -->
				</header>

				<div class="col-md align-self-center sticky-bottom">
					<form method="post" action="">
						<div class="form-group col-md-5" >
							<label style="font-family: 'Oswald'; color: white; font-size: 6vw; font-weight: bolder; color: gray; opacity:0.6; ">LOGIN</label>
						</div>
						<div class="form-group col-md-5" >
							<label>Email</label><br>
							<input type="email" class="form-control" id="Email" style="border-radius: 0px; background-color: white;
							opacity: 0.6;" placeholder="Enter Your Email" name="Email" Required>
						</div>
						<div class="form-group col-md-5" >
							<label>Password</label><br>
							<input type="password" class="form-control" id="Pass-code" style="border-radius: 0px;background-color: white;
							opacity: 0.6;" placeholder="Enter Your Password" name="Pass-code" Required>
						</div>
						<div class="form-group col-md-12 d-flux col-xs-2">
							<span 
							class="pseudolink" 
							onclick="location='forget.php'">
							Password Skipped from your mind?
						</span><br>
						<br>
						<button type="submit" class="btn btn-dark col-md-1" align="center" style="border-radius: 0px; height: 50px; width:200px;" name="submit"> &nbsp;LogIn&nbsp;</button>
					</div>
				</form>
			</div> 
		</div>
		<span class="pt-3"></span>
		<div style="position :absolute; background-color: red; padding-left: 70px;" >
			<label>Don't have accout?<a href="register.php"> <strong>SignUp</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		</div>
	</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->

		<script src="js/navigate.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>
