<?php

session_start();

include '../conn.php';



  if(isset($_SESSION['emergency_logged_in']) ){

    header("Location: patientfile.php");
  }

  if(isset($_POST['job_number'],$_POST['password']  )){

   
	
	

    $job_number = $_POST['job_number'];
  
    $password = $_POST['password'];
    
  
    $getdata = mysqli_query($connect,"SELECT * FROM Doctors WHERE job_number ='$job_number'   AND   password ='$password'   AND type='Emergency Doctor'"); 
    $rows = mysqli_num_rows($getdata);


  
    
  
 
    $row = mysqli_fetch_array($getdata , MYSQLI_BOTH);
  
    if($rows > 0 )
    {
      $_SESSION['emergency_logged_in'] = true;
      $_SESSION['job_number'] = $row['job_number'];
      header("Location: patientfile.php");
    }
    else
    {
      echo '<div class="alert alert-danger">Wrong Credentials Please Try again ! !</div>';   
   
    }

 
  }


  





?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

   

  
    <section id="main">
      <div style="margin-top: 100px;" class="container">
        <div class="row">

          <div class="col-md-4 ">
            <img  style="width: 400px; height: 400px" src="../logo.png" alt="">
             
          </div>
          
          <div class="col-md-4 "  style="margin-top: 43px;">
            <form id="login" action="" method="post" >
                  <div class="form-group">
                    <label>Enter job number :</label>
                    <input name="job_number" style="
                    display: block;
                    height: 50px;
                 
                    border-radius: 20px;
                    width: 100%;"
                    type="text" class="form-control" placeholder="Job number">
                  </div>
                  <div class="form-group">
                    <label>Password :</label>
                    <input  style="
                    display: block;
                    height: 50px;
                 
                    border-radius: 20px;
                    width: 100%;" name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <button style="background: blue;
                  display: block;
                  height: 50px;
                  color: white;
                  border-radius: 20px;
                  width: 100%;" type="submit" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>




  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
