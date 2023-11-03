<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['accountnumbersearch']))

{
    $CustomerNumbertoSearch = $_GET['CustomerNumber'];

      $linecount = 0;

      $query = "SELECT
      `AllOpentapsOrders`.`OrderNum` AS `OrderNum`,
      `AllOpentapsOrders`.`FirstName` AS `FirstName`,
      `AllOpentapsOrders`.`LastName` AS `LastName`,
      `AllOpentapsOrders`.`AccountName` AS `AccountName`,
      `AllOpentapsOrders`.`CustomerNum` AS `CustomerNum`,
      `AllOpentapsOrders`.`Store` AS `Store`,
      `AllOpentapsOrders`.`OrderTotal` AS `OrderTotal`,
      `AllOpentapsOrders`.`Salesperson` AS `SalesPerson`,
      `AllOpentapsOrders`.`OrderDate`
      
      from `OpentapsDW`.`AllOpentapsOrders`
      
      where `AllOpentapsOrders`.`OrderType` = 'SALES_ORDER'

      and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'
      
      and `AllOpentapsOrders`.`CustomerNum` = '$CustomerNumbertoSearch'
      
      and `AllOpentapsOrders`.`OrderNum` <> 'RTL14352'
      and `AllOpentapsOrders`.`OrderNum` <> 'RES17727'
      and `AllOpentapsOrders`.`OrderNum` <> 'RTL18106'
      and `AllOpentapsOrders`.`OrderNum` <> 'DrWest21355'
      and `AllOpentapsOrders`.`OrderNum` <> 'RTL55311'
      
      Order By `AllOpentapsOrders`.`OrderDate` desc";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>