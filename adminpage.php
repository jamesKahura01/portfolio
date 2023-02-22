
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>upload produce</title>
</head>
<body>
    
    <div class="header">
    <h1>Add produce</h1>
</div>
<form method="post"action="Adminpage.php" enctype="multipart/form-data">
<div class="form-control">
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'success'){
            ?>
            <p style="color:red">successfully uploaded</p>
            <?php
        }
        if($_GET['error'] == 'filesize'){
            ?>
            <p style="color:red">File type not supported in the server</p>
            <?php
        }
    }
    ?>
</div>
<div class="input-group">
    <label>item name</label>
    <input type="text"required name="item_name">
</div>
<div class="input-group">
    <label>item price</label>
    <input type="text" required name="item_price">
</div>
<div class="input-group">
    <label>item image path</label>
    <input type="file" required name="item_image">
</div>
<div class="input-group">
    <label>category</label>
    <select name="category" id="category"data-type="string">
        <option value="fruits">fruits</option>
        <option value="vegetables">vagetables</option>
        <option value="leafy vegetables"> leafy vegetables</option>
        <option value="others">others</option>
    </select>
 
</div>
    <div class="input-group">

    <button type="submit"class="btn"name="upload">Upload</button>
</div>
    
</form>
      

        
     
</form>
<?php
include 'server.php';
if(isset($_POST['upload'])){
    $filename = $_FILES['item_image']['name'];
    $filetype = $_FILES['item_image']['type'];  
    $filetmp_name = $_FILES['item_image']['tmp_name'];
    $fileError = $_FILES['item_image']['error'];
    $filesize = $_FILES['item_image']['size'];
      
    $item_name= $_POST['item_name'];
    $item_price= $_POST['item_price'];
    $category=$_POST['category'];
    // echo $fileError;

    //corecting case sensitive file extension
    $filext = explode('.', $filename);
        $fileactualext = strtolower(end($filext));

    //declare the required array file extension type
    $allowed = array('jpg','.jpg','JPG','jpeg','png');
if(is_numeric($item_price)){
    if(in_array($fileactualext , $allowed)){
        if($fileError == 0){

            if($filesize < 20000){
               $newname = uniqid('', true).".".$fileactualext;

               $photo_path = "images/".$newname;

               move_uploaded_file($filetmp_name, $photo_path);
               
          //  ?>
          <script>
             alert("Moved successfully");
           </script>
          <?php
            $time = date('H:i:s');
            // echo $timestamp;                 
            $sql = "INSERT into items(item_name,item_price,item_image,category) values(?,?,?,?);";
               $stmt = mysqli_stmt_init($db);
              if(mysqli_stmt_prepare($stmt, $sql)){
                mysqli_stmt_bind_param($stmt, "siss", $item_name, $item_price,$photo_path,$category);
               mysqli_stmt_execute($stmt);
               ?>
               <script>
               alert("image uploaded succeffully");
               
               </script>               
               <?php
               header("location: adminpage.php?error=success");
              }else{
                ?>
                <script>
                 alert("server internal error ");
                 </script>
                <?php                   
               header("location: adminpage.php?error=filetype");
              }
            }
            else{
              ?>
                <script>
                 alert("image not uploaded ");
                 </script>
                <?php                   
                // echo "the file size is to big";
                header("location: adminpage.php?error=filesize");
                $sizeErr = "<p>**The file size is to big</p>";
            }
        }
        else{
            // echo "there was an error";
            $somethingErr = "<p>**Something went wrong when upload image</p>";;
        }

    }
    else{
        header("location: adminpage.php?error=filesize");
        echo "File type not supported";
    }
}
else{
    echo "price field can not accept string";
}

    // $query="INSERT INTO items (item_name,item_price,item_image,category)
    // VALUES('$item_name', '$item_price', '$item_image', '$category')";
    // mysqli_query($db,$query);

    //print_r($filename)
    // $filename = $_FILES['uploadfile']['name'];
    // $filetype = $_FILES['uploadfile']['type'];
    // $filetmp_name = $_FILES['uploadfile']['tmp_name'];
    // $fileError = $_FILES['uploadfile']['error'];
    // $filesize = $_FILES['uploadfile']['size'];


    }
    else{
        ?>
        <!-- <script>alert("Button not submitted")</script> -->
        <?php
    }
    ?>






</body>
</html>