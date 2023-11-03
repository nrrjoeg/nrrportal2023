<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
    <?php require_once $processdir.'/get-headtags/get-customer-headtags.php' ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <div class="content-container">

<div class="search-choices">

    <form method="get" action="customer-details-view.php">
      <table>
        <?php require_once $subviewsdir.'/enter-customer-number.php';?>
      </table>
   </form> 

</div>

  <div class="content-container">

    <?php require_once $processdir.'/get-order-average-by-customer.php';
          require_once $subviewsdir.'/show-average-order-by-customer.php';   
    ?>

    <?php require_once $processdir.'/get-customer-basics-by-number.php';
          require_once $subviewsdir.'/show-customer-basics.php';
    ?>

    <?php require_once $processdir.'/get-customer-addresses-by-number.php'; 
          require_once $subviewsdir.'/show-customer-postal-addresses.php';
    ?>

    <?php require_once $processdir.'/get-orders-by-customer.php';
          require_once $subviewsdir.'/show-order-list.php';
    ?>

  </div>

 <?php $mysqli->close();?>

    </body>
    
</html>