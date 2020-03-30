<?php

  
session_start();
include '../conn.php';


if(isset($_GET['call'])){

 





  

  $getdata = mysqli_query($connect,"SELECT *	FROM Doctors where type='Emergency Doctor' LIMIT 1 "); 
  $rows = mysqli_num_rows($getdata);



  


  $row = mysqli_fetch_array($getdata);

  if($rows > 0 )
  {
          echo '<script language="javascript">';
      echo 'alert("Doctor: '.$row['name'].' phone: '.$row['phone'].' ")';
      echo '</script>';
  }
  else
  {
        
 
  }
  


}





?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Call Emergency doctor</title>
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
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Call Emergency doctor  </h3>
              </div>
              <div class="panel-body">

              <a style="background: #fff;
                      display: block;
                      border: 1px #000 solid;
                      height: 190px;
                      width: 50%;
                      color: black;
                      border-radius: 20px;
                      width: 75%;
                      margin-left: 97px;
                      margin-bottom: 100px;
                      margin-top: 200px;
                      text-align: center;" 
                      type="submit"  href="call.php?call=yes"  class="btn btn-default btn-block">Call Emergency doctor   &nbsp <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a>
             
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
   
  </body>
</html>
