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
      `opentapsdb`.`ORDER_HEADER`.`CREATED_BY` AS `SalesPerson`,

      `opentapsdb`.`SHIPMENT`.`ESTIMATED_SHIP_COST` as `ShippingCharge`,
      `opentapsdb`.`POSTAL_ADDRESS`.`TO_NAME` as `Name`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ATTN_NAME` as `Attention`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS1` as `Address1`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS2` as `Address2`,
      `opentapsdb`.`POSTAL_ADDRESS`.`CITY` as `City`,
      `opentapsdb`.`POSTAL_ADDRESS`.`STATE_PROVINCE_GEO_ID` as `State`,
      `opentapsdb`.`POSTAL_ADDRESS`.`POSTAL_CODE` as `PostalCode`,
      `opentapsdb`.`POSTAL_ADDRESS`.`COUNTRY_GEO_ID` as `Country`,
      concat(`opentapsdb`.`TELECOM_NUMBER`.`AREA_CODE`,'.',`opentapsdb`.`TELECOM_NUMBER`.`CONTACT_NUMBER`) as `TelephoneNumber`

  
    from
      `opentapsdb`.`ORDER_HEADER`

      left join `opentapsdb`.`PERSON` ON `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID` = `opentapsdb`.`PERSON`.`PARTY_ID`
      
      left join `opentapsdb`.`PARTY_GROUP` ON `opentapsdb`.`ORDER_HEADER`.`BILL_TO_PARTY_ID` = `opentapsdb`.`PARTY_GROUP`.`PARTY_ID`
      
      left join `opentapsdb`.`TRACKING_CODE_ORDER` ON `opentapsdb`.`TRACKING_CODE_ORDER`.`ORDER_ID` = `opentapsdb`.`ORDER_HEADER`.`ORDER_ID`

      left join `opentapsdb`.`SHIPMENT` on `opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID` = `opentapsdb`.`ORDER_HEADER`.`ORDER_ID`

      left join `opentapsdb`.`POSTAL_ADDRESS` on  `opentapsdb`.`POSTAL_ADDRESS`.`CONTACT_MECH_ID` = `opentapsdb`.`SHIPMENT`.`DESTINATION_CONTACT_MECH_ID`

      left join `opentapsdb`.`TELECOM_NUMBER` on `opentapsdb`.`TELECOM_NUMBER`.`CONTACT_MECH_ID` = `opentapsdb`.`SHIPMENT`.`DESTINATION_TELECOM_NUMBER_ID`
  
  where
      `opentapsdb`.`ORDER_HEADER`.`ORDER_ID` = '$OrderNumbertoSearch'";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

    }  
?>