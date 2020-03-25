<div class="list-group">
              <a ></a>
          
              <img style="margin-bottom: 13px;  margin-left: 50px;" class="img-circle" src="https://via.placeholder.com/150" alt="">
               <p style="text-align: center; font-size: large;"> <?php   echo  $_SESSION['job_number'] ?></p>
              <a href="home.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="home.php"? print 'red':''; ?> " class="list-group-item"> Home  &nbsp <span class=" glyphicon glyphicon-home" aria-hidden="true"></span></a>
              <a href="patientfile.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="patientfile.php"? print 'red':''; ?> " class="list-group-item"> Patient file   &nbsp<span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
              <a href="diagnosis.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="diagnosis.php"? print 'red':''; ?> "class="list-group-item"> Write diagnosis   &nbsp<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
              <a href="call.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="call.php"? print 'red':''; ?> " class="list-group-item"> Call emergency doctor  &nbsp<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a>
              <a href="change_password.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="change_password.php"? print 'red':''; ?> "  class="list-group-item"> Change password  &nbsp <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
              <a href="logout.php" class="list-group-item" style="background:<?php basename($_SERVER['PHP_SELF'])=="logout.php"? print 'red':''; ?> " > Logout  &nbsp  <span class="glyphicon glyphicon-ban-circle
                " aria-hidden="true"></span></a>
            
              <a ></a>
            
            
            </div>