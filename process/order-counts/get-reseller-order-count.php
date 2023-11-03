<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT

          count(*) AS `ResellerOrderCount`
          
          FROM `OpentapsDW`.`OpentapsOrderView`

          where `OpentapsOrderView`.`OrderDate`

            between '$startdate' AND '$enddate'
            
            AND `OpentapsOrderView`.`AccountName` is not null
            
            AND `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED'
            
            AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)";
      
      $search_result = mysqli_query($mysqli, $query);
      
      $linecount = mysqli_num_rows($search_result);

?>