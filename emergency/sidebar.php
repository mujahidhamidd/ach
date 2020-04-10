<div class="list-group">
              <a ></a>
          
              <img style="margin-bottom: 13px; width:200px; height:200px; margin-left:30px;" class="img-circle" src="./images/emergency.jpg" alt="">
              
              <p style="text-align: center; font-size: large;"> <?php   echo "T00". $_SESSION['job_number'] ?></p>
              <a href="patientfile.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="patientfile.php"? print 'red':''; ?> " class="list-group-item"> Patient file   &nbsp<span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
              <a href="diagnosis.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="diagnosis.php"? print 'red':''; ?> "class="list-group-item"> View diagnosis   &nbsp<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
              <a href="track.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="track.php"? print 'red':''; ?> " class="list-group-item"> Track the ambulance  &nbsp<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></a>
              <a href="change_password.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="change_password.php"? print 'red':''; ?> "  class="list-group-item"> Change password  &nbsp <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
              <a href="logout.php" class="list-group-item" style="background:<?php basename($_SERVER['PHP_SELF'])=="logout.php"? print 'red':''; ?> " > Logout  &nbsp  <span class="glyphicon glyphicon-ban-circle
                " aria-hidden="true"></span></a>
            
              <a ></a>
            
            
            </div>