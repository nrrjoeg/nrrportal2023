<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<?php $startdate=$firstdayofcurrentmonth; 
      $enddate=$lastdayofcurrentmonth;
?>

<!DOCTYPE html>
<html>
    <?php require_once $processdir.'/get-headtags/get-dashboard-headtags.php'; ?>

  <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

  <div class="content-container">

     <div class="headerbox">
       <?php echo "MTD " . date("M-Y") . " as of " . date("l d-M-Y") ."."; ?>
     
       <?php echo "<br>Opentaps Orders ceased on 30-November-2020. It was fun."; ?>
     </div>

     
  </div>
  
      <?php $mysqli->close();?>

    </body>
</html>
