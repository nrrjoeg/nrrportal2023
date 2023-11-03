<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT `YesterdayCompletedOrdersView`.`CurrentMonth` AS `Month`,      
          dayofmonth(`YesterdayCompletedOrdersView`.`OrderDate`) AS `Day`,`YesterdayCompletedOrdersView`.`Year` AS `Year`,
           sum(`YesterdayCompletedOrdersView`.`OrderTotal`) AS `OrderTotal` 
      
      from `OpentapsDW`.`YesterdayCompletedOrdersView`";
      
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
