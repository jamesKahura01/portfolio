
<?php include('server.php');

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" media="screen" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2> User Login</h2>
  </div>
	 
  <form method="post" action="login1.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>email</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
		
  	</p>
	  <p>forgotten password? <a href="forgot.php">Forgotten password</a></p>
	  <p>login as Admin <a href="Admin.php">Admin login</a></p>
	
  </form>
</body>
</html>
