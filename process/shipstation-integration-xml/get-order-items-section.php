<?php

  require_once $processdir.'/nrr-connect.php';

    $query = "SELECT
    `opentapsdb`.`ORDER_ITEM`.`PRODUCT_ID` as `SKU`,
    `opentapsdb`.`ORDER_ITEM`.`ITEM_DESCRIPTION` as `Description`,
    round(`opentapsdb`.`ORDER_ITEM`.`QUANTITY`,0) as `Quantity`,
    `opentapsdb`.`ORDER_ITEM`.`UNIT_PRICE` as `UnitPrice`

    FROM `opentapsdb`.`ORDER_ITEM`

    where `opentapsdb`.`ORDER_ITEM`.`ORDER_ID`='$OrderNumbertoSearch'";
  
    $search_result = mysqli_query($mysqli, $query);

?>
