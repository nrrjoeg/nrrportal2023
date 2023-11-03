<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<?php $startdate = $yesterday;
      $enddate = $yesterday;
?>

<!DOCTYPE html>
<html>
    <?php require_once $subviewsdir.'/headtags.php' ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <div class="content-container">

     <div class="headerbox">
      <?php echo "Completed Order List for Yesterday - " . $yesterday . "."?>

      <?php echo "<br>Opentaps Orders ceased on 30-November-2020. It was fun."; ?>
    </div>

    </div>
    
      <?php $mysqli->close();?>

    </body>
</html>
