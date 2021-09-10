<?php
// Start the session
session_start();

/*

if ($_SESSION["loggedStat"] == false) {
  header('location: login.php');
  die;


}
*/
   // Database Connect
   require_once("db-connect.php");
   $database = new DatabaseConn("localhost", "root", "", "nirogaDB");

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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="vaccines.html">Vaccines</a>
				</li>
	
			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href=".html" id="centerdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Centers <i class="icofont-curved-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="centerdrop">
						<li><a class="dropdown-item" href="all-centers.html">All Centers</a></li>
						<li><a class="dropdown-item" href="search-centers.html">Search Centers</a></li>
					</ul>
			  	</li>
	
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href=".html" id="helpdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help <i class="icofont-curved-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="helpdrop">
						<li><a class="dropdown-item" href="guide.html">How To Book</a></li>
						<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
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


   <!-- Navigation Bar -->
   
   <nav class="navbar navbar-expand-md bg-primary">
		<div class="container">
			   <!-- Nav Bar Items -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item2 ">
					<a class="nav-link" href="booking.php">Create Appointments</a>
				</li>
				
				<li class="nav-item2 ">
					<a class="nav-link" href="view.php">View Appointments</a>
				</li>
				
				<li class="nav-item2">
					<a class="nav-link" href="cancel.php">Cancel Appointments</a>
				</li>
				<li class="nav-item2">
				<button type="button" class = "logoutBtn btn-outline-info"  onclick="location.href='logout.php';">Logout</button>

			</li>
			</ul>
		  </div>
		</div>
      </nav>













 <div class="container d-flex justify-content-center mt-5 mb-3 ">
 <div class="login">

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-container2" method="post" id = "mysubmitforum">
 


 <label for="groups">District:</label>
 <select id="groups"  id="time" name="disName">
    <option value='Colombo'>Colombo</option>
    <option value='Gampaha'>Gampaha</option>
    <option value='Kalutara'>Kalutara</option>
	<option value='Rathnapura'>Rathnapura</option>
	<option value='Kandy'>Kandy</option>

</select>
<label for="sub_groups">Center:</label>
<select id="sub_groups" name="cenName">
    <option data-group='Colombo' value='Dehiwala'>Dehiwala</option>
    <option data-group='Colombo' value='Maharagama'>Maharagama</option>
    <option data-group='Colombo' value='Baththaramulla'>Baththaramulla</option>
	<option data-group='Colombo' value='Ratmalana'>Ratmalana</option>
	<option data-group='Colombo' value='Pitakotte'>Pitakotte</option>
    <option data-group='Gampaha' value='Center'>Center</option>
    <option data-group='Gampaha' value='Center'>Center</option>
    <option data-group='Gampaha' value='Center'>Center</option>
    <option data-group='Kalutara' value='Center'>Center</option>
    <option data-group='Kalutara' value='Center'>Center</option>
	<option data-group='Kalutara' value='Center'>Center</option>
    <option data-group='Rathnapura' value='Center'>Center</option>
    <option data-group='Rathnapura' value='Center'>Center</option>
    <option data-group='Kandy' value='Center'>Center</option>
    <option data-group='Kandy' value='Center'>Center</option>

	</select>


	<p><input type="submit" id = "mysubmit" name="mysubmit" class="d-flex justify-content-center" value ="Check"></p>
	</form>


	<h5>Show Available Vaccines in each Center after check</h5>

<p><label for="date">Date:</label>
	<input type="date" id="appDate" name="appDate" required>
</p>

 
<p>
  <label for="time">Time:</label>
  <input type="time" id="appTime" name="appTime" required>
</p>

<h5>Then Book 1 Avialable Vaccine</h5>

	<p><input type="submit" id = "mysubmit" name="mysubmit" class="d-flex justify-content-center" value ="Book"></p>


	</div>
 </div>




<script>

$(function(){
    $('#groups').on('change', function(){
        var val = $(this).val();
        var sub = $('#sub_groups');
        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
              if ($(this).parent('span').length) {
                $(this).unwrap();
              }
            } else {
              if (!$(this).parent('span').length) {
                $(this).wrap( "<span>" ).parent().hide();
              }
            }
        });
    });
    $('#groups').trigger('change');
});
</script>



   
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

    <script  src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/numcount.js"></script>


</body>
</html>