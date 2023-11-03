<?php

require_once $processdir.'/dashboard-connect.php';

      $query = "SELECT 
       
         Title,
         ItemText,
         ViewFileName,
         PrintFile,
         ParentDirectory,
         ImageFile,
         MapFile,
         Latitude,
         Longitude

       FROM `WeatherMenu`";

      $search_result = mysqli_query($connection, $query);
      $linecount = mysqli_num_rows($search_result);

?>
