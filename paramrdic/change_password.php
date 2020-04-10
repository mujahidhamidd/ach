<?php session_start();
include '../conn.php';


$status ="";

   
$job_number= $_SESSION['job_number']  ;

if (isset($_POST['newpassword'],$_POST['oldpassword']) ){

 
  $newpassword = $_POST['newpassword'];
  $oldpassword = $_POST['oldpassword'];
  $get_patient_data = mysqli_query($connect,"SELECT password FROM doctors WHERE job_number ='$job_number' "); 
  $rows = mysqli_num_rows($get_patient_data);

   

  


  $row = mysqli_fetch_array($get_patient_data , MYSQLI_BOTH);

  if($rows > 0 )
  {

     if ($oldpassword==$row['password']){

      
    $update_password = mysqli_query($connect,"UPDATE `doctors` SET `password` = '$newpassword'  WHERE `doctors`.`job_number` = $job_number;
    "); 

   
        if($update_password){
          $status ="changed";

        }



     }
     else {

      $status ="error";
     }
   
    // $locaion_lat=  $row['locaion_lat'];
    // $location_lng=  $row['location_lng'];
 
   

  
  }
  else
  {
        
     
  }
  


}
	

  
    // $password = $_POST['password'];
    
  
  
  



   
  




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change password</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Home</h1>
          </div>
        
        </div>
      </div>
    </header>

  

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            

          <?php include('sidebar.php');  ?>

           
          </div>
          <div class="col-md-9">

          <?php     
           if($status=="changed"){
                     echo '<div class="alert alert-success">Password changed !</div>';

                        }  
                        else if($status=="error"){

                          echo '<div class="alert alert-danger">Your password dosent match ! !</div>';
                        }
                   ?>
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Change Password  </h3>
              </div>
              <div class="panel-body">

              <form id="login" action="" method="post" >
                  <div class="form-group">
                    <label>Old password:</label>
                    <input name="oldpassword" style="
                    display: block;
                    height: 50px;
                 
                    border-radius: 20px;
                    width: 100%;"
                    type="text" class="form-control" placeholder="Old password">
                  </div>
                  <div class="form-group">
                    <label>New Password :</label>
                    <input  style="
                    display: block;
                    height: 50px;
                 
                    border-radius: 20px;
                    width: 100%;" name="newpassword" type="password" class="form-control" placeholder="New Password">
                  </div>


                  <div class="form-group">
                    <label>Confirm Password :</label>
                    <input  style="
                    display: block;
                    height: 50px;
                 
                    border-radius: 20px;
                    width: 100%;" name="confirmpassword" type="password" class="form-control" placeholder="Confirm New Password">
                  </div>
                  <button style="background: blue;
                  display: block;
                  height: 50px;
                  color: white;
                  border-radius: 20px;
                  width: 100%;" type="submit" class="btn btn-default btn-block">Change</button>
              </form>

               </div>
              </div>

            >
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright ACH, &copy; 2020</p>
    </footer>

    <!-- Modals -->

   
</div>

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  </body>
</html>
