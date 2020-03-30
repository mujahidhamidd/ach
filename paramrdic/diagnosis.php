<?php
 session_start();
include '../conn.php';

$upated =false;

   
  

if (isset($_POST['diagnosis']) ){

 
  $diagnosis = $_POST['diagnosis'];
  $get_patient_data = mysqli_query($connect,"SELECT id_number FROM patient WHERE complete ='no'  ORDER BY requested_at DESC "); 
  $rows = mysqli_num_rows($get_patient_data);

   

  


  $row = mysqli_fetch_array($get_patient_data , MYSQLI_BOTH);

  if($rows > 0 )
  {
   
    // $locaion_lat=  $row['locaion_lat'];
    // $location_lng=  $row['location_lng'];
    $id_number=$row['id_number'];
   
    $update_diagnosis = mysqli_query($connect,"UPDATE `patient` SET `diagnosis` = '$diagnosis'  WHERE `patient`.`id_number` = $id_number;
    "); 

   
        if($update_diagnosis){
          $upated =true;

        }

  
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
            <h1> Write diagnosis</h1>
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
           if($upated){
                     echo '<div class="alert alert-success">Diagnosis Saved !</div>';

                        }  
    ?>
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Write Diagnosis </h3>
              </div>
              <div class="panel-body">

               <form  action="" method="post" >
                  
                  <div class="form-group">
             
                    <textarea  style="
                    display: block;
                    height: 500px;
                 
                    border-radius: 20px;
                    width: 100%;" name="diagnosis" type="text" class="form-control" placeholder="Password">
                    </textarea>
                  </div>
                  <button style="background: blue;
                  display: block;
                  height: 50px;
                  color: white;
                  border-radius: 20px;
                  width: 100%;" type="submit" class="btn btn-default btn-block">Send Diagnosis</button>
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
