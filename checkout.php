<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
<script src="bootsrap/js/bootstrap.min.js"></script>
</head>

<body id="checkout-page">

<div id="site">
	<header id="masthead">
		
	</header>
	<div id="content">
		<h1>Checkout</h1>

		<form action="payment.php" method="post">
		<?php include('error.php'); ?>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping cost</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>:<input value="" name="pricetotal" id="stotal" readonly/>
			</p>
			<!-- <button  type="submit" id="submit-order"  class="btn btn-primary">Proceed to payment</button> -->
		 </div>
		 <?php
		 if(isset($_GET['error'])){
			if($_GET['error'] == 'duplicatedetails'){
				?>
				<div class="alert alert-danger">email not registered.... make sure you use registered email</div>
				<?php
			}
		 }
		 ?>
		 <p><b>DELIVERY ADDRESS DETAILS <b></p> 
		      <div>
		 			<label for="delivery" >choose delivery</label>
		 			<select name="delivery"required  id="delivery"class="form-control"  data-type="string" data-message="This field cannot be empty">
					 <option value="">select mode of delivery</option>
		 				<option value="Home delivery">Home delivery</option>
		 				<option value="pickup station">pick up station</option>
		 			</select>
		 		</div> 
               <div>
					<br>
		 			<label for="location" >choose location</label>
		 			<select name="location" required id="location" class="form-control" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select your current location</option>
		 				<option value="nyeri town">nyeri town</option>
		 				<option value="bomas">Bomas</option>
                         <option value="Nyaribo">Nyaribo</option>
                         <option value="Embassy">Embassy</option>
                         <option value="chaka">chaka</option>
                         <option value="Nyeri view">Nyeri view</option>
                         <option value="kingo'ngo">kingo'ngo</option>
                         <option value="chania">chania</option>
		 			</select> 
		 		</div>
				
				 <div>
					
		 			<label for="phone">PhoneNumber</label>
		 			<input type="Number"placeholder="input phoneNumber you want to pay your transaction with" class="form-control" value="<?php echo $phone; ?>" required name="phone" data-type="expression" data-message="Not a valid email address" />
		 		</div>
				<br> 

		 		
	 	
		 		
				 <ul id="shopping-cart-actions">
				
					 <!-- <li>
						<button type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" >Empty cart</button>
						
					</li>
					<li>
						<a href="index.php" class="btn">add more items to cart</a>
					</li> -->
		 	       <li>
						<a href="cart.php" class="btn">back</a>
					</li> 
					<li> 
					<button  type="submit" id="submit-order" name="submit" class="btn btn-success">proceed to payment</button>
					</li>	
					
		 	
		
		
	</div>
	
	
	

</div>



          <script>
            const scriptURL ='https://script.google.com/macros/s/AKfycbyNuutp7NdH_hNy4jQoXbJMQULvY0yzNEr9NbxQjhaOkFrf-PmYKEvONGYPj7Q8eN3O/exec'
            const form = document.forms['googlecheckout-form']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => location.replace("order.php"))
                .catch(error => console.error('Error!', error.message))
			
				
            })
			
          </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
</body>
</body>  
</html>	  

