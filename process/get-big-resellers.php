<?php

require_once $processdir.'/nrr-connect.php';

    $linecount = 0;

    $query = "SELECT `AllOpentapsOrders`.`AccountName` AS `AccountName`,
    
    `AllOpentapsOrders`.`CustomerNum` AS `CustomerNum`,
    
    sum(`AllOpentapsOrders`.`OrderTotal`) AS `TotalOrders` 
    
    from `OpentapsDW`.`AllOpentapsOrders` 
    
    where ((`AllOpentapsOrders`.`CustomerNum` = '54849')
    or (`AllOpentapsOrders`.`CustomerNum` = '56458')
    or (`AllOpentapsOrders`.`CustomerNum` = '52864')
    or (`AllOpentapsOrders`.`CustomerNum` = '56166')
    or (`AllOpentapsOrders`.`CustomerNum` = '42318')
    or (`AllOpentapsOrders`.`CustomerNum` = '42803')
    or (`AllOpentapsOrders`.`CustomerNum` = '52809')
    or (`AllOpentapsOrders`.`CustomerNum` = '39199')
    or (`AllOpentapsOrders`.`CustomerNum` = '39547')
    or (`AllOpentapsOrders`.`CustomerNum` = '55047')
    or (`AllOpentapsOrders`.`CustomerNum` = '55354')
    or (`AllOpentapsOrders`.`CustomerNum` = '56418')
    or (`AllOpentapsOrders`.`CustomerNum` = '57113')
    or (`AllOpentapsOrders`.`CustomerNum` = '57123')
    or (`AllOpentapsOrders`.`CustomerNum` = '58278')
    or (`AllOpentapsOrders`.`CustomerNum` = '58333')
    or (`AllOpentapsOrders`.`CustomerNum` = '58385')
    or (`AllOpentapsOrders`.`CustomerNum` = '57044')
    or (`AllOpentapsOrders`.`CustomerNum` = '58648')
    or (`AllOpentapsOrders`.`CustomerNum` = '58849')
    or (`AllOpentapsOrders`.`CustomerNum` = '59650')
    or (`AllOpentapsOrders`.`CustomerNum` = '59227')
    or (`AllOpentapsOrders`.`CustomerNum` = '59713')
    or (`AllOpentapsOrders`.`CustomerNum` = '58307')
    or (`AllOpentapsOrders`.`CustomerNum` = '56734')
    or (`AllOpentapsOrders`.`CustomerNum` = '59522')
    or (`AllOpentapsOrders`.`CustomerNum` = '60327')
    or (`AllOpentapsOrders`.`CustomerNum` = '60254')
    or (`AllOpentapsOrders`.`CustomerNum` = '57700')) 
    
    and `AllOpentapsOrders`.`OrderDate` between '$startdate'

       and '$enddate'

    and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED' 
    AND `OrderNum` not in (select `OrderNumber` from `DeadOrders` where 1)
    
    group by `AllOpentapsOrders`.`CustomerNum`";

    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

?>
