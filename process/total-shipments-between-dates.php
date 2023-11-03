<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $BeginDatevaluetoSearch = $_GET['BeginDatevaluetoSearch'];
    $EndDatevaluetoSearch = $_GET['EndDatevaluetoSearch'];

    $linecount = 0;

    $query = "SELECT sum(`ShipmentView`.`ShippingCharge`) AS `TotalShippingCharges`
    
    from `OpentapsDW`.`ShipmentView`

    where `ShipmentView`.`ShipDate` between '$BeginDatevaluetoSearch'
       and '$EndDatevaluetoSearch'
    
    and `ShipmentView`.`ShipType` = 'SALES_SHIPMENT' 
    and (`ShipmentView`.`Status` = 'SHIPMENT_SHIPPED'
        or `ShipmentView`.`Status` = 'SHIPMENT_PACKED')";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>