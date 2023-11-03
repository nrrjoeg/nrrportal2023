<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<?php $startdate = $firstdayofyear;
      $enddate = $todaydate;
?>

<!DOCTYPE html>
<html>
  <head>
 
  <?php require_once $processdir.'/get-headtags/get-dashboard-headtags.php'; ?>
 
  </head>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php';?>

     <div class="content-container">

       <div class="headerbox">
         <?php echo "Year To Date " . " as of " . date("l d-M-Y"); ?>
       </div>

      <?php require_once $subviewsdir.'/ytd-specific-dashboard.php' ?>

     </div>

      <?php $mysqli->close();?>

    </body>
</html>
