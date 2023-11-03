<?php

require_once $processdir.'/nrr-connect.php';

    $query = "SELECT sum(`AllResellerOrders`.`OrderTotal`) AS `TotalSmallResellerOrders` 
      
      from `OpentapsDW`.`AllResellerOrders`
      
      where 
      
      `AllResellerOrders`.`OrderDate` 
           BETWEEN '$startdate' and '$enddate'
      
      and `AllResellerOrders`.`CustomerNum` <> '54849' 
      and `AllResellerOrders`.`CustomerNum` <> '56458' 
      and `AllResellerOrders`.`CustomerNum` <> '52864'
      and `AllResellerOrders`.`CustomerNum` <> '56166'
      and `AllResellerOrders`.`CustomerNum` <> '42318'
      and `AllResellerOrders`.`CustomerNum` <> '42803'
      and `AllResellerOrders`.`CustomerNum` <> '52809'
      and `AllResellerOrders`.`CustomerNum` <> '39199'
      and `AllResellerOrders`.`CustomerNum` <> '39547'
      and `AllResellerOrders`.`CustomerNum` <> '55047'
      and `AllResellerOrders`.`CustomerNum` <> '55354'
      and `AllResellerOrders`.`CustomerNum` <> '56418'
      and `AllResellerOrders`.`CustomerNum` <> '57113'
      and `AllResellerOrders`.`CustomerNum` <> '57123'
      and `AllResellerOrders`.`CustomerNum` <> '58278'
      and `AllResellerOrders`.`CustomerNum` <> '58333'
      and `AllResellerOrders`.`CustomerNum` <> '58385'
      and `AllResellerOrders`.`CustomerNum` <> '57044'
      and `AllResellerOrders`.`CustomerNum` <> '58648'
      and `AllResellerOrders`.`CustomerNum` <> '57700'
      and `AllResellerOrders`.`CustomerNum` <> '58849'
      and `AllResellerOrders`.`CustomerNum` <> '59650'
      and `AllResellerOrders`.`CustomerNum` <> '59713'
      and `AllResellerOrders`.`CustomerNum` <> '58307'
      and `AllResellerOrders`.`CustomerNum` <> '59522'
      and `AllResellerOrders`.`CustomerNum` <> '56734'
      and `AllResellerOrders`.`CustomerNum` <> '60254'
      and `AllResellerOrders`.`CustomerNum` <> '60327' 
      and `AllResellerOrders`.`CustomerNum` <> '59227'
      
      and binary `AllResellerOrders`.`Status` = binary 'ORDER_COMPLETED'
      
      AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)";

      $search_result = mysqli_query($mysqli, $query);

      if (!$search_result) {
        printf("Error: %s\n", mysqli_error($mysqli));
        exit();
    }

?>