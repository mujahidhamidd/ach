<?php
 session_start();
include '../conn.php';



   
	
	

    // $job_number = $_POST['job_number'];
  
    // $password = $_POST['password'];
    
  
    $doctor_data = array();
    $locaion_lat='';
    $name='';
    $location_lng='';

  



    $getlocation = mysqli_query($connect,"SELECT * FROM patient WHERE complete ='no' ORDER BY requested_at DESC   "); 
    $rows = mysqli_num_rows($getlocation);
    
  
    
  
    $respose = array();
    $row = mysqli_fetch_array($getlocation , MYSQLI_BOTH);
  
    if($rows > 0 )
    {
      $locaion_lat=  $row['locaion_lat'];
      $location_lng=  $row['location_lng'];
      $name=  $row['name'];

    }
    else
    {
          
       
    }
    
  

  







?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
                <h3 class="panel-title">Home </h3>
              </div>
              <divclass="panel-body">
                
              <div   style="height:600px;  width:100%;
    " id="map"></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    function initMap(){
      // Map options
      var options = {
        zoom:8,
        center:{lat:24.774265,lng:46.738586}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);


      var markers = [
        {
          coords:{lat:<?php echo $locaion_lat; ?>,lng:<?php echo  $location_lng; ?>},
          content:'<h6><?php echo  $name; ?></h6>'
        },
      
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];

  
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          icon:{
                    url: "ambulance.png", // url
                    scaledSize: new google.maps.Size(80, 80), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                },
            label: {
           
            color: "#fff",
            fontWeight: "bold",
            fontSize:"18px"
                }
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw7IF5dgrLYfevSM2pHzENz0ungw0dt88&callback=initMap">
    </script>
  </body>
</html>
