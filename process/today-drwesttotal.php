<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT sum(`OpentapsOrderView`.`OrderTotal`) AS `DrWestOrders` 

      from `OpentapsDW`.`OpentapsOrderView` 

      where `OpentapsOrderView`.`OrderDate` = $todaydate 
      and `OpentapsOrderView`.`AccountName` is not null
      and `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED'
      and `OpentapsOrderView`.`CustomerNum` = '42803' 
      and `OpentapsOrderView`.`OrderNum` <> 'RTL55311'
      
      group by `OpentapsOrderView`.`CustomerNum`";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
