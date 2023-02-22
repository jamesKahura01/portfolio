<?php

include 'server.php';

						
if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];
    $sql="DELETE FROM items WHERE id=$id";
    $result=mysqli_query($db, $sql);
    if($result){
        ?>
        <script type="text/javascript">
            alert("item deleted sucessfully")
            window.location.href="admin1.php";
            </script>
        <?php
    
    }
    else{
        echo "not deleted";
    }
}
?>