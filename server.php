<?php
 error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once "vendor/autoload.php"; //PHPMailer Object

// initializing variables
$username = "";
$email    = "";
$phoneNumber="";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'regisration');

session_start();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $vkey=md5(time().$username);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phoneNumber)) { array_push($errors, "phoneNumber is required"); }
  
  if (preg_match('/^(0)[1-9]\d{8}$/', $phoneNumber) ){
    // the format /^[0-9]{4}-[0-9]{7}$/ will check for phone number with 11 digits with a - after first 4 digits.
    // echo "Phone Number is Valid <br>";
}   else{
    array_push($errors,"Enter Phone Number with correct format");
   }



  
  
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (strlen($_POST["password_1"]) < '8') {
  array_push($errors,"Your Password Must Contain At Least 8 Characters!");
}
elseif(!preg_match("#[0-9]+#",$password_1)) {
  array_push($errors,"Your Password Must Contain At Least 1 Number!");
}
elseif(!preg_match("#[A-Z]+#",$password_1)) {
  array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
}
elseif(!preg_match("#[a-z]+#",$password_1)) {
  array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
}

 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE  email='$email'  OR username='$username' LIMIT  1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

   if($user['phoneNumber'] === $phoneNumber) {
      array_push($errors, "phoneNumber already exists");
     
    }
    
    elseif ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);//encrypt the password before saving in the database

  	
//     #send email

// $link ="localhost/final project/login1.php";
$message = "Hello $username! <br><br>"
      ."<a href='http://localhost/final project/verify.php?vkey=$vkey'>verify account</a><br><br>"
    //  ."your verification key is.....<br> <br>"
    //  ."$vkey .<br> <br>"
     ."use this link to verify your account <br>";
    
    // . "Please click the link below to confirm your email and complete the registration process.<br>"
    // . "You will be automatically redirected to a welcome page where you can then sign in.<br><br>"            
    // . "Please click below to activate your account:<br>"
    // . "<a href='$link'>Click Here!</a>";



$mail = new PHPMailer(true);                            

try {
  //Server settings
  $mail->isSMTP();                                     
  $mail->Host = 'smtp.gmail.com';                      
  $mail->SMTPAuth = true;                             
  $mail->Username = 'jaxsmuller@gmail.com';     
  $mail->Password = 'jkgrhllrqookxlpm';             
  $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
  );                         
  $mail->SMTPSecure = 'tls';                           
  $mail->Port = "587";                                   

  //Send Email
  $mail->setFrom('jaxsmuller@gmail.com','dekut farm website');

  //Recipients
  $mail->addAddress("$email");              
  $mail->addReplyTo('sourcecod404@gmail.com');

  //Content
  $mail->isHTML(true);   
  // $verification_code=substr(number_format(time()=rand(), 0,'',''),0,6);                               
  $mail->Subject = "Account registration confirmation";
  $mail->Body    = $message;

  $mail->send();

  $query = "INSERT INTO users (username, email,phoneNumber, password,vkey) 
  			  VALUES('$username', '$email','$phoneNumber', '$password', '$vkey')";
  	mysqli_query($db, $query);


  
  
    // $_SESSION['email']=$email;
    ?>

    <script type="text/javascript">
    alert("registration successfull please check your email for verification");
     window.location.href="index.php";
    </script>
    <?php

  
 
 
  // header("location:index.php?");

} catch (Exception $e) {
     echo $e;
  ?>
    <script type="text/javascript">
    // alert($e);
    // window.location.href="index.php";
    </script>
    <?php
  $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
  $_SESSION['status'] = 'error';
}
 "Message has been sent successfully"; 

     
  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
  	// header('location: index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {


    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        // $password =($password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $sql);
        $row=mysqli_fetch_array($results);
        $count=mysqli_num_rows($results);
        if($count==1){
          $verified=$row['verified'];
          $phoneNumber=$row['phoneNumber'];
          if($verified==1){
            //session_start();
          

            
             $_SESSION["email"]=$email;
             $_SESSION["phoneNumber"]=$PhoneNumber;
             $phoneNumber=$_SESSION["phoneNumber"]
           
            ?>
            <script type="text/javascript">
            alert("login successful");
            window.location.href="homepage.php";
              </script>
            <?php
            

          }
          else{
            array_push($errors, "this account is not yet verified");
            // echo"this account has not yet been verified";
          }
          
            // $_SESSION['email'] = $email;
            // $_SESSION['success'] = "You are now logged in";
            // header('location: index.php');
          }else {
         
              array_push($errors, " login failed..Wrong email/password combination");
          }
        }
       
        
    }
  
  
  ?>