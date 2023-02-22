
<?php
session_start();

if (!($_SESSION['user'])){
header("Location:admin.php?error=nosession");
}
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
  		
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
    		 
    		 <li class="nav-item">
        		<a style="color:white;" class="nav-link" href="adminpage.php">Upload new product</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="#delete">Delete item</a>
			
      		</li>
			
      		
      		
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="homepage.php">Home</a>
      		</li>
      		
      		
      		<li class="nav-item">
        		<a style="color:white;" class="nav-link" href="login1.php">logout</a>
      		</li>
			
      		
      		
    		</ul>
  		</div>
		</nav>
		<h1>ADMIN PAGE</h1>


		

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
		



	
	
	
<section class="new-arrivals">
<div id="site" style="background-color:wheat">
	<div class="container">
		<div class="title-box">
		<h2>Fruits</h2>
		</div>
	
		    
			<div class="row">
				
				<?php
		include 'server.php';
		
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
		
				<?php
                     include 'server.php';
						$sql="SELECT* FROM items";
						 $result=mysqli_query($db,$sql);
						 if($result){
							while($row=mysqli_fetch_assoc($result)){
								$id=$row['id'];
								
                
								
							
								
						 }
						 
                        }
						?>	
					
										
						<button type="submit"name="update" class="btn btn-success">
						<a href="update.php? updateid=<?php echo $data['id']?>" class='text-light'>update</a></button>
						<button type="submit"name="delete" class="btn btn-primary">
						<a href="delete.php? deleteid=<?php echo $data['id']?>" onclick=" return checkDelete()"class='text-light'>Delete item</a></button>

				
							
                    <script>
						function checkDelete(){
							return confirm("are you sure you want to delete this record?");

						}
						</script>
						
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
		include 'server.php';
		
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
				<br>
				<?php
                     include 'server.php';
						$sql="SELECT* FROM items";
						 $result=mysqli_query($db,$sql);
						 if($result){
							while($row=mysqli_fetch_assoc($result)){
								$id=$row['id'];
								
                
								
							
								
						 }
						 
                        }
						?>	
					
					<button type="submit"name="update" class="btn btn-success">
						<a href="update.php? updateid=<?php echo $data['id']?>" class='text-light'>update</a></button>
						<button type="submit"name="delete" class="btn btn-primary">
						<a href="delete.php? deleteid=<?php echo $data['id']?>" onclick="return checkDelete()" class='text-light'>Delete item</a></button>
				<div id="delete" action="" method="post">

				<script>
						function checkDelete(){
							return confirm("are you sure you want to delete this record?");

						}
						</script>
							
							
			</div>
		
						
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
		include 'server.php';
		
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
				<br>

				<?php
                     include 'server.php';
						$sql="SELECT* FROM items";
						 $result=mysqli_query($db,$sql);
						 if($result){
							while($row=mysqli_fetch_assoc($result)){
								$id=$row['id'];
								
								
							
								
						 }
						 
                        }
						?>	
					
					<button type="submit"name="update" class="btn btn-success">
						<a href="update.php? updateid=<?php echo $data['id']?>" class='text-light'>update</a></button>
						<button type="submit"name="delete" class="btn btn-primary">
						<a href="delete.php? deleteid=<?php echo $data['id']?>"onclick="return checkDelete()" class='text-light'>Delete item</a></button>
				<div id="delete" action="" method="post">
					<script>
						function checkDelete(){
							return confirm("are you sure you want to delete this record?");

						}
						</script>
							
						
			</div>
						
						
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
		include 'server.php';
		
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
				<br>
				<?php
                     include 'server.php';
						$sql="SELECT* FROM items";
						 $result=mysqli_query($db,$sql);
						 if($result){
							while($row=mysqli_fetch_assoc($result)){
								$id=$row['id'];
								
                
								
							
								
						 }
						 
                        }
						?>	
					
					<button type="submit"name="update" class="btn btn-success">
						<a href="update.php? updateid=<?php echo $data['id']?>" class='text-light'>update</a></button>
						<button type="submit"name="delete" class="btn btn-primary">
						<a href="delete.php? deleteid=<?php echo $data['id']?>" onclick=" return checkDelete(this)"class='text-light'>Delete item</a></button>
				<div id="delete" action="" method="post">

				<script>
						function checkDelete(){
							return confirm("are you sure you want to delete this record?");

						}
						</script>
							
			</div>
						
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
				Welcome to Dekut farm where we provide quality farm produce at a relatively lower prices than any other farm in nyeri county.Shop with us and obtain our best deals.And incase of any issue, comment of recommendation kindly contact us on any our social meadia handles and we will come back to you.We are located in nyeri  around dedan kimathi university. Shop with us and enjoy our offers .

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
					<h3> shop with us</h3>
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
