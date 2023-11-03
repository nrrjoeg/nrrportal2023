<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $BeginDatevaluetoSearch = $_GET['BeginDatevaluetoSearch'];
    $EndDatevaluetoSearch = $_GET['EndDatevaluetoSearch'];

      $linecount = 0;

      $query = "SELECT sum(`OrderTotal`) as `OrderTotal`
      
           FROM `AllOpentapsOrders`
           where `OrderDate` 
           between '$BeginDatevaluetoSearch'
           and '$EndDatevaluetoSearch'
           
           AND `OrderNum` <> 'RTL55311'
           AND `Status` = 'ORDER_COMPLETED'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>
