
<?php
session_start();
include 'server.php';
if(!($_SESSION["email"])){
	header("location:login1.php?error=youneedtologin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Homepage</title>
</head>
<body>
	
<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
			
  		
  		<button class="navbar-toggler"type="button" data-toggle="collapse"  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon" ></span>
  		</button>
  		<!-- <div class="topnav">
  		<a style="color:white;" class="active" href="admin.php">Admin login</a>
		</div>  -->
  		<div class="collapse navbar-collapse" id="navbarNav">
		 
  		
    		<ul class="navbar-nav ml-auto">
    		 
    	    <li class="nav-item">
        		<a style="color:white;" class="nav-link" href="index.php">Home</a>
			
      		</li>
      		<li class="nav-item">
			 
			  <a href="cart.php" class="cart position-relative d-inline-flex" aria-label="View your shopping cart">
              <i class="fas fa fa-shopping-cart fa-lg" style="color:yellow;margin-top:15px;"></i>
			  
              <span class="cart-basket d-flex align-items-center justify-content-center rounded-circle" id="numberofitems" style="color:white; padding:3px;background-color:blue;">
               0
              </span>
			  
            </a>
			 <!-- <a href="cart.php"><img src="images/shopping cart.jpg" style="width:50px"></a>  -->
        		<!-- <a style="color:white;" class="nav-link" href="cart.php">Cart</a> -->
				
			
      		</li>
			
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="index.php">logout</a>
      		</li>
			
      		
      		
    		</ul>
  		</div>
		</nav>
		<b><h2 style="color:red;margin-left:200px;margin-top:10px;">Currently Available Products In our Store</b></h2><br>
		<form method="GET"action="search.php">
        <div class="row"style="margin-left:200px;">
        <div class="col-lg-4 col-lg-offset-4">
       <div class="input-group" >
		<input type="text" class="form-control"name="search"placeholder="search an item here" >
		<span class="input-group-btn">
		<button type="submit" name="submit" class="btn btn-warning">search</button>
</span>
</div>
</div>
</div>
		</form>
<section class="new-arrivals">
<div id="site" style="background-color:wheat;">
	<div class="container">
		<div class="title-box">
		<h2>Fruits</h2>
		</div>
	
		    
			<div class="row" >
				
				<?php
		
		
		$sql = "SELECT * FROM items where category='fruits'";
		$execquery = mysqli_query($db, $sql);
		$check  = mysqli_num_rows($execquery);
		if($check > 0){
			while($data  = mysqli_fetch_assoc($execquery)){
				?>
		<div class="row">
		<div class="col-md-9">
			<div class="product-top">
				<img src="<?php echo $data['item_image']?>">
				
			</div>
			
			
			<div class="product-bottom text-center">
		
			<h3><?php echo $data['item_name']?></h3>
			<h0 style="color:magenta ;">price per piece</h0>
			<div class="product-description" data-name="<?php echo $data['item_name']?>" data-price="<?php echo $data['item_price']?>">
				
				<p class="product-price">Ksh<?php echo $data['item_price']?></p>
				
				<form class="add-to-cart" action="" method="post">
							<div>
								<label for="qty-2" ></label>
								<input type="text"name="qty-2" id="qty-2" class="qty" value="1" hidden="hidden" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" style="margin-top:-20px"/></p>
						</form>
						
			   </div>
			  </div>
            </div>
            </div>

				<?php
			}
		}
		else{
		//	echo "no records found";
		}

		?>
		</div>



			
					

		
		<div class="title-box">
			<h2>Vegetables</h2>
			</div>
		
		<!-- -where it was -->
			<div class="row">
				<?php
		
		$sql = "SELECT * FROM items where category='vegetables'";
		$execquery = mysqli_query($db, $sql);
		$check  = mysqli_num_rows($execquery);
		if($check > 0){
			while($data  = mysqli_fetch_assoc($execquery)){
				?>
		<div class="row">
		<div class="col-md-9">
			<div class="product-top">
				<img src="<?php echo $data['item_image']?>">
				
			</div>
			
			
			<div class="product-bottom text-center">
		
			<h3><?php echo $data['item_name']?></h3>
			<h0 style="color:magenta ;">price per kg</h0>
			<div class="product-description" data-name="<?php echo $data['item_name']?>" data-price="<?php echo $data['item_price']?>">
				
				<p class="product-price">Ksh<?php echo $data['item_price']?></p>
				
				<form class="add-to-cart" action="" method="post">
							<div>
								<label for="qty-2"></label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" hidden="hidden" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" style="margin-top:-20px"/></p>
						</form>
						
			   </div>
			  </div>
            </div>
            </div>

				<?php
			}
		}
		else{
		//	echo "no records found";
		}

		?>
		</div>
	
				<div class="title-box">
		<h2>Leafy Veg</h2>
		</div>
		
		<div class="row">
			<?php
		
		$sql = "SELECT * FROM items where category='leafy vegetables'";
		$execquery = mysqli_query($db, $sql);
		$check  = mysqli_num_rows($execquery);
		if($check > 0){
			while($data  = mysqli_fetch_assoc($execquery)){
				?>
		<div class="row">
		<div class="col-md-9">
			<div class="product-top">
				<img src="<?php echo $data['item_image']?>">
				
			</div>
			
			
			<div class="product-bottom text-center">
		
			<h3><?php echo $data['item_name']?></h3>
			<h0 style="color:magenta ;">price per kg</h0>
			<div class="product-description" data-name="<?php echo $data['item_name']?>" data-price="<?php echo $data['item_price']?>">
				
				<p class="product-price">Ksh<?php echo $data['item_price']?></p>
				
				<form class="add-to-cart" action="" method="post">
							<div>
								<label for="qty-2"></label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" hidden="hidden" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn"style="margin-top:-20px" /></p>
						</form>
						
			   </div>
			  </div>
            </div>
            </div>

				<?php
			}
		}
		else{
		//	echo "no records found";
		}

		?>

		</div>

		<!-- end section -->
		<div class="title-box">
		<h2>Others</h2>
		</div>
		
	<div class="row">
		<?php
		
		
		$sql = "SELECT * FROM items where category='others'";
		$execquery = mysqli_query($db, $sql);
		$check  = mysqli_num_rows($execquery);
		if($check > 0){
			while($data  = mysqli_fetch_assoc($execquery)){
				?>
		<div class="row">
		<div class="col-md-9">
			<div class="product-top">
				<img src="<?php echo $data['item_image']?>">
				
			</div>
			
			
			<div class="product-bottom text-center">
		
			<h3><?php echo $data['item_name']?></h3>
			<h0 style="color:magenta ;">price per kg</h0>
			<div class="product-description" data-name="<?php echo $data['item_name']?>" data-price="<?php echo $data['item_price']?>">
				
				<p class="product-price">Ksh<?php echo $data['item_price']?></p>
				
				<form class="add-to-cart" action="" method="post">
							<div>
								<label for="qty-2"></label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" hidden="hidden"/>
							</div>
							<p><input type="submit" value="Add to cart" class="btn" style="margin-top:-20px"/></p>
						</form>
						
			   </div>
			  </div>
            </div>
            </div>

				<?php
			}
		}
		else{
		//	echo "no records found";
		}

		?>
		
	
			</div>
</div>
</section>
	
	

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




         <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzzfd8gdGv9DtcOmZoUy9h8OggoT1O22K1tjI7Kzbi2X9vXfnFxYDZK9VHAFy6WdMc7/exec'
            const form = document.forms['googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>