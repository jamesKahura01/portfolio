<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css"media="screen" href="style1.css">
  <!-- <link rel="stylesheet" href="/final project/bootsrap/css/bootstrap.min.css"> -->

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label>PhoneNumber</label>
  	  <input type="number" name="phoneNumber">
  	</div>
	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login1.php">Sign in</a>
		
  	</p>
	<p>login as Admin <a href="Admin.php">Admin login</a></p>
     
  </form>
</body>
</html>
