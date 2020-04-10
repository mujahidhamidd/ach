<?php
 session_start();
include '../conn.php';







$getuser = mysqli_query($connect,"SELECT * FROM patient WHERE complete ='no' ORDER BY requested_at DESC   "); 
$get_user = $getuser->fetch_assoc();



   


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  

    <header id="header">
      <div class="container" >
        <div class="row">
          <div class="col-md-10">
            <h1> Patient File  </h1>
          </div>
        
        </div>
      </div>
    </header>

  

    <section id="main">
      <div class="container"  style="background: white">
        <div class="row">
          <div class="col-md-3">
            

          <?php include('sidebar.php');  ?>

           
          </div>
          <div class="col-md-9">

         
      
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Patient File  </h3>
              </div>
              <div class="panel-body"  style="background: #f4f4f4">


               <?php 
               
                    if(isset($_GET['id_number'])){

                       $selected_id_number=$_GET['id_number'];

                      $getdata = mysqli_query($connect,"SELECT * FROM patient WHERE id_number ='$selected_id_number'   "); 
                 
                  
                  
                    
                      
                    
                   
                      $row = mysqli_fetch_assoc($getdata);


              

                        
                      ?>


              

              <div class="container"  style="background: #f4f4f4"  > 
              <div class="row"> 

                       <h3> User Data : </h3>
                       <br> 

                      <div class="col-md-2">
            
                             <p> Name : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['name']; ?>"  >

                            
                           

                           


                             
                            
            
                       
                      </div>
                      <div class="col-md-2">
            

                      <p> Job : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['job']; ?>"  >

                            
                           

                            

                          
                            
            
                       
                      </div>
                      <div class="col-md-2">
            

                               <p> Date of birth : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['date_of_birth']; ?>"  >

                            
                           

                          

            
                       
                      </div>
                      <div class="col-md-2">
            

                            <p> Gender : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['gender']; ?>"  >

                            
                           

                         

            
                       
                      </div>


                 </div>




                 <div class="row"> 
                      <div class="col-md-2">
            
                             <p> Gender : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['gender']; ?>"  >

                            
                           

                           


                             
                            
            
                       
                      </div>
                      <div class="col-md-2">
            

                      <p> Assurance : </p>
                             <input readonly style="
                              display: block;
                              height: 50px;
                              margin-bottom:8px;
                          
                           
                              width: 100%;"
                              type="text" class="form-control",
                              value="<?php echo  $row['assurance']; ?>"  >

                            
                           

                            

                          
                            
            
                       
                      </div>
                    


                 </div>


               


                         



                              <div class="row"> 


                              <h3> Regular Habits : </h3>

                              <br>


                       
                                <div class="col-md-2">

                                      <p> Eat Fruits : </p>
                                      <input readonly style="
                                      display: block;
                                      height: 50px;
                                      margin-bottom:8px;
                                  
                                    
                                      width: 100%;"
                                      type="text" class="form-control",
                                      value="<?php echo  $row['eat_fruits']; ?>"  >

                                    
                                    

                                    


                                      
                                    


                                </div>
                                <div class="col-md-2">


                                <p> Eat Vegetables : </p>
                                      <input readonly style="
                                      display: block;
                                      height: 50px;
                                      margin-bottom:8px;
                                  
                                    
                                      width: 100%;"
                                      type="text" class="form-control",
                                      value="<?php echo  $row['eat_vegetables']; ?>"  >

                                    
                                    

                                    

                                  
                                    


                                </div>


                                <div class="col-md-2">


                                <p> Eat meat : </p>
                                <input readonly style="
                                display: block;
                                height: 50px;
                                margin-bottom:8px;


                                width: 100%;"
                                type="text" class="form-control",
                                value="<?php echo  $row['eat_meat']; ?>"  >










                                </div>

                                <div class="col-md-2">


                                <p> Smoke Cigarrete : </p>
                                <input readonly style="
                                display: block;
                                height: 50px;
                                margin-bottom:8px;


                                width: 100%;"
                                type="text" class="form-control",
                                value="<?php echo  $row['smoke']; ?>"  >










                                </div>
                                </div>


                         


                    <div class="row"> 


                



                    <div class="col-md-2">

                          <p> Drink Alcohol : </p>
                          <input readonly style="
                          display: block;
                          height: 50px;
                          margin-bottom:8px;
                      
                        
                          width: 100%;"
                          type="text" class="form-control",
                          value="<?php echo  $row['alcohol']; ?>"  >

                        
                        

                        


                          
                        


                    </div>
                    <div class="col-md-2">


                    <p> Drugs : </p>
                          <input readonly style="
                          display: block;
                          height: 50px;
                          margin-bottom:8px;
                      
                        
                          width: 100%;"
                          type="text" class="form-control",
                          value="<?php echo  $row['drugs']; ?>"  >

                        
                        

                        

                      
                        


                    </div>


                    <div class="col-md-2">


                    <p> Work Effot : </p>
                    <input readonly style="
                    display: block;
                    height: 50px;
                    margin-bottom:8px;


                    width: 100%;"
                    type="text" class="form-control",
                    value="<?php echo  $row['work_effort']; ?>"  >










                    </div>

                    <div class="col-md-2">


                    <p> Moving Effort : </p>
                    <input readonly style="
                    display: block;
                    height: 50px;
                    margin-bottom:8px;


                    width: 100%;"
                    type="text" class="form-control",
                    value="<?php echo  $row['moving_effort']; ?>"  >










                    </div>
                    </div>



                    <div class="row"> 


                



                                    <div class="col-md-2">

                                          <p> Vacation effort : </p>
                                          <input readonly style="
                                          display: block;
                                          height: 50px;
                                          margin-bottom:8px;
                                      
                                        
                                          width: 100%;"
                                          type="text" class="form-control",
                                          value="<?php echo  $row['vacation_effort']; ?>"  >

                                        
                                        

                                        


                                          
                                        


                                    </div>
                                   
                                    </div>


                                    <div class="row"> 


                



                            <div class="col-md-2">

                                  <p> Chronic diseases	 : </p>
                                  <input readonly style="
                                  display: block;
                                  height: 50px;
                                  margin-bottom:8px;
                              
                                
                                  width: 100%;"
                                  type="text" class="form-control",
                                  value="<?php echo  $row['chronic_diseases']; ?>"  >

                                  </div>


                                  <div class="col-md-2">

                                  <p> Danegrous diseases: </p>
                                  <input readonly style="
                                  display: block;
                                  height: 50px;
                                  margin-bottom:8px;
                              
                                
                                  width: 100%;"
                                  type="text" class="form-control",
                                  value="<?php echo  $row['danegrous_diseases']; ?>"  >

                                  </div>


                                  <div class="col-md-2">

                                    <p> Medication: </p>
                                    <input readonly style="
                                    display: block;
                                    height: 50px;
                                    margin-bottom:8px;


                                    width: 100%;"
                                    type="text" class="form-control",
                                    value="<?php echo  $row['medication']; ?>"  >

                                    </div>


                                    <div class="col-md-2">

                                    <p> Allergic: </p>
                                    <input readonly style="
                                    display: block;
                                    height: 50px;
                                    margin-bottom:8px;


                                    width: 100%;"
                                    type="text" class="form-control",
                                    value="<?php echo  $row['allergic']; ?>"  >

                                    </div>



                            
                            
                            
                                </div>


                                <div class="row"> 


                



                                <div class="col-md-2">

                                      <p> 	Previous surgeries: </p>
                                      <input readonly style="
                                      display: block;
                                      height: 50px;
                                      margin-bottom:8px;
                                  
                                    
                                      width: 100%;"
                                      type="text" class="form-control",
                                      value="<?php echo  $row['prev_surgeries']; ?>"  >
                                     </div>


                                     <div class="col-md-2">

                                    <p>Vaccination: </p>
                                    <input readonly style="
                                    display: block;
                                    height: 50px;
                                    margin-bottom:8px;


                                    width: 100%;"
                                    type="text" class="form-control",
                                    value="<?php echo  $row['vaccination']; ?>"  >
                                  </div>


                                  <div class="col-md-2">

                                  <p>	Family diseases: </p>
                                  <input readonly style="
                                  display: block;
                                  height: 50px;
                                  margin-bottom:8px;


                                  width: 100%;"
                                  type="text" class="form-control",
                                  value="<?php echo  $row['family_diseases']; ?>"  >
                                  </div>

                                </div>

                         
                         
                              </div>




                             
                              
                      <?php
                    } 
                    else {
                    ?>
                     
                    <table style="margin-top:24px;" class="table table-striped table-hover">
                    <tr>
                      <th>ID of user</th>
                      <th>Name of user</th>
                   
                    
                      <th></th>
                    </tr>
                   <?php
                   
                      echo "<tr>";
                      echo "<td>" . $get_user['id_number'] . "</td>";
                      echo "<td>" . $get_user['name'] . "</td>";
                    
                 
                      echo ' <td><a class="btn btn-danger" href="patientfile.php?id_number=' . $get_user['id_number'] . '">View data</a></td>';
                      echo "</tr>";
                
                   
                   
                   
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

    <footer id="footer"  >
      <p>Copyright ACH, &copy; 2020</p>
    </footer>

    <!-- Modals -->

   
</div>

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  </body>
</html>
