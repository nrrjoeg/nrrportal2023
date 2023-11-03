<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT sum(`ShipmentView`.`ShippingCharge`) AS `TotalShippingCharges` 
      
      from `OpentapsDW`.`ShipmentView`

      where `ShipmentView`.`ShipDate` between '$startdate' and '$enddate'
      
      and `ShipmentView`.`ShipType` = 'SALES_SHIPMENT'
      
      and (`ShipmentView`.`Status` = 'SHIPMENT_SHIPPED' or `ShipmentView`.`Status` = 'SHIPMENT_PACKED') 
      
      group by month(`ShipmentView`.`ShipDate`)";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
