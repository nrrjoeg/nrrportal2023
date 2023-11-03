<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['ordernumbersearch']))

    {
      
      $OrderNumbertoSearch = $_GET['OrderNumber'];

      $linecount = 0;

      $query = "SELECT
      `opentapsdb`.`ORDER_HEADER`.`ORDER_ID` AS `OrderNum`,
      right(`opentapsdb`.`ORDER_HEADER`.`ORDER_ID`,
          5) AS `OrderShort`,
      `opentapsdb`.`ORDER_HEADER`.`ORDER_TYPE_ID` AS `OrderType`,
      cast(`opentapsdb`.`ORDER_HEADER`.`ORDER_DATE` as date) AS `OrderDate`,
      `opentapsdb`.`ORDER_HEADER`.`STATUS_ID` AS `Status`,
      `opentapsdb`.`ORDER_HEADER`.`PRODUCT_STORE_ID` AS `Store`,
      `opentapsdb`.`ORDER_HEADER`.`GRAND_TOTAL` AS `OrderTotal`,
      `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID` AS `CustomerNum`,
      `opentapsdb`.`PERSON`.`FIRST_NAME` AS `FirstName`,
      `opentapsdb`.`PERSON`.`LAST_NAME` AS `LastName`,
      `opentapsdb`.`PARTY_GROUP`.`GROUP_NAME` AS `AccountName`,
      `opentapsdb`.`TRACKING_CODE_ORDER`.`TRACKING_CODE_ID` AS `TrackingCode`,
      `opentapsdb`.`ORDER_HEADER`.`CREATED_BY` AS `SalesPerson`
  
    from
      `opentapsdb`.`ORDER_HEADER`

      left join `opentapsdb`.`PERSON` ON `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID` = `opentapsdb`.`PERSON`.`PARTY_ID`
      
      left join `opentapsdb`.`PARTY_GROUP` ON `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID` = `opentapsdb`.`PARTY_GROUP`.`PARTY_ID`
      
      left join `opentapsdb`.`TRACKING_CODE_ORDER` ON `opentapsdb`.`TRACKING_CODE_ORDER`.`ORDER_ID` = `opentapsdb`.`ORDER_HEADER`.`ORDER_ID`
  
  where
      `opentapsdb`.`ORDER_HEADER`.`ORDER_ID` = '$OrderNumbertoSearch'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

    }  
?>