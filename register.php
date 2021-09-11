<?php
// Start the session
session_start();

/*

if ($_SESSION["loggedStat"] == false) {
  header('location: login.php');
  die;
}
*/



	


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niroga Vaccine Scheduler: Home</title>

   <!-- Linking Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   <!-- External  CSS -->
   <!-- External CSS File -->
   <link rel="stylesheet" href="style.css">
   <!-- Icon Files -->
   <link rel="stylesheet" href="icons\icofont\icofont.min.css">
   <!-- Carousel CSS File -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
   <!--Slider-Slick -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <!-- Favicon For Website -->
   <link rel="icon" href="img/favicon.png">

</head>
<body class="d-flex flex-column min-vh-100">
   <!-- Top-Bar -->
	<div class="navi-top ">
		<div class="navi-cont ">
			<div class="row align-items-center ">
				<div class="col-md-6 col-lg-6 col-xl-6 float-left">
					<ul class="navi-top-details list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@niroga.lk"><i class="icofont-ui-email mr-2"></i>support@niroga.lk</a></li>
						<li class="list-inline-item"><i class="icofont-building-alt mr-2"></i>No 231, De Saram Place, Colombo 10, Sri Lanka</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-6 float-right">
					<div class="text-lg-right nav-right-col mt-2 mt-lg-0 ">			
						<i class="icofont-ui-dial-phone mr-2"></i>
						<a href="tel:011-456-1234" >
							<span >Give Us a Call: </span>
							<span >011-456-1234</span>
						</a>	
						<li class="list-inline-item ml-5"><a href="https://www.facebook.com" target="_blank"><i class="icofont-facebook mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com" target="_blank"><i class="icofont-youtube-play mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com" target="_blank"><i class="icofont-twitter mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com" target="_blank"><i class="icofont-instagram mr-2 text-light"></i></a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
   <!-- End-Top-Bar -->

   <!-- Navigation Bar -->
   
	<nav class="navbar navbar-expand-md navbar-light  sticky-top">
		<div class="container-fluid">
			<a  class="navbar-brand" href="index.html"> <img src="img/logo.png"></a> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsiveNav">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="responsiveNav">
			   <!-- Nav Bar Items -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="vaccines.html">Vaccines</a>
				</li>
	
			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href=".html" id="centerdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Centers <i class="icofont-curved-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="centerdrop">
						<li><a class="dropdown-item" href=".html">All Centers</a></li>
						<li><a class="dropdown-item" href=".html">Find By District</a></li>
					</ul>
			  	</li>
	
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href=".html" id="helpdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help <i class="icofont-curved-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="helpdrop">
						<li><a class="dropdown-item" href=".html">How To Book</a></li>
						<li><a class="dropdown-item" href=".html">FAQ</a></li>
					</ul>
			  	</li>

				<li class="nav-item">
					<a class="nav-link" href="about.html">About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact Us</a>
				</li>
				<li class="nav-item">
					<button type="button" class="btn btn-outline-success" onclick="location.href='booking.php'" >Book Now</button>
				</li>
			</ul>
		  </div>
		</div>
      </nav>
		
   <!-- End-Navigation Bar -->

   <nav class="navbar navbar-expand-md bg-primary">
	<div class="container">
		   <!-- Nav Bar Items -->
		<ul class="navbar-nav ml-auto">

			<li class="nav-item2 ">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			

		</ul>
	  </div>
	</div>
  </nav>



   <h2 class="text-center mt-3"><u>Register Now</u></h2>

  <div class="container w-50 d-flex justify-content-center mt-5 mb-5 border border-primary rounded">
	<div class="row mx-4 my-4">
	  <div class="col-xs-6">
		<form class="form-horizontal" id="form" name="myForm" action = "" method="post"  onsubmit="return registerValidate()">
		  <div class="form-group">
			<label for="nameField" class="col-xs-2">Username:</label>
			<div class="col-xs-10">
			  <input type="text" class="form-control" id="username" name="username" placeholder="Your Username" />
			</div>
		  </div>
		
		  <div class="form-group">
			<label for="emailField" class="col-xs-2">Email:</label>
			<div class="col-xs-10">
			  <input type="email" class="form-control" id="email"  name="email" placeholder="Your Email" />
			</div>
		  </div>
		
		  <div class="form-group">
			<label for="phoneField" class="col-xs-2">NIC:</label>
			<div class="col-xs-10">
			  <input type="text" class="form-control" id="nic" name="nic" placeholder="Your ID Number" />
			</div>
		  </div>

		  <div class="form-group">
			<label for="phoneField" class="col-xs-2">Phone:</label>
			<div class="col-xs-10">
			  <input type="text" class="form-control" id="phone" name="phone"placeholder="Your Phone Number" />
			</div>
		  </div>

		  <div class="form-group">
			<label for="phoneField" class="col-xs-2">Date of Birth</label>
			<div class="col-xs-10">
			<input type="text" placeholder="YYYY-MM-DD" id="dob" name="dob"/>
			</div>
		  </div>
		

		  <div class="form-group">
			<label for="phoneField" class="col-xs-2">Gender:</label>
			<div class="col-xs-10">
				<select name="gender" id="gender" >
					<option disabled selected value>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
					</select>
			</div>
		  </div>

		  <div class="form-group">
			<label for="descField" class="col-xs-2">Password:</label>
			<div class="col-xs-10">
			<input type="password" class="form-control" id="password" name="password"/>
			</div>
		  </div>

		  <div class="form-group">
			<label for="descField" class="col-xs-2">Confirm Password:</label>
			<div class="col-xs-10">
			<input type="password" class="form-control" id="conPass" name="conPass"/>
			</div>
		  </div>

		  <div id="userErr"></div >
		  
		  <div class="col-xs-10 col-xs-offset-2 row justify-content-center">
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  
		</form>

		<?php 
		 
		 require_once("classes.php");



         if(isset($_POST['submit'])) {
           $username = $_POST['username'];
           $email=$_POST['email'];
           $nic=$_POST['nic'];
           $phone=$_POST['phone'];
           $dob = $_POST['dob'];
           $sex=$_POST['sex'];
           $pass=$_POST['password'];
		   
		   

		  

		   $obj = new Patient();
		   $obj->checkUserExist($username);
		
		  
		   
		//	$obj = new Patient();
		//	$obj->patientReg($username,$email,$nic,$phone,$dob,$sex,$pass);


		  


         }
     ?>





	  </div>
	</div>
  </div>







