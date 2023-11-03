<?php 

   require_once $processdir.'/dashboard-connect.php';

   $currentfile = basename($_SERVER['PHP_SELF']);

   $query = "SELECT `Startdate`,
                    `EndDate` 
   
   FROM `PortalNavItems`
   
   where `ViewFileName` = '$currentfile'";

      $search_result = mysqli_query($mysqli, $query);

      while ($row = mysqli_fetch_array($search_result)):

         $startdate = $row['StartDate'];
         $enddate = $row['EndDate'];
     
      endwhile;

?>