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
	<link rel="stylesheet" type="text/css" href="css/navi.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/strike.css">
	<link rel="stylesheet" type="text/css" href="css/fadeout.css">
	<link rel="stylesheet" type="text/css" href="css/pass-valid.css">
</head>
<body>
	<!-- header -->
	<div  class="parallax" data-parallax="scroll" data-image-src="css/images/wimg1.jpg" style="min-height: 500px;">
		<div class="h-100 top">
			<div class="col-md-12 align-self-center sticky-bottom title" >
				<label class="strike">Change Password</label>
			</div>
		</div>
	</div>





	<!-- 1st Parallex -->
	<div class="parallax" data-parallax="scroll" class="parallax" data-image-src="css/images/wimg2.PNG" data-z-index="-100px">
		<div class="h-100">
			<div class="col-md-12 pt-4 h-100 align-self-center">
				<form action="" method="post">
					<div class="form-group">
						<input type="Password" class="form-control" id="password" placeholder="Random Generated Password" style="font-family: 'Oswald'; color: white; color: gray;border-radius: 0px; " name="password" Required>
					</div>
					<div style=" background-color: #ffffcc;  border-left: 6px solid #ffeb3b;">
						<p><strong>Note! </strong> This should match exctly the random password in your mail box...</p>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="psw" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="font-family: 'Oswald'; color: white; color: gray;border-radius: 0px; " name="psw" Required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm_password" placeholder="Confirm New Password" style="font-family: 'Oswald'; color: white; color: gray;border-radius: 0px; " name="confirm_password" Required>
					</div>
					<div style=" background-color: #FA9387;  border-left: 6px solid red;">
						<p><strong>Note! </strong> Enter your password carefully</p>
					</div>
					<br>
					<div class="form-group d-flex justify-content-end">
						<button type="submit" class="btn btn-dark col-md-2 " align="center" style="font-family: 'Oswald'; color: white; color: gray; border-radius: 0px; background-color: black; height: 60px; " name="submit"> &nbsp;Submit&nbsp;</button>
					</div>

				</form>
				<div id="message">
					<h3 class="heading">Password must contain the following:&nbsp;&nbsp;</h3>
					<br><br>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>
				<!-- content parallex -->
			</div>
		</div>
	</div>


	<div id="parallex-image-2">
		<div class="h-100">
			<div class="col-md-12 align-self-center">	

			</div>
		</div>
	</div>







	<!-- footer start -->
	<footer class="page-footer font-small blue pt-4" style="background-color: black;">
		<div class="col-xs-1" align="center">
			<img src="css/images/logo.png"  height="10%" width="10%">
		</div>
		<br>
		<hr style="width:50%; color: white;">
		<div class="col-xs-1" align="center">
			<p class="text-center col-md-4 " style="color: white;">Hello! my Beautiful charms we are working hard to bring your happiness at it's best who knows what going to be the next but you are the one who is going to create an history to let them you were there beautiful charming past. Let's bring our helping hand together to shout out loud EAGLESHOTS.</p>

			<h3 class="col-12 row justify-content-center">
				<a class="nav-link" href="">Instagram</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="">Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="">Linkedin</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="">Pintrest</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="">Twitter</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="contact.html">Contact Us</a>
			</h3>
			</div>
			<hr style="background-color:red; width: 60%" class="justify-content-center">
			<br><br>
			<div class=" justify-content-center" align="center" style="color: white; font-size:1vw">
				<p>| Copyright © 2019-<?php echo date("y"); ?> : EagleShots | All rights Reserved. |</p>
			</div>
			<br>
		</footer>
		<!-- footer end -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="js/fadeout.js"></script>
		<script type="text/javascript" src="js/navigate.js"></script>
		<script type="text/javascript" src="js/pass-valid.js"></script>
		<script type="text/javascript" src="js/match-pass.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>