<!-- Footer -->
<footer class="footer section black-background mt-auto">
	<div class="container text-lg-left text-center">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6 ">
					<div class="logo mb-4">
						<img src="img/logo-t.png" alt="" class="img-fluid">
					</div>
					<p>Online Vaciine Scheduling at Your Fingertips.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item ml-5"><a href="https://www.facebook.com" target="_blank"><i class="icofont-facebook mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com" target="_blank"><i class="icofont-youtube-play mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com" target="_blank"><i class="icofont-twitter mr-2 text-light"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com" target="_blank"><i class="icofont-instagram mr-2 text-light"></i></a></li>
						</ul>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
					<h4>Organization</h4>

					<ul class="list-unstyled footer-menu">
						<li><a href="#">Vaccines </a></li>
						<li><a href="#">Centers</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Govenrment</a></li>

					</ul>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
					<h4>Support</h4>
					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Storage</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Licence</a></li>
						<li><a href="#">Terms & Conditions</a></li>

					</ul>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
					<h4>Contact Us</h4>

							<i class="icofont-ui-dial-phone mr-3"></i>
							<a href="tel:011-456-1233" >
							<span >011-456-1233</span> </a>
							<h6 class="mt-2"><a href=""></a></h6>

							<i class="icofont-ui-dial-phone mr-3"></i>
							<a href="tel:011-456-1234" >
							<span >011-456-1234</span> </a>
							<h6 class="mt-2"><a href=""></a></h6>


							<i class="icofont-ui-email mr-3"></i>
							<a href="mailto:support@niroga.lk" >
							<span >support@niroga.lk</span> </a>
							<h6 class="mt-2"><a href=""></a></h6>

							<i class="icofont-building-alt mr-3"></i>
							<a href="#" >
							<span >No 231, De Saram Place, Colombo 10, Sri Lanka</span> </a>
							<h6 class="mt-2"><a href=""></a></h6>

					</div>
				</div>
			</div>
		  <div class="footer-bottom">
		      <p>©2021 Developed By Codex Software Solutions</p>
	     </div>
     </footer>
<!-- End-Footer -->


<!-- Linking Bootrap and JS Sources -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/numcount.js"></script>
	<script src="/js/registerValidate.js"></script>



</body>
</html>