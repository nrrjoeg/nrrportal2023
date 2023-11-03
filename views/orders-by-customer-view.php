<?php require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<html>
    <?php require_once $subviewsdir.'/headtags.php'; ?>

  <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php';?>

   <div class="content-container">

     <div class="search-choices">

         <form method="get" action="orders-by-customer-view.php">

           <table>
             <?php 
              require_once $subviewsdir.'/enter-customer-number.php';
             ?>
           </table>

        </form> 

     </div>
  
     <?php require_once $processdir.'/get-orders-by-customer.php';?>

     <?php require_once $subviewsdir.'/show-order-list.php';?>

   </div>

    </body>

</html>