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
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<!-- <div class="topnav">
  		<a style="color:white;" class="active" href="admin.php">Admin login</a>
		</div>  -->
  		<div class="collapse navbar-collapse" id="navbarNav">
		
  		
    		<ul class="navbar-nav ml-auto">
    		 
    	    <li class="nav-item">
        		<a style="color:white;" class="nav-link" href="homepage.php">Back</a>
			
      		</li>
      		<li class="nav-item">
			  <a href="cart.php" class="cart position-relative d-inline-flex" aria-label="View your shopping cart">
              <i class="fas fa fa-shopping-cart fa-lg" style="color:yellow;margin-top:15px;"></i>
			  
              <span class="cart-basket d-flex align-items-center justify-content-center rounded-circle" id="numberofitems" style="color:white; padding:3px;background-color:blue;">
               0
              </span>
			  
            </a>
        		<!-- <a style="color:white;" class="nav-link" href="cart.php">Cart</a>
			 -->
      		</li>
			
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="login1.php">logout</a>
      		</li>
			
      		
      		
    		</ul>
  		</div>
		</nav>
        <b><h2 style="color:red;margin-left:200px;margin-top:10px;">Currently Available Products In Store</b></h2>
        <br>
        <section class="new-arrivals">
            <div id="site" style="background-color:wheat">
            <div class="container">
        <div class="row">
				<?php
		include 'server.php';
        if(isset($_GET['submit'])){
            $search=$_GET['search'];
        
		
		$sql = "SELECT * FROM items where item_name like '%$search%'";
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
				<br>
				<form class="add-to-cart" action="" method="post">
							<div>
								<label for="qty-2"></label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" hidden="hidden" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" style="margin-top:-50px"/></p>
						</form>
						
			   </div>
			  </div>
            </div>
            </div>

				<?php
			}
		}
		else{
		echo "no records found";
		}
    }
		?>
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
	
