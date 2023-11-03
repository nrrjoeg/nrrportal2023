<?php include $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
  <head>
 
  <?php require_once $processdir.'/get-headtags/get-dashboard-headtags.php'; ?>
 
  </head>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php';?>

   <div class=content-container>

     <div class="headerbox">
        Enter the beginning and ending dates for sales results.
     </div>

     <div class="search-choices">

      <form method="get" action="between-dates-dashboard.php">

       <table>
         <?php 
          require_once $subviewsdir.'/begin-date-input.php';
          require_once $subviewsdir.'/end-date-input.php';
          require_once $subviewsdir.'/submit-button.php';
         ?>
       </table>

      </form> 

   </div>
        <?php
          require_once $processdir.'/establish-begin-and-end-dates.php';
          require_once $subviewsdir.'/show-begin-and-end-dates.php';
        ?>

        <?php
          require_once $subviewsdir.'/dashboard.php';
        ?>
   </div>     
        
      <?php $mysqli->close();?>

    </body>
</html>