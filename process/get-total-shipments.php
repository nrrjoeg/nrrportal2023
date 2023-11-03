<?php

require_once $processdir.'/nrr-connect.php';

    $linecount = 0;

    $query = "SELECT sum(`AllShipments`.`ShippingCharge`) AS `TotalShippingCharges`
    
    from `OpentapsDW`.`AllShipments`

    where `AllShipments`.`ShipDate` between '$startdate'
       and '$enddate'
    
    and `AllShipments`.`ShipType` = 'SALES_SHIPMENT' 
    and (`AllShipments`.`Status` = 'SHIPMENT_SHIPPED'
        or `AllShipments`.`Status` = 'SHIPMENT_PACKED')";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
?>