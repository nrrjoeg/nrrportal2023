<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>

<html>
<?php require_once $processdir.'/get-headtags/get-weather-headtags.php'; ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <?php
    // Get all parameters for this locale from the database and set variables. 
      require_once $processdir.'/get-local-parameters.php';
      require_once $processdir.'/get-local-weather.php'; ?>

  <div class="content-container">

    <?php require_once $subviewsdir.'/display-weather-results.php'; ?>

  </div>

    </body>
</html>