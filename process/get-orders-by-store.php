<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT `OpentapsDW`.`AllOpentapsOrders`.`Store` AS `Store`,
  
      `OpentapsDW`.`ProductStores`.`StoreName` AS `StoreName`,
  
      sum(`OpentapsDW`.`AllOpentapsOrders`.`OrderTotal`) AS `TotalStoreOrdersMTD` 
      
      FROM `OpentapsDW`.`AllOpentapsOrders`
      
      join `OpentapsDW`.`ProductStores`
      
      where `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED' 
      
      and `AllOpentapsOrders`.`OrderType` = 'SALES_ORDER'
      
      and `ProductStores`.`StoreNum` = `AllOpentapsOrders`.`Store` 
      
      and `AllOpentapsOrders`.`OrderDate` BETWEEN 2020-02-01' and '2020-02-29'
      
      AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)
      
      group by `AllOpentapsOrders`.`Store`";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>