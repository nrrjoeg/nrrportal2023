<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT monthname(`OpentapsOrderView`.`OrderDate`) AS `Month`,
      year(`OpentapsOrderView`.`OrderDate`) AS `Year`,
      sum(`OpentapsOrderView`.`OrderTotal`) AS `TotalResellerOrders` 
      
      from `OpentapsDW`.`OpentapsOrderView` 
      where `OpentapsOrderView`.`OrderDate` = '$yesterday' 
      and `OpentapsOrderView`.`AccountName` is not null 
      and `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED' 
      and `OpentapsOrderView`.`CustomerNum` <> '42803'";



      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
