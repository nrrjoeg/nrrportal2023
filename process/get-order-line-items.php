<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['ordernumbersearch']))

    {
      
      $OrderNumbertoSearch = $_GET['OrderNumber'];

      $linecount = 0;

      $query = "SELECT
        `opentapsdb`.`ORDER_ITEM`.`ORDER_ID` as `OrderNum`,
        `opentapsdb`.`ORDER_ITEM`.`ORDER_ITEM_SEQ_ID` as `LineItem`,
        `opentapsdb`.`ORDER_ITEM`.`PRODUCT_ID` as `ProductNum`,
        `opentapsdb`.`ORDER_ITEM`.`ITEM_DESCRIPTION` as `Description`,
        round(`opentapsdb`.`ORDER_ITEM`.`QUANTITY`,0) as `Quantity`,
        `opentapsdb`.`ORDER_ITEM`.`UNIT_PRICE` as `UnitPrice`,
        (round(`opentapsdb`.`ORDER_ITEM`.`QUANTITY`,0)) 
                * (`opentapsdb`.`ORDER_ITEM`.`UNIT_PRICE`) as `ExtendedPrice` 


      FROM `opentapsdb`.`ORDER_ITEM`

      WHERE `opentapsdb`.`ORDER_ITEM`.`ORDER_ID`='$OrderNumbertoSearch'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

    }  
?>