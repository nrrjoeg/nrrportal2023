<?php include $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
  <head>
 
     <?php require_once $subviewsdir.'/headtags.php'; ?>
 
  </head>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php';?>

<div class="content-container">

     <div class="headerbox">
      Enter the beginning and ending dates for Order List.
    </div>

    <div class="search-choices">

       <form method="get" action="between-dates-orders-view.php">

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
        require_once $processdir.'/get-order-list.php';
        require_once $subviewsdir.'/show-order-list.php';
      ?>

</div>
      <?php $mysqli->close();?>

    </body>
</html>
