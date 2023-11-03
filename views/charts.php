<?php require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $startdate = $firstdayoflastmonth;
      $enddate = $lastdayoflastmonth;
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
         <?php echo "Last month  " . date("M-Y",strtotime("-1 month")); ?>
       </div>

    <?php require_once $processdir.'/nrr-connect.php'; ?>

    <?php require_once $chartsdir.'/large-resellers-bar.php'; ?>

    <?php require_once $chartsdir.'/orders-by-store-bar.php'; ?>

    <?php require_once $chartsdir.'/prepare-daily-data.php' ?>
    
    <?php require_once $chartsdir.'/chart-test.php'; ?>

</div>

   <?php $mysqli->close();?>

</body>

</html>
