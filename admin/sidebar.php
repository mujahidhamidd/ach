<div class="list-group">
              <a ></a>
          
              <img style="margin-bottom: 13px; width:200px; height:200px; margin-left:50px;" class="img-circle" src="./images/admin.jpg" alt="">
              
              <p style="text-align: center; font-size: large;"> <?php   echo "T00". $_SESSION['job_number'] ?></p>
               <a href="allusers.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="allusers.php"? print 'red':''; ?> " class="list-group-item"> View all users   &nbsp<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
              <a href="adduser.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="adduser.php"? print 'red':''; ?> "class="list-group-item">   Add new user &nbsp<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
              <a href="change_password.php" style="background:<?php basename($_SERVER['PHP_SELF'])=="change_password.php"? print 'red':''; ?> "  class="list-group-item"> Change password  &nbsp <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
             <a href="logout.php" class="list-group-item" style="background:<?php basename($_SERVER['PHP_SELF'])=="logout.php"? print 'red':''; ?> " > Logout  &nbsp  <span class="glyphicon glyphicon-ban-circle
                " aria-hidden="true"></span></a>
            
              <a ></a>
            
            
            </div>