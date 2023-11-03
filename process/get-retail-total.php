<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT

          sum(`AllOpentapsOrders`.`OrderTotal`) AS `TotalRetailOrders`
          
          FROM `OpentapsDW`.`AllOpentapsOrders`

          where `AllOpentapsOrders`.`OrderDate`

            between '$startdate' AND '$enddate'
            
            AND isnull(`AllOpentapsOrders`.`AccountName`) 

            AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)
            
            AND `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'";
      
      $search_result = mysqli_query($mysqli, $query);
      
      $linecount = mysqli_num_rows($search_result);

?>