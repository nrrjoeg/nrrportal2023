<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['accountnumbersearch']))

    {
      
      $CustomerNumbertoSearch = $_GET['CustomerNumber'];
    
      $query = "SELECT 
      `opentapsdb`.`PARTY_CONTACT_MECH`.`CONTACT_MECH_ID` AS `ContactMech`,
      `opentapsdb`.`POSTAL_ADDRESS`.`TO_NAME` AS `ToName`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ATTN_NAME` AS `AttnName`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS1` AS `Address1`,
      `opentapsdb`.`POSTAL_ADDRESS`.`ADDRESS2` AS `Address2`,
      `opentapsdb`.`POSTAL_ADDRESS`.`CITY` AS `City`,
      `opentapsdb`.`POSTAL_ADDRESS`.`STATE_PROVINCE_GEO_ID` AS `State`,
      `opentapsdb`.`POSTAL_ADDRESS`.`POSTAL_CODE` AS `PostalCode`,
      `opentapsdb`.`POSTAL_ADDRESS`.`COUNTRY_GEO_ID` AS `Country`
      
      from `opentapsdb`.`PARTY`
      
      left join `opentapsdb`.`PERSON`
         on `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PERSON`.`PARTY_ID`
      
      left join `opentapsdb`.`PARTY_GROUP`
         on `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PARTY_GROUP`.`PARTY_ID`

      left join `opentapsdb`.`PARTY_CONTACT_MECH`
         on `opentapsdb`.`PARTY_CONTACT_MECH`.`PARTY_ID` = `opentapsdb`.`PARTY`.`PARTY_ID`

      left join `opentapsdb`.`CONTACT_MECH`
         on `opentapsdb`.`CONTACT_MECH`.`CONTACT_MECH_ID` = `opentapsdb`.`PARTY_CONTACT_MECH`.`CONTACT_MECH_ID`

      left join `opentapsdb`.`POSTAL_ADDRESS`
         on `opentapsdb`.`POSTAL_ADDRESS`.`CONTACT_MECH_ID` = `opentapsdb`.`CONTACT_MECH`.`CONTACT_MECH_ID`
         
      where `opentapsdb`.`PARTY`.`PARTY_ID` = '$CustomerNumbertoSearch'

        and (`opentapsdb`.`PARTY`.`STATUS_ID` = 'PARTY_ENABLED' or isnull(`opentapsdb`.`PARTY`.`STATUS_ID`))
        
        and isnull(`opentapsdb`.`PARTY_CONTACT_MECH`.`THRU_DATE`)

        and `opentapsdb`.`CONTACT_MECH`.`CONTACT_MECH_TYPE_ID` = 'POSTAL_ADDRESS'";
    
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
    }

    ?>