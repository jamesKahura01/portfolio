<?php include('server.php') ?>
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
  	<h2>Forgotten password</h2>
  </div>
	 
  <form method="post" action="forgot.php">
  	<?php include('error.php'); ?>
    
    <?php
          if(isset($_POST['forgot'])){
        $email=$_POST['email'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];
        if($password1 !=$password2){
            ?>
            <script type="text/javascript">
                alert("passwords do not match");
                window.location.href = "forgot.php";
                </script>
                <?php
        }
        else{
            $sqlQuery = "SELECT * FROM users WHERE email = '$email'";
            $run_user = mysqli_query($db, $sqlQuery);

            $check_user = mysqli_num_rows($run_user);

            if($check_user > 0){
                    $password = ($password1);
                    $sqlUpdate = "UPDATE users SET password = '$password1' WHERE email = '$email'";
                    $run_user = mysqli_query($db, $sqlUpdate);
                    
                ?>

                    <script type = "text/javascript">
                    alert("Password Reset Successful");
                    window.location.href = "login1.php";
                    </script>

            <?php
            
            }
            else{
                ?>

                    <script type = "text/javascript">
                    alert("Invalid email!! enter a valid email");
                    window.location.href = "forgot.php";
                    </script>

            <?php
                }
        
        }
    }
    ?>
  	<div class="input-group">
  		<label>email</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Enter new password</label>
  		<input type="password" name="password1">
  	</div>
      <div class="input-group">
  		<label>Confirm password</label>
  		<input type="password" name="password2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="forgot">Reset</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
		
  	</p>
      <p>
  		remember your details? <a href="login1.php">Login</a>
		
  	</p>
	
  </form>
</body>
</html>
