<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT sum(`AllOpentapsOrders`.`OrderTotal`) as `TotalResellerOrders` 
      
      from `OpentapsDW`.`AllOpentapsOrders`
      
      where `AllOpentapsOrders`.`OrderDate` between 
          '$startdate' and '$enddate'

          AND `AllOpentapsOrders`.`AccountName` is not null 
          and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'
          AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)
          and `AllOpentapsOrders`.`CustomerNum` <> '42803'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>