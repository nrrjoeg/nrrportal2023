<?php

require_once $processdir.'/nrr-connect.php';


      $linecount = 0;

      $query = "SELECT sum(`OrderTotal`) as `OrderTotal`
      
           FROM `AllOpentapsOrders`
           where `OrderDate` 
           between '$startdate'
           and '$enddate'
           
           AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)
           AND `Status` = 'ORDER_COMPLETED'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>