<?php

session_start();

include '../conn.php';


 

// if admin logged in before redirect him to home

  if(isset($_SESSION['admin_logged_in']) ){

    header("Location: allusers.php");
  }


  // get submitted data from the form and check it againest database

  if(isset($_POST['job_number'],$_POST['password']  )){

   
	
	

    $job_number = $_POST['job_number'];
  
    $password = $_POST['password'];
    
  
    $getdata = mysqli_query($connect,"SELECT * FROM admins WHERE job_number ='$job_number' AND  password ='$password'  "); 
    $rows = mysqli_num_rows($getdata);


  
    // if the the quey return rows greator than zero then there is admin redirect him to the home page and save his data to the session
  
 
    $row = mysqli_fetch_array($getdata);
  
    if($rows > 0 )
    {
      $_SESSION['admin_logged_in'] = true;
      $_SESSION['job_number'] = $row['job_number'];
      header("Location: allusers.php");
    }
    // show error message
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
          
          <div class="col-md-4 " style="margin-top: 43px">
   
        

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
