<?php

  require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT monthname(`opentapsdb`.`INVOICE`.`INVOICE_DATE`) AS `InvoiceMonth`,
      year(`opentapsdb`.`INVOICE`.`INVOICE_DATE`) AS `Year`,
      `opentapsdb`.`INVOICE_ITEM`.`TAX_AUTH_GEO_ID` AS `TaxingEntity`,
      sum(`opentapsdb`.`INVOICE_ITEM`.`AMOUNT`) AS `InvoiceSalesTax` 
      
      from `opentapsdb`.`INVOICE` 
      
      join `opentapsdb`.`INVOICE_ITEM`
      
      where `opentapsdb`.`INVOICE`.`INVOICE_ID` = `opentapsdb`.`INVOICE_ITEM`.`INVOICE_ID`
      
      and `opentapsdb`.`INVOICE_ITEM`.`INVOICE_ITEM_TYPE_ID` = 'ITM_SALES_TAX'
      
      and `opentapsdb`.`INVOICE`.`INVOICE_DATE` between '$startdate' and '$enddate'";
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
