<?php

require_once $processdir.'/nrr-connect.php';

    $query = "SELECT sum(`ResellersOrderView`.`OrderTotal`) AS `TotalSmallResellerOrders` 
    
    from `OpentapsDW`.`ResellersOrderView`
    where `ResellersOrderView`.`CustomerNum` <> '54849' 
    and (`ResellersOrderView`.`CustomerNum` <> '56458') 
    and (`ResellersOrderView`.`CustomerNum` <> '52864') 
    and (`ResellersOrderView`.`CustomerNum` <> '56166') 
    and (`ResellersOrderView`.`CustomerNum` <> '42318') 
    and (`ResellersOrderView`.`CustomerNum` <> '42803') 
    and (`ResellersOrderView`.`CustomerNum` <> '52809') 
    and (`ResellersOrderView`.`CustomerNum` <> '39199')
    and (`ResellersOrderView`.`CustomerNum` <> '39547')
    and (`ResellersOrderView`.`CustomerNum` <> '55047')
    and (`ResellersOrderView`.`CustomerNum` <> '55354')
    and (`ResellersOrderView`.`CustomerNum` <> '56418')
    and (`ResellersOrderView`.`CustomerNum` <> '57113')
    and (`ResellersOrderView`.`CustomerNum` <> '57123')
    and (`ResellersOrderView`.`CustomerNum` <> '58278')
    and (`ResellersOrderView`.`CustomerNum` <> '58333')
    and (`ResellersOrderView`.`CustomerNum` <> '58385')
    and (`ResellersOrderView`.`CustomerNum` <> '57044')
    and (`ResellersOrderView`.`CustomerNum` <> '58648')
    and (`ResellersOrderView`.`CustomerNum` <> '57700')
    and (`ResellersOrderView`.`CustomerNum` <> '58849')
    and (`ResellersOrderView`.`CustomerNum` <> '59650')
    and (`ResellersOrderView`.`CustomerNum` <> '59713')
    and (`ResellersOrderView`.`CustomerNum` <> '58307')
    and (`ResellersOrderView`.`CustomerNum` <> '59522')
    and (`ResellersOrderView`.`CustomerNum` <> '56734')
    and (`ResellersOrderView`.`CustomerNum` <> '60254')
    and (`ResellersOrderView`.`CustomerNum` <> '60327')
    and (`ResellersOrderView`.`CustomerNum` <> '59227') 
    
    and binary `ResellersOrderView`.`Status` = binary 'ORDER_COMPLETED'

    and `ResellersOrderView`.`OrderDate` between '$startdate' and '$enddate'";
    
    $search_result = mysqli_query($mysqli, $query);

?>