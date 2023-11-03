<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = 
      
      "SELECT
      round(sum(`opentapsdb`.`ORDER_ITEM`.`QUANTITY`),0) AS `WholesaleSARQuantity`
      
  FROM
      `opentapsdb`.`ORDER_ITEM`
          LEFT JOIN
      `opentapsdb`.`ORDER_HEADER` ON `opentapsdb`.`ORDER_HEADER`.`ORDER_ID` = `opentapsdb`.`ORDER_ITEM`.`ORDER_ID`
          LEFT JOIN
      `opentapsdb`.`PARTY` ON `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID`
          LEFT JOIN
      `opentapsdb`.`PERSON` ON `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PERSON`.`PARTY_ID`
          LEFT JOIN
      `opentapsdb`.`PARTY_GROUP` ON `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PARTY_GROUP`.`PARTY_ID`
  
  WHERE
      LEFT(`opentapsdb`.`ORDER_HEADER`.`ORDER_ID`,
          4) <> 'TEST'
          AND LEFT(`opentapsdb`.`ORDER_HEADER`.`ORDER_ID`,
          4) <> 'DEMO'
          AND CAST(`opentapsdb`.`ORDER_HEADER`.`ORDER_DATE` AS DATE) BETWEEN '$startdate' AND '$enddate'
          AND (`opentapsdb`.`ORDER_ITEM`.`PRODUCT_ID` = '1002')
          and (`opentapsdb`.`PARTY_GROUP`.`GROUP_NAME`) is not null

   Group by `opentapsdb`.`ORDER_ITEM`.`PRODUCT_ID`";
      
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
