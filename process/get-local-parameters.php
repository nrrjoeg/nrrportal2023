<?php

// Set the $currentfile variable to the name of the PHP file-script we
// are currently viewing.

$currentfile = basename($_SERVER['PHP_SELF']);

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
         Longitude,
         UTCDiff

       FROM `WeatherMenu` where `ViewFileName` = '$currentfile'";

      $search_result = mysqli_query($connection, $query);
      $linecount = mysqli_num_rows($search_result);

// Set variables to for each of the items from the Weather MySQL record.


    while($row = mysqli_fetch_array($search_result)):        

     $filename = $row['ViewFileName'];
     $itemtext = $row['ItemText'];
     $title = $row['Title'];
     $parentdirectory = $row['ParentDirectory'];
     $imagefile = $row['ImageFile'];
     $mapfile = $row['MapFile'];
     $latitude = $row['Latitude'];
     $longitude = $row['Longitude'];
     $utcdiff = $row['UTCDiff'];
     
endwhile; ?>