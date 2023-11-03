<?php

require_once $processdir.'/nrr-connect.php';

$linecount = 0;

    $query =

    "SELECT `OpentapsOrderView`.`Store` AS `Store`,
    `ProductStoresView`.`StoreName` AS `StoreName`,
    sum(`OpentapsOrderView`.`OrderTotal`) AS `TotalStoreOrdersMTD` 
    
    from `OpentapsDW`.`OpentapsOrderView`
    
    join `OpentapsDW`.`ProductStoresView` 
    
    where `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED' 
    and `OpentapsOrderView`.`OrderType` = 'SALES_ORDER'
    and `ProductStoresView`.`StoreNum` = `OpentapsOrderView`.`Store`
    and `OpentapsOrderView`.`OrderDate` = $todaydate
    
    group by `OpentapsOrderView`.`Store`";

    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

?>
