<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = 
      
      "SELECT 
      `AllOrderItems`.`ProductNum` AS `ProductNum`,
      
      `AllOrderItems`.`ItemDesc` AS `ItemDesc`,
      
      round(sum(`AllOrderItems`.`Quantity`),0) AS `QuantityOrdered`,
      
      round(sum(`AllOrderItems`.`ExtPrice`),2) AS `TotalDollars`,
      
      (round(sum(`AllOrderItems`.`ExtPrice`),2) / round(sum(`AllOrderItems`.`Quantity`),0)) AS `AveragePrice` 
      
      from `OpentapsDW`.`AllOrderItems` 
      
      where `AllOrderItems`.`Date` between '$startdate' and '$enddate'
      
      and `AllOrderItems`.`Status` = 'ITEM_COMPLETED' 
      
      and `AllOrderItems`.`OrderNum` not in (select `OrderNumber` from `OpentapsDW`.`DeadOrders`)
      
      group by `AllOrderItems`.`ProductNum` 
      
      order by `AllOrderItems`.`ItemDesc`";
      
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>