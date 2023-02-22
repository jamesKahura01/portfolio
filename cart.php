<?php
session_start();
if(!($_SESSION['email'])){
	header("location:login1.php?error=you need tologin");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
<script src="bootsrap/js/bootstrap.min.js"></script>
</head>

<body >
<div id="site">
	<header id="masthead">
	
	</header>
	<div id="content">
		<h1>Shopping Cart</h1>
         <!-- <img src="images/shopping cart.jpg"> -->
		<form id="shopping-cart" action="" method="POST">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col" >Item</th>
					<th scope="col" > Qty</th>					
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Total</strong><span value="" id="stotal"></span>
			</p>

			<ul id="shopping-cart-actions">
				
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn btn-success" value="Empty Cart" >
					
				</li>
				<li>
					<a href="homepage.php" class="btn">add more items to cart</a>
					<li>
				
				<!-- <li>
				<button type="submit" class="btn btn-primary " >proceed to checkout</button>
				</li> -->
				<li>
				<button class="btn btn-primary " id="updatecart2">update cart</button>
				</li>
			     <li>
				 <a href="checkout.php"class="btn btn-primary">Proceed to checkout</a> 
				</li>
			</ul>
			<div>
			
		</form>
	
	</div>

</div>


</body>
</html>	
