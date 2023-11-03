<?php

  require_once $processdir.'/nrr-connect.php';

  if(isset($_GET['ordernumbersearch']))

   {
    $OrderNumbertoSearch = $_GET['OrderNumber'];

    $query = "SELECT

    `opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID` as `OrderID`,
	`opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID` AS `OrderNumber`,
    `opentapsdb`.`SHIPMENT`.`SHIPMENT_ID` AS `ShipmentID`,
     cast(`opentapsdb`.`SHIPMENT`.`LAST_UPDATED_STAMP`
        as date) AS `OrderDate`,
    `opentapsdb`.`SHIPMENT`.`STATUS_ID` AS `OrderStatus`,
    `opentapsdb`.`SHIPMENT_ROUTE_SEGMENT`.`SHIPMENT_METHOD_TYPE_ID` AS `ShippingMethod`,
    `opentapsdb`.`ORDER_HEADER`.`GRAND_TOTAL` as `OrderTotal`,

    `OpentapsDW`.`OrderSalesTaxItemsView`.`TaxAmount`,

    `opentapsdb`.`SHIPMENT`.`ESTIMATED_SHIP_COST` AS `ShippingAmount`,
    `opentapsdb`.`INVOICE`.`PARTY_ID` as `CustomerCode`,

    `opentapsdb`.`SHIPMENT`.`DESTINATION_CONTACT_MECH_ID` AS `ToCustomerMechID`,
    `opentapsdb`.`SHIPMENT_ROUTE_SEGMENT`.`DEST_TELECOM_NUMBER_ID` as `TelecomNumberID`,
	

    `OpentapsDW`.`Order-InvoiceView`.`InvoiceNum`,

    `OpentapsDW`.`EmailAddressesView`.`EmailAddress`,

	`opentapsdb`.`POSTAL_ADDRESS`.`TO_NAME` as `Name`,
    `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS1` as `Address1`,
    `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS2` as `Address2`,
    `opentapsdb`.`POSTAL_ADDRESS`.`CITY` as `City`,
    `opentapsdb`.`POSTAL_ADDRESS`.`STATE_PROVINCE_GEO_ID` as `State`,
    `opentapsdb`.`POSTAL_ADDRESS`.`POSTAL_CODE` as `PostalCode`,
    `opentapsdb`.`POSTAL_ADDRESS`.`COUNTRY_GEO_ID` as `Country`,
    concat(`opentapsdb`.`TELECOM_NUMBER`.`COUNTRY_CODE`,'-',  `opentapsdb`.`TELECOM_NUMBER`.`AREA_CODE`,'-',`opentapsdb`.`TELECOM_NUMBER`.`CONTACT_NUMBER`) as `Phone`

     from `opentapsdb`.`SHIPMENT`

      left join `opentapsdb`.`SHIPMENT_PACKAGE_ROUTE_SEG` ON `opentapsdb`.`SHIPMENT_PACKAGE_ROUTE_SEG`.`SHIPMENT_ID`= `opentapsdb`.`SHIPMENT`.`SHIPMENT_ID`

      left join `opentapsdb`.`SHIPMENT_ROUTE_SEGMENT` ON `opentapsdb`.`SHIPMENT`.`SHIPMENT_ID` = `opentapsdb`.`SHIPMENT_ROUTE_SEGMENT`.`SHIPMENT_ID`

      left join `opentapsdb`.`ORDER_HEADER` on `opentapsdb`.`ORDER_HEADER`.`ORDER_ID`=`opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID`

      left join `OpentapsDW`.`Order-InvoiceView` on `OpentapsDW`.`Order-InvoiceView`.`OrderNum`= `opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID`

      left join `opentapsdb`.`INVOICE` on `opentapsdb`.`INVOICE`.`INVOICE_ID`=`OpentapsDW`.`Order-InvoiceView`.`InvoiceNum`

      left join `opentapsdb`.`TELECOM_NUMBER` on `opentapsdb`.`TELECOM_NUMBER`.`CONTACT_MECH_ID`=`opentapsdb`.`SHIPMENT_ROUTE_SEGMENT`.`DEST_TELECOM_NUMBER_ID`

      left join `opentapsdb`.`POSTAL_ADDRESS` on `opentapsdb`.`POSTAL_ADDRESS`.`CONTACT_MECH_ID`=`opentapsdb`.`SHIPMENT`.`DESTINATION_CONTACT_MECH_ID`

      left join `OpentapsDW`.`OrderSalesTaxItemsView` on `OpentapsDW`.`OrderSalesTaxItemsView`.`OrderNum` = `opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID`

      left join `OpentapsDW`.`EmailAddressesView` on `OpentapsDW`.`EmailAddressesView`.`CustomerNum`=`opentapsdb`.`INVOICE`.`PARTY_ID`

     where `opentapsdb`.`SHIPMENT`.`PRIMARY_ORDER_ID` = '$OrderNumbertoSearch'";

        $customerinfoarray = array();

        if ($result = $mysqli->query($query)) {

            /* fetch associative array */
            
            while ($row = $result->fetch_assoc()) {
               array_push($customerinfoarray, $row);
            }
    
            if(count($customerinfoarray)){
                createXMLfile($customerinfoarray);
            }
            
           /* free result set */
           
           $result->free();
       }
       
       /* close connection */
       
 $mysqli->close();
 
 }

?>
