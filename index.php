<?php
// session_start();
// if(!($_SESSION['email'])){
// 	header("location:login1.php?error=you need tologin");
// }
?>
<!DOCTYPE html>
<html>
<head>
<title>Dekut Farm</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
<script src="bootsrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#00cdcd">

<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<!-- <div class="topnav">
  		<a style="color:white;" class="active" href="admin.php">Admin login</a>
		</div>  -->
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
			<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: magenta;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: yellow;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
			<div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">
  <a style="color:white;" class="nav-link" href="admin.php">Admin login</a>
  <a style="color:white;" class="nav-link" href="login1.php"> user login</a>
  </div>
</div> 
    		 <!-- <li class="nav-item">
        		<a style="color:white;" class="nav-link" href="#site">Products</a>
      		</li> -->

      		<li class="nav-item">
        	
			
      		</li>
			
      		
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		
      		<li class="nav-item">

      		</li>
			
      		
      		
    		</ul>
  		</div>
		</nav>
		<h1>DEKUT FARM PRODUCE</h1>


		

	<div class="slider">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/feature4.jpg" class="d-block w-100" alt="..." style="width:2000px;height:450px;">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/feature2.jpg" class="d-block w-100" alt="..." style="width:2000px;height:450px;">
    </div>
    <div class="carousel-item">
      <img src="images/feature3.jpg" class="d-block w-100" alt="..." style="width:2000;height:450px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
		

<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
				Welcome to Dekut farm where we provide quality farm produce at a relatively lower prices than any other farm in nyeri county.Shop with us and obtain our best deals.And incase of any issue, comment of recommendation kindly contact us on any our social meadia handles and we will come back to you.We are located in nyeri  around dedan kimathi university. Shop with us and enjoy our offers 


				</div>
			
			
			</div>
			
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> Available 24/7</h3>
					<p>produce are available anytime</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Shop with us</h3>
					<p>for our subsidised produce</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get fast delivery</h3>
					<p>of purchased goods </p>
				</div>
			</div>
		</div>
	
	</section>

<!------COntact------------>	
<section id="contact">	
	<div class="contacts">
		<h1>contact us</h1>
		<ul>
			<li><a href="http://facebook.com/jamoh.kahush" ><img src="images/facebook.png.png"></a></li>
			<li><a href="http://twitter.com/@jameskahura10"><img src="images/twitter.png.png"></a></li>
			<li><a href="http://instagram.com/jameskahura01?utm_source=qr"><img src="images/instagram.png.png"></a></li>
			<li><a href="http://wa.me/+254718239612"><img src="images/whatsapp.png.png"></a></li>
		</ul>
	</div>
	

	</div>

</section>




	
	

</body>
</html>	
