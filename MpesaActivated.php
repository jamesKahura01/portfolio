

<?php
session_start(); 
// require '../Loader.php';
// var_dump($_ENV['PROJECT_NAME']);
// echo getenv("../Rightwing"); 
  //  error_reporting(0);
  // $timestamp = time();
    
  $total = $_SESSION["total"] ;
  $_SESSION["phone"];
  $phone= $_SESSION["phone"];

    
    // echo $amount;
       //getting timestamp
  $timestamp = date('YmdHis');
  // echo $timestamp."<br>";
  //bussiness short code e.g paybill or till number
  $Businesshortcode="174379";

  //getting passkey
  $Lipanapasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
  $password = base64_encode($Businesshortcode.$Lipanapasskey.$timestamp);

  
  // echo $password .'<br>';
 //Generating access token 
//  https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials
  $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $url2 = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  $credentials = base64_encode("aGZcK12bVDYslyHG3nIxTgfGvdTutrrF:HL4eVso3sNLqWjcW");
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
  curl_setopt($curl, CURLOPT_HEADER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  
  $curl_response = curl_exec($curl);
  // echo $curl_response;
  $access_token = json_decode($curl_response)->access_token;
  echo $access_token . "<br>";	
  
 
 
  
  // echo ($curl_response);

  $original_number = substr($phone,1);
  // echo $original_number;
  $kenyacode = 254;
  $phoneno = $kenyacode.$original_number;
  // $phoneno = 254718239612;
  echo $phoneno;
  echo $total;
  curl_setopt($curl, CURLOPT_URL, $url2);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
  
  
  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => "174379",
    'Password' => "$password",
    'Timestamp' => "$timestamp",
    'TransactionType' => "CustomerPayBillOnline",
    'Amount' => "$total",
    'PartyA' => "$phoneno",
    'PartyB' => "174379",
    'PhoneNumber' => "$phoneno",
    'CallBackURL' => 'https://0d93-41-89-227-170.eu.ngrok.io',
    'AccountReference' => 'Dekut Farm',
    'TransactionDesc' => 'Pay for your orders'
   
  );
  
  $data_string = json_encode($curl_post_data);
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  
  $curl_response = curl_exec($curl);
  print_r($curl_response);

  
  // $consumer = loadingkey();
  // $secret = loadingsecret();
  //generating password for authenticating safaricom sand box environment


 
  ?>
   
  <script>
    alert("payment processing is underway. you need to enter your pin to complete transactions,, Thank you for using our service");
    window.location.href = "homepage.php";
  </script>
  <?php
  
  // echo $curl_response;

  ?>
  