<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <div class="header">
    <h1>Admin login page</h1>
</div>
    <form method="post"action="Admin.php">
<div class="input-group">
    <label>username</label>
    <input type="text"name="username" >
</div>
<div class="input-group">
    <label>password</label>
    <input type="password"name="password">
</div>
    <div class="input-group">

    <button type="submit"class="btn"name="Admin_login">Admin login</button>
</div>
    
</form>
<?php
if(isset($_POST["Admin_login"])){
if(isset($_POST['username'])&& !empty($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','')or die(mysql_error());
    mysqli_select_db($con,'regisration') or die("cannot select db");
    $query=mysqli_query($con,"SELECT *FROM admin1 WHERE username='$username' AND password='$password'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0){
        while($row=mysqli_fetch_assoc($query)){
            $dbusername=$row['username'];
            $dbpassword=$row['password'];
        }
        if($username==$dbusername && $password==$dbpassword){
            $_SESSION['user'] = $username;
            
            header('location:admin1.php');
        }
    }
    else{
        ?>
        <script type="text/javascript">
            alert("OOOPS! invalid username or password!")
            </script>
        <?php
      
    }


}
else{
    ?>
    <script type="text/javascript">
        alert("OOOPS! all fields are required!")
        </script>
    <?php
   
}
}
  ?>  
    
</body>
</html>