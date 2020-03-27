<?php
 session_start();
include '../conn.php';

   

  $saved="";



if (isset($_POST['name']) ){

  $job_number=$_POST['job_number'];
  $name=$_POST['name'];
  $password='password';
  $email=$_POST['email'];
  $father_name=$_POST['father_name'];
  $mother_name=$_POST['mother_name'];
  $phone=$_POST['phone'];
  $date_of_birth=$_POST['date_of_birth'];
  $gender=$_POST['gender'];
  $uni=$_POST['univer'];
  $minor=$_POST['minor'];
  $major=$_POST['major'];
  $blood_type=$_POST['blood_type'];
  $type=$_POST['type'];;



    
  $savedata = mysqli_query($connect,"INSERT INTO `doctors` (`job_number`, `name`, `password`, `email`, `father_name`, `mother_name`, `phone`, `date_of_birth`, `gender`, `major`, `university`, `minor`, `blood_type`, `type`) 
  VALUES ('$job_number', '$name', '$password', '$email', '$father_name', '$mother_name', '$phone', '$date_of_birth', '$gender', '$gender', '$uni', '$minor', '$blood_type', '$type');	"); 

     
  
        if($savedata){
                
          $saved="done";

          
        }
        else{

          $saved="not";
        }
  


}
	


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Write diagnosis</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Add User</h1>
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
                  if($saved=="done" ){
                     echo '<div class="alert alert-success">Saved !</div>';

                     } 
                  else if($saved=="not" ){

                     echo '<div class="alert alert-danger">Error ! !</div>';

                     } 
                  ?>
            <!-- add user form-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Write Diagnosis </h3>
              </div>
              <div class="panel-body">
              <form action="" method="post" >
                      <div class="row">



         <div class="col-md-3">
            
            <p> Name : </p>
            <input  style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="name" >
  
           
          

             <p> Name father : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
              width: 100%;"
              type="text" class="form-control",
              name="father_name" >


             <p> Minor : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control" ,
             name="minor" >
           </div>


     <div class="col-md-3">
            <p> University : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="univer" >
           
          

             <p> Name mother : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="mother_name" >


             <p> Blood type : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control" ,
             name="blood_type" >
           

      
     </div>
     <div class="col-md-3">

              <p> Date of birth : </p>
            <input  style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="date_of_birth" >

             <p> Number job : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="job_number" >


             <p> Phone : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control" ,
             name="phone">


      
     </div>
     <div class="col-md-3">
         
            <p> Gender : </p>
            <input  style="
             display: block;
             height: 50px;
             margin-bottom:8px;
             width: 100%;"
             type="text" class="form-control",
             name="gender" >
            
            <p> Major : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
         
        
             width: 100%;"
             type="text" class="form-control",
            name="major" >


             <p> Email : </p>
            <input   style="
             display: block;
             height: 50px;
             margin-bottom:8px;
         
        
             width: 100%;"
             type="text" class="form-control" ,
            name="email">
          </div>


            </div>

            <div class="row">
            <div class="form-group">
            <label for="sel1">Type:</label>
            <select class="form-control" name="type">
              <option>Pramedic </option>
              <option>Emergency Doctor</option>
              
            </select>
          </div>

           </div>

          <div class="row">
                      <button style="background: blue;
                        display: block;
                        height: 40px;
                        color: white;
                        border-radius: 20px;
                        width: 100%;" type="submit" class="btn btn-default btn-block">Save </button>
           </div>
                
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



   
</div>

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  </body>
</html>
