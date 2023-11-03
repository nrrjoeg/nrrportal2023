<?php

require_once $processdir.'/nrr-connect.php';

$linecount = 0;

    $query = 
    
    "SELECT `OpentapsOrderView`.`AccountName` AS `AccountName`,`OpentapsOrderView`.`CustomerNum` AS `CustomerNum`,
    sum(`OpentapsOrderView`.`OrderTotal`) AS `TotalOrders` 
    
    from `OpentapsDW`.`OpentapsOrderView` where(`OpentapsOrderView`.`CustomerNum` = '54849' or `OpentapsOrderView`.`CustomerNum` = '56458' or `OpentapsOrderView`.`CustomerNum` = '52864' or `OpentapsOrderView`.`CustomerNum` = '56166' or `OpentapsOrderView`.`CustomerNum` = '42318' or `OpentapsOrderView`.`CustomerNum` = '42803' or `OpentapsOrderView`.`CustomerNum` = '52809' or `OpentapsOrderView`.`CustomerNum` = '39199' or `OpentapsOrderView`.`CustomerNum` = '39547' or `OpentapsOrderView`.`CustomerNum` = '55047' or `OpentapsOrderView`.`CustomerNum` = '55354' or `OpentapsOrderView`.`CustomerNum` = '56418' or `OpentapsOrderView`.`CustomerNum` = '57113' or `OpentapsOrderView`.`CustomerNum` = '57123' or `OpentapsOrderView`.`CustomerNum` = '58278' or `OpentapsOrderView`.`CustomerNum` = '58333' or `OpentapsOrderView`.`CustomerNum` = '58385' or `OpentapsOrderView`.`CustomerNum` = '57044' or `OpentapsOrderView`.`CustomerNum` = '58648' or `OpentapsOrderView`.`CustomerNum` = '58849' or `OpentapsOrderView`.`CustomerNum` = '59650' or `OpentapsOrderView`.`CustomerNum` = '59227' or `OpentapsOrderView`.`CustomerNum` = '59713' or `OpentapsOrderView`.`CustomerNum` = '58307' or `OpentapsOrderView`.`CustomerNum` = '56734' or `OpentapsOrderView`.`CustomerNum` = '59522' or `OpentapsOrderView`.`CustomerNum` = '60327' or `OpentapsOrderView`.`CustomerNum` = '60254' or `OpentapsOrderView`.`CustomerNum` = '57700') 
    
    and `OpentapsOrderView`.`OrderDate` = '$yesterday' 
    
    and `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED' 
    
    group by `OpentapsOrderView`.`CustomerNum`";
    
    
    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

?>
