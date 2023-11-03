<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
    <?php require_once $processdir.'/get-headtags/get-order-detail-headtags.php' ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <div class="content-container">

<div class="search-choices">

    <form method="get" action="order-details-view.php">
      <table>
        <?php require_once $subviewsdir.'/enter-order-number.php';?>
      </table>
   </form> 

</div>

  <div class="content-container">

    <?php require_once $processdir.'/get-order-details.php';
          require_once $subviewsdir.'/show-order-basics.php';
    ?>

    <?php require_once $processdir.'/get-order-line-items.php';
          require_once $subviewsdir.'/show-order-line-items.php';
    ?>

    <?php require_once $processdir.'/get-invoice-information.php';
          require_once $subviewsdir.'/show-invoice-information.php';
    ?>

    <?php require_once $processdir.'/get-order-billing-address.php';
          require_once $subviewsdir.'/show-order-billing-address.php';
    ?>

    <?php require_once $processdir.'/get-payment-information.php';
          require_once $subviewsdir.'/show-payment-information.php';
    ?>

  </div>

 <?php $mysqli->close();?>

    </body>
    
</html>