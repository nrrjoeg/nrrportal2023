<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT sum(`AllOpentapsOrders`.`OrderTotal`) as `DrWestOrders` 
      
      from `OpentapsDW`.`AllOpentapsOrders`
      
      where `AllOpentapsOrders`.`OrderDate` between 
          '$startdate' and '$enddate'

          AND `AllOpentapsOrders`.`AccountName` is not null 
          and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED' 
          and `AllOpentapsOrders`.`CustomerNum` = '42803'
          AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);   

?>