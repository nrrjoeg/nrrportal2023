<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $BeginDatevaluetoSearch = $_GET['BeginDatevaluetoSearch'];
    $EndDatevaluetoSearch = $_GET['EndDatevaluetoSearch'];

      $linecount = 0;

      $query = "SELECT sum(`OpentapsOrderView`.`OrderTotal`) as `TotalResellerOrders` 
      
      from `OpentapsDW`.`OpentapsOrderView`
      
      where `OpentapsOrderView`.`OrderDate` between 
          '$BeginDatevaluetoSearch' and '$EndDatevaluetoSearch'

          AND `OpentapsOrderView`.`AccountName` is not null 
          and `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED' 
          and `OpentapsOrderView`.`CustomerNum` <> '42803'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}      

?>