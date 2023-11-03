<?php

require_once $processdir.'/nrr-connect.php';

$query1 = "SELECT

          count(*) AS `ResellerOrderCount`
          
          FROM `OpentapsDW`.`AllOpentapsOrders`

          where `AllOpentapsOrders`.`OrderDate`

            between '$begindate' AND '$enddate'
            
            AND `AllOpentapsOrders`.`AccountName` is not null
            
            AND `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'
            
            AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)";

            
 $query2 = "SELECT

            count(*) AS `EndUserOrderCount`
          
            FROM `OpentapsDW`.`AllOpentapsOrders`

            where `AllOpentapsOrders`.`OrderDate`

            between '$begindate' AND '$enddate'
            
            AND isnull(`AllOpentapsOrders`.`AccountName`)
                        
            AND `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'
            
            AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)";

            $end_user_result = mysqli_query($mysqli, $query2);

            while($row = mysqli_fetch_array($end_user_result)):

                $enduserordercount = $row['EndUserOrderCount'];

            endwhile;

?>