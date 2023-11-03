<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['ordernumbersearch']))

    {
      
      $OrderNumbertoSearch = $_GET['OrderNumber'];

      $linecount = 0;

      $query = "SELECT * from `OpentapsDW`.`BillingAddressesTable`
  
  where
      `OpentapsDW`.`BillingAddressesTable`.`OrderNum` = '$OrderNumbertoSearch'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

    }  
?>