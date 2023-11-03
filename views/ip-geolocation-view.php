<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
    <?php require_once $processdir.'/get-headtags/get-order-detail-headtags.php' ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

<div class="content-container">

    <div class="search-choices">

        <form method="get" action="ip-geolocation-view.php">
            <table>
                <?php require_once $subviewsdir.'/enter-ip-address.php';?>
            </table>
        </form> 

    </div>

  <div class="content-container">

    <?php echo "Yeah, baby! We got this!"; ?>

    <?php require_once $processdir.'/get-ip-address-details.php';

          echo "We got the details and now we're gonna show them...";

          echo $IPAddressToSearch;
    
          require_once $subviewsdir.'/show-ip-address-details.php';
    ?>

  </div>

</div>

 <?php $mysqli->close();?>

    </body>
    
</html>