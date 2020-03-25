<?php
 session_start();
include '../conn.php';

$upated =false;
$diagnosis='';
$id_number='';





  $allusers = mysqli_query($connect,"SELECT * FROM doctors  "); 
 


   


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Doctors </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> All Doctors </h1>
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

         
      
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">All Doctors </h3>
              </div>
              <div class="panel-body">


               <?php 
               
                    if(isset($_GET['job_number'])){

                       $selected_job_number=$_GET['job_number'];

                      $getdata = mysqli_query($connect,"SELECT * FROM doctors WHERE job_number ='$selected_job_number'   "); 
                 
                  
                  
                    
                      
                    
                   
                      $row = mysqli_fetch_array($getdata , MYSQLI_BOTH);


              

                        
                      ?>



                      <div class="col-md-3">
            
                             <p> Name : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['name']; ?>"  >

                            
                           

                              <p> Name father : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['father_name']; ?>" >


                              <p> Minor : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control" ,
                              value="<?php echo  $row['minor']; ?>">
                            
            
                       
                      </div>
                      <div class="col-md-3">
            

                      <p> University : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['university']; ?>"  >

                            
                           

                              <p> Name mother : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['mother_name']; ?>" >


                              <p> Blood type : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control" ,
                              value="<?php echo  $row['blood_type']; ?>">
                            
            
                       
                      </div>
                      <div class="col-md-3">
            

                               <p> Date of birth : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['date_of_birth']; ?>"  >

                            
                           

                              <p> Number job : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['job_number']; ?>" >


                              <p> Phone : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control" ,
                              value="<?php echo  $row['phone']; ?>">

            
                       
                      </div>
                      <div class="col-md-3">
            

                            <p> Gender : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['gender']; ?>"  >

                            
                           

                              <p> Major : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['major']; ?>" >


                              <p> Email : </p>
                             <input readonly  style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                         
                              width: 100%;"
                              type="text" class="form-control" ,
                              value="<?php echo  $row['email']; ?>">

            
                       
                      </div>


                      <?php
                    } else if(isset($_POST['search'])){
                     
                      $searched_id=$_POST['search'];
                      
                      $searched_user = mysqli_query($connect,"SELECT * FROM doctors where job_number='$searched_id' "); 
                      
                      
                      ?>

                      <div class="row">
                      <form action="" method="post" >
                      <div class="col-md-6">
                          <input style="
                          height: 40px;
                         border-radius: 20px;
                        width: 100%;" 
                        class="form-control" type="text" name="search" placeholder="Search... ">
                      </div>
                      <div class="col-md-3">
                      <button style="background: blue;
                        display: block;
                        height: 40px;
                        color: white;
                        border-radius: 20px;
                        width: 100%;" type="submit" class="btn btn-default btn-block">Search </button>
                      </div>

                    </form>
                    </div>


                    <table style="margin-top:24px;" class="table table-striped table-hover">
                    <tr>
                      <th>Number of user</th>
                      <th>Name of user</th>
                    
                      <th>User Type</th>
                      <th></th>
                    </tr>
                   <?php
                     while($result = mysqli_fetch_array($searched_user)) {
                      echo "<tr>";
                      echo "<td>" . $result['job_number'] . "</td>";
                      echo "<td>" . $result['name'] . "</td>";
               
                      echo "<td>" . $result['type'] . "</td>";
                      echo ' <td><a class="btn btn-danger" href="allusers.php?job_number=' . $result['job_number'] . '">View data</a></td>';
                      echo "</tr>";
                  }
                   
                   
                   
                   ?>
                   
                  </table>


                         
                    <?php  }

                    else {
                    ?>
                      <div class="row">
                      <form action="" method="post" >
                      <div class="col-md-6">
                          <input style="
                          height: 40px;
                         border-radius: 20px;
                        width: 100%;" 
                        class="form-control" type="text" name="search" placeholder="Search... ">
                      </div>
                      <div class="col-md-3">
                      <button style="background: blue;
                        display: block;
                        height: 40px;
                        color: white;
                        border-radius: 20px;
                        width: 100%;" type="submit" class="btn btn-default btn-block">Search </button>
                      </div>

                    </form>
                    </div>
                    <table style="margin-top:24px;" class="table table-striped table-hover">
                    <tr>
                      <th>Number of user</th>
                      <th>Name of user</th>
                   
                      <th>User Type</th>
                      <th></th>
                    </tr>
                   <?php
                     while($rowitem = mysqli_fetch_array($allusers)) {
                      echo "<tr>";
                      echo "<td>" . $rowitem['job_number'] . "</td>";
                      echo "<td>" . $rowitem['name'] . "</td>";
                    
                      echo "<td>" . $rowitem['type'] . "</td>";
                      echo ' <td><a class="btn btn-danger" href="allusers.php?job_number=' . $rowitem['job_number'] . '">View data</a></td>';
                      echo "</tr>";
                  }
                   
                   
                   
                   ?>
                   
                  </table>
          
           
       
           
         

                 <?php    }
               
               ?>

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
