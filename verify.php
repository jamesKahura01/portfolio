<?php
include 'server.php';
if(isset($_GET['vkey']))
{
    $vkey=$_GET['vkey'];
    $sql="SELECT verified, vkey FROM users WHERE verified=0 AND vkey='$vkey' LIMIT 1";
    $result=mysqli_query($db,$sql);
    if($result->num_rows==1){
        //validate email
        $sql="UPDATE users SET verified=1 WHERE vkey='$vkey'";
        $result=mysqli_query($db, $sql);
        if($result){
            ?>
            <script type="text/javascript">
                alert("your account has now been verified you can now login in");
                window.location.href="index.php";
                </script>
            <?php
        
        }
        else{
            ?>
            <script type="text/javascript">
                alert("OOOPS! an error occurred");
                window.location.href="register.php";
                </script>
            <?php
            
        }
    }
        else{
            ?>
            <script type="text/javascript">
                alert("OOOPS! this account has already  been verified...please login");
                window.location.href="index.php";
                </script>
            <?php
         
        }
    }
    else{
        die("something went wrong");
    }



?>