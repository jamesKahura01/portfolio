<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <style>
  body {
    /* background-image: linear-gradient(#E1F5FE, #fff); */
    /* background-repeat-y: no-repeat; */
    overflow-x: hidden
}

.card {
    padding: 50px;
    margin:0px;
    background-color: #1565C0;
    color: #fff;
    
}

a {
    color: #fff
}

a:hover {
    color: #fff
}

.box {
    margin-bottom: 60px;
    margin-top: 20px
}

.form-control {
    /* border: none;
    margin-left: 0;
    background-color: #1565C0;
    color: #fff */
}

input {
    /* border-bottom: 1px solid #fff !important;
    border-radius: 0 !important */
}

::-webkit-input-placeholder {
    color: #E1F5FE !important
}

::-moz-placeholder {
    color: #E1F5FE !important
}

:-ms-input-placeholder {
    color: #E1F5FE !important
}

:-moz-placeholder {
    color: #E1F5FE !important
}

.form-head {
    padding-left: 10px;
    padding-right: 12px;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 22px
}

.custom-control-label {
    font-size: 14px !important
}

.get-input {
    padding-left: 0
}

button {
    color: #1565C0 !important;
    font-weight: bold !important;
    padding: 10px 20px 10px 20px !important;
    border-radius: 0 !important
}

button:hover {
    color: #1565C0 !important;
    background-color: #fff
}
#form1{
        width:100%;
        /* height:500px; */
        box-shadow:0px 0px 4px 0px black;
        border-radius: 10px;
        text-align: center;
        margin:5px;
        overflow:hidden;
    }
    .servicecode {
        text-align: center;
    }
    .servicecode input,label{
    margin:20px;
    padding-left: 20px;
    border-radius: 25px;
    outline: none;
    font-size: 24px;
    border-color: blue;
    }
    .servicecode textarea{
        border-color: blue;
        border-radius: 10px;
        outline: none;
        padding:5px;
    }
    .servicecode #file{
        color: blue;
        font-size: 26px;
        cursor:pointer;
        overflow-x:auto;
    }
    p{
        /* color:blue;
        font-size: 24px; */
    }
    .servicecode span img{
      width: 150px;
      height: 150px;
    }
    .dotted{
        border: 1px dashed blue;
        border-radius: 10px;
    }
    .upload{
        text-align:center;
    }

    .user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #f39c12;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #60a3bc;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
    @media (max-width: 500px){
    .servicecode input,label{
    margin:20px;    
    font-size: 14px;   
    }
   
    .servicecode #file{        
        font-size: 18px;
        
    }
    .servicecode span img{
      width: 150px;
      height: 150px;
    }
    .upload .btn{
      margin-top: 50px;
    }
    }
    </style>
</head>
<body>
<?php
include_once 'connect.php';
    if(isset($_POST['upload'])){
        $firstname = $_POST['firstname'];
        $Lastname = $_POST['Lastname'];
        $Description = $_POST['Description'];
        $file = $_FILES['uploadfile'];
        $category = $_POST['category'];
        // print_r($filename);
        $filename = $_FILES['uploadfile']['name'];
        $filetype = $_FILES['uploadfile']['type'];
        $filetmp_name = $_FILES['uploadfile']['tmp_name'];
        $fileError = $_FILES['uploadfile']['error'];
        $filesize = $_FILES['uploadfile']['size'];
        // print_r($filename.'<br>'+$filetmp_name);

        $filext = explode('.', $filename);
        $fileactualext = strtolower(end($filext));

        $allowed = array('jpg','jpeg','pdf','png');

        if(in_array($fileactualext , $allowed)){
            if($fileError == 0){

                if($filesize < 10000000){
                   $newname = uniqid('', true).".".$fileactualext;
    
                   $photo_path = '../web/'.$newname;

                   move_uploaded_file($filetmp_name, $photo_path);
              //  ?>
              //  <script>
              //    alert("Moved successfully");
              //  </script>
              //  <?php
                $time = date('H:i:s');
                // echo $timestamp;                 
                   $sql = "insert into Display_info(Firstname,Lastname, Category,Description,photo_path,Time) values(?,?,?,?,?,?);";
                   $stmt = mysqli_stmt_init($conn);
                  if(mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_bind_param($stmt, "ssssss", $Firstname, $Lastname,$category,$Description,$photo_path,$time);
                   mysqli_stmt_execute($stmt);
                   header("location: admin_upload.php?error=success");
                   ?>
                   <script>
                  //  alert("image uploaded succeffully");
                   
                   </script>
                   <?php
                  }else{
                    ?>
                    <script>
                     alert("image not uploaded ");
                     </script>
                    <?php                   
                   header("location: Admin_upload.php?error=problem");
                  }
                }
                else{
                    // echo "the file size is to big";
                    header("location: Admin_upload.php?error=filetype");
                    $sizeErr = "<p>**The file size is to big</p>";
                }
            }
            else{
                // echo "there was an error";
                $somethingErr = "<p>**Something went wrong when upload image</p>";;
            }

        }
        else{
          header("location: Admin_upload.php?error=unfortunate");
            // echo "you can not upload file of that type";
            // $typeErr = "<p>**The file type is not supported by server</p>";;
        }

    }
    ?>
<nav class="navbar navbar-light bg-light justify-content-flex">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>   
<div class="container mt-sm-4">
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<div class="container">
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] = "success"){
      echo '<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Congratulations!</strong> You successfully tied your shoelace!
      </div>';
    }
  if($_GET['error'] = "unfortunate"){
      echo '<div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>The file type is not supported by server</strong> Try another file type!
      </div>';
    }
  }
  ?>
  <!-- <h2>Welcome All this is the platform were all politicians upload their projects is upto you to upload more and more projects to be identified by clients that you are hardworker</h2> -->
  <!-- Trigger the modal with a button -->
       <div class="upload">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Projects Upload</button>
             <!-- <button type="button" class="btn btn-info btn-lg" id="myBtn1">Aspirant Details Upload</button> --> 
      </div> 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CAMPAIGN UPLOAD</h4>
        </div>
        <div class="modal-body">
          <p>Projects upload by specific politicians</p>
          <!-- imported files -->
        <form action="" method="post" id="form1" enctype="multipart/form-data">
    <?php
                      if(isset($sizeErr)){
                          echo $sizeErr;
                      }
                      elseif(isset($typeErr)){
                          echo $typeErr;
                      }
                      elseif(isset($somethingErr)){
                        echo $somethingErr;
                      }
    ?>
          <div class="servicecode">
        <label for="code">Enter your first name</label>
        <input type="text" name="firstname" id="firstname">
    </div>
        <div class="servicecode">
              <label for="Cow_code">Enter your last name</label>
              <input type="text" name="Lastname" id="Lastname">
              </div>
              <div class="servicecode">
              <label for="Category">Enter The category</label>
              <select name="category">
                <option  value="MCA">MCA</option>
                <option  value="MP">MP</option>
                <option value="Governor">Governor</option>
                <option  value="Senator">Senator</option>
                <option  value="Women rep">Women rep</option>
              </select>
            </div>
        
                <div class="servicecode">
                    <label for="">Enter your description</label>
                    <textarea  name="Description" id="" cols="30" rows="5" style="Resize:none"></textarea>
                </div>
                      <div class="servicecode">
                      <div class="dotted">
                      <span><img src="../images/cloud.png" alt=""></span>       
                      <input type="file" name="uploadfile" id="file" >
                      </div>        
                  </div>
                  <div class="btn btn-primary">
                  <button type="submit" name="upload" class="submit">Upload</button>
    </div>
    
    </form>
          <!-- import files -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <?php
  if(isset($_POST['upload2'])){
        $firstname = $_POST['fstname'];
        $Lastname = $_POST['secname'];
        $about = $_POST['about'];
        $file = $_FILES['uploaddetails'];
        $category = $_POST['category'];
        // print_r($filename);
        $filename = $_FILES['uploaddetails']['name'];
        $filetype = $_FILES['uploaddetails']['type'];
        $filetmp_name = $_FILES['uploaddetails']['tmp_name'];
        $fileError = $_FILES['uploaddetails']['error'];
        $filesize = $_FILES['uploaddetails']['size'];

        $filext = explode('.', $filename);
        $fileactualext = strtolower(end($filext));

        $allowed = array('jpg','jpeg','pdf','png');

        if(in_array($fileactualext , $allowed)){
            if($fileError == 0){

                if($filesize < 10000000){
                   $newname = uniqid('', true).".".$fileactualext;
    
                   $photo = "../web/".$newname;

                   move_uploaded_file($filetmp_name, $photo_path);
              //  ?>
              <script>
              //    alert("Moved successfully");
              //  </script>
              <?php
                $time = date('H:i:s');
                // echo $timestamp;                 
                   $sql = "insert into Display_info(Firstname,Lastname, Photo, wardname,Time) values(?,?,?,?,?);";
                   $stmt = mysqli_stmt_init($conn);
                  if(mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname,$photo,$category,$time);
                   mysqli_stmt_execute($stmt);
                   ?>
                   <script>
                   alert("image uploaded succeffully");
                   header("location: profile.php?error=success");
                   </script>
                   <?php
                  }else{
                    ?>
                    <script>
                     alert("image not uploaded ");
                     </script>
                    <?php                   
                   header("location: Admin_upload.php?error=filetype");
                  }
                }
                else{
                  ?>
                    <script>
                     alert("image not uploaded ");
                     </script>
                    <?php                   
                    // echo "the file size is to big";
                    header("location: Admin_upload.php?error=filesize");
                    $sizeErr = "<p>**The file size is to big</p>";
                }
            }
            else{
                // echo "there was an error";
                $somethingErr = "<p>**Something went wrong when upload image</p>";;
            }

        }
        else{
            // echo "you can not upload file of that type";
            header("location: Admin_upload.php?error=unfortunate");
            $typeErr = "<p>**The file type is not supported by server</p>";;
        }

    
  }
  ?>
  

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CAMPAIGN UPLOAD</h4>
        </div>
        <div class="modal-body">
          <p>Projects upload by specific politicians</p>
          <!-- imported files -->
        <form action="" method="post" enctype="multipart/form-data">
    <?php
                      if(isset($sizeErr)){
                          echo $sizeErr;
                      }
                      elseif(isset($typeErr)){
                          echo $typeErr;
                      }
                      elseif(isset($somethingErr)){
                        echo $somethingErr;
                      }
    ?>
    <div class="servicecode">
        <label for="name">Enter your first name</label>
        <input type="text" name="fstname" id="firstname">
    </div>
        <div class="servicecode">
              <label for="name">Enter your last name</label>
              <input type="text" name="secname" id="Lastname">
              </div>
              <div class="servicecode">
              <label for="Category">Ward name</label>
              <select name="category">
                <option  value="MCA">MCA</option>
                <option  value="MP">MP</option>
                <option value="Governor">Governor</option>
                <option  value="Senator">Senator</option>
                <option  value="Women rep">Women rep</option>
              </select>
            </div>
        
                <div class="servicecode">
                    <label for="">Bio data about aspirant</label>
                    <textarea  name="about" id="" cols="30" rows="5" style="Resize:none"></textarea>
                </div>
                      <div class="servicecode">
                          <div class="dotted">
                          <span><img src="../images/cloud.png" alt=""></span>       
                          <input type="file" name="uploaddetails" id="file" >
                      </div>        
                  </div>
                  <div class="btn btn-primary">
                  <button type="submit" name="upload2" class="submit">Upload</button>
    </div>
    
    </form>
          <!-- import files -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


<section class="end">
        <div class="container-fluid px-0 py-4 mx-auto">
            <div class="row justify-content-center mx-auto">
                <div class="col-12 px-xs-0 col-md-11">
                    <div class="card">
                        <div class="row justify-content-center">
                            <!-- Left Side Content -->
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box">
                                            <h4>Want to create something together?</h4> <a href="#">
                                                <p>Get in touch</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box">
                                            <p class="mb-0">Moll Helsinki office</p>
                                            <h5>Annankatu 12, 2krs.<br>FIN-00120 Helsinki</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box">
                                            <h4>Help us make cool things!</h4> <a href="#">
                                                <p>Check our open positions</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-5">
                                        <div class="box">
                                            <p class="mb-0">Cześć! Warsaw office</p>
                                            <h5>Plac Bankowy 2<br>POL-00-095 Warsaw</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <!-- Right Side Content -->
                                    <h4 class="form-head">Keep up with news from us</h4>
                                    <form onsubmit="event.preventDefault()" class="form-control">
                                        <div class="form-group">
                                            <div class="col-12 get-input"> <input id="e-mail" type="text" placeholder="first.last@gmail.com" name="email" class="form-control input-box rm-border" onfocus="this.placeholder = ''" onblur="this.placeholder = 'first.last@gmail.com'"> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-12 get-input">
                                                <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label consent">I give my consent that my personal information can be collected and used according to the <a href="#"><span>Privacy Policy</span></a></label> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 px-4 py-2 get-input pb-5 mb-5"> <button type="submit" class="btn btn-submit rm-border">YES PLEASE</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- Bottom Content -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="row justify-content-center justify-content-md-start"> <img src="https://i.imgur.com/wTcBfAU.png" width="50px" height="50px"> </div>
                            </div>
                            <div class="col-md-7 d-flex justify-content-center mb-3">
                                <div class="d-inline-flex justify-content-center px-2 px-md-2 px-lg-3 pt-3"> <a href="#">About</a> </div>
                                <div class="d-inline-flex justify-content-center px-2 px-md-2 px-lg-3 pt-3"> <a href="#">Work</a> </div>
                                <div class="d-inline-flex justify-content-center px-2 px-md-2 px-lg-3 pt-3"> <a href="#">Blog</a> </div>
                                <div class="d-inline-flex justify-content-center px-2 px-md-2 px-lg-3 pt-3"> <a href="#">Careers</a> </div>
                                <div class="d-inline-flex justify-content-center px-2 px-md-2 px-lg-3 pt-3"> <a href="#">Contact</a> </div>
                            </div>
                            <div class="col-md-3 justify-content-center d-flex"> <a href="#">
                                    <div class="d-inline-flex px-3 px-md-2 px-lg-3 pt-3">
                                        <div class="fa fa-facebook"></div>
                                    </div>
                                </a> <a href="#">
                                    <div class="d-inline-flex px-3 px-md-2 px-lg-3 pt-3">
                                        <div class="fa fa-twitter"></div>
                                    </div>
                                </a> <a href="#">
                                    <div class="d-inline-flex px-3 px-md-2 px-lg-3 pt-3">
                                        <div class="fa fa-instagram"></div>
                                    </div>
                                </a> <a href="#">
                                    <div class="d-inline-flex px-3 px-md-2 px-lg-3 pt-3">
                                        <div class="fa fa-linkedin"></div>
                                    </div>
                                </a> <a href="#">
                                    <div class="d-inline-flex px-3 px-md-2 px-lg-3 pt-3">
                                        <div class="fa fa-google-plus"></div>
                                    </div>
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
  

  $("#myBtn1").click(function(){
    $("#myModal1").modal();
  });
});
</script>

   
</body>
</html>