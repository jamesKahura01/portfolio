
<?php
include 'server.php';
$uname = "";
$email    = "";
session_start();


if(isset($_POST['submit'])){

  #declare variables holding arrays
  $products = array();
  $qty = array();
  $pric = array();
  foreach($_POST['prname'] as $product){
    array_push($products,$product,",");
   // echo implode("",$products);
    // echo $product;
  }
  foreach($_POST['quantity'] as $quantity){
    // echo $quantity;
    array_push($qty,$quantity);
   // echo implode("",$qty);
  } 
  foreach($_POST['qprice'] as $price){
    // echo $price;
    array_push($pric,$price,",");
   // echo implode("",$pric);
  } 
  
  #using foreach loop

     $total=mysqli_real_escape_string($db, $_POST['pricetotal']);
     //echo $total;
    // $uname = mysqli_real_escape_string($db, $_POST['uname']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $delivery = mysqli_real_escape_string($db, $_POST['delivery']);
    $ulocation = mysqli_real_escape_string($db, $_POST['location']);


    // if (empty($uname)) { array_push($errors, "name is required"); }
    // if (empty($email)) { array_push($errors, "Email is required"); }
    // if (empty($phone)) { array_push($errors, "phoneNumber is required"); }
    // if (empty($delivery)) { array_push($errors, "Delivery address is required"); }
    // if (empty($ulocation)) { array_push($errors, "Location is required"); }

    // $user_check_query = "SELECT email,verified FROM users WHERE email='$email' AND verified=1";
    // $result = mysqli_query($db, $user_check_query);
    // $user = mysqli_num_rows($result);
    
    // if ($user != 1) { // if user exists
    //   header("Location: checkout.php?error=duplicatedetails");
    // }
    // else{
      echo 'success';
      
      $p = implode("",$products);
      $q = implode("",$qty);
      $pc = implode("",$pric);
         
        $query = "INSERT INTO purchases (productname,quantity,price, total,phone,Delivery,Address) 
            VALUES('$p','$q','$pc','$total','$phone','$delivery','$ulocation')";
            mysqli_query($db, $query);

            //creating session
          $_SESSION["total"] = $total;
          $_SESSION["phone"]=$phone;
          echo($phone);
          
    
    // }
    //formatiing data before inserting
    
      //  $_SESSION['total'] = $total;
    // header("Location : MpesaActivated.php");
  ?>
  <script type="text/javascript">
  alert("process successfull please check your phone to complete your payment");
   window.location.href="MpesaActivated.php";
  </script>
  <?php
 
    


  } 

?>
