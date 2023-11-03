<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['accountnumbersearch']))

{
    $CustomerNumbertoSearch = $_GET['CustomerNumber'];

      $linecount = 0;

      $query = "SELECT

      round(avg(`OpentapsOrderView`.`OrderTotal`),2) AS `AvgOrderTotal`
      
      from `OpentapsDW`.`OpentapsOrderView`
      
      where `OpentapsOrderView`.`OrderType` = 'SALES_ORDER'

      and `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED'
      
      and `OpentapsOrderView`.`CustomerNum` = '$CustomerNumbertoSearch'
      
      and `OpentapsOrderView`.`OrderNum` <> 'RTL14352'
      and `OpentapsOrderView`.`OrderNum` <> 'RES17727'
      and `OpentapsOrderView`.`OrderNum` <> 'RTL18106'
      and `OpentapsOrderView`.`OrderNum` <> 'DrWest21355'
      and `OpentapsOrderView`.`OrderNum` <> 'RTL55311'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>