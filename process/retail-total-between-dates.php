<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $BeginDatevaluetoSearch = $_GET['BeginDatevaluetoSearch'];
    $EndDatevaluetoSearch = $_GET['EndDatevaluetoSearch'];

      $linecount = 0;

      $query = "SELECT 
          
          sum(`OpentapsOrderView`.`OrderTotal`) AS `TotalRetailOrders`
          
          FROM `OpentapsDW`.`OpentapsOrderView`

          where `OpentapsOrderView`.`OrderDate`

            between '$BeginDatevaluetoSearch'
            AND '$EndDatevaluetoSearch'
            
            AND isnull(`OpentapsOrderView`.`AccountName`) 
            
            AND `OpentapsOrderView`.`Status` = 'ORDER_COMPLETED'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>
