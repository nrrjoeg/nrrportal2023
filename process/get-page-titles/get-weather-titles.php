<?php

require_once $processdir.'/dashboard-connect.php';

$currentfile = basename($_SERVER['PHP_SELF']);

      $query = "SELECT * FROM `WeatherMenu`
                WHERE `ViewFileName` = '$currentfile'";

      $search_result = mysqli_query($connection, $query);
      $linecount = mysqli_num_rows($search_result);

?>
