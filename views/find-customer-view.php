<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<html>
    <?php require_once $processdir.'/get-headtags/get-customer-headtags.php'; ?>

  <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php';?>

   <div class="content-container">

     <div class="search-choices">

          <form method="get" action="find-customer-view.php">

            <table>

             <?php 
              require_once $subviewsdir.'/enter-name.php';
              require_once $subviewsdir.'/enter-account-name.php';
              require_once $subviewsdir.'/enter-customer-attn.php';
              require_once $subviewsdir.'/enter-customer-number.php';
              require_once $subviewsdir.'/enter-postal-code.php';
              require_once $subviewsdir.'/enter-customer-attn.php';
             ?>

           </table>

          </form> 

    </div>
  
    <?php
         require_once $processdir.'/get-customer-by-contact-name.php';
         require_once $processdir.'/get-customer-by-account-name.php';
         require_once $processdir.'/get-customers-by-attn.php';
         require_once $processdir.'/get-customer-by-number.php';
         require_once $processdir.'/get-customers-by-postal-code.php';
    ?>

    <?php
       require_once $subviewsdir.'/show-customer-info.php';
    ?>

   </div>

    </body>

</html>