<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['accountnumbersearch']))

    {
      
      $CustomerNumbertoSearch = $_GET['CustomerNumber'];
    
      $query = "SELECT `opentapsdb`.`PARTY`.`PARTY_ID` AS `AccountNum`,
      `opentapsdb`.`PERSON`.`FIRST_NAME` AS `FirstName`,
      `opentapsdb`.`PERSON`.`LAST_NAME` AS `LastName`,
      `opentapsdb`.`PARTY_GROUP`.`GROUP_NAME` AS `AccountName`,
      cast(`opentapsdb`.`PARTY`.`CREATED_DATE` as date) AS `DateCreated`,
      `opentapsdb`.`PARTY`.`STATUS_ID` AS `Status`
      
      from `opentapsdb`.`PARTY`
      
      left join `opentapsdb`.`PERSON`
         on `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PERSON`.`PARTY_ID`
      
      left join `opentapsdb`.`PARTY_GROUP`
         on `opentapsdb`.`PARTY`.`PARTY_ID` = `opentapsdb`.`PARTY_GROUP`.`PARTY_ID`
         
      where `opentapsdb`.`PARTY`.`PARTY_ID` = '$CustomerNumbertoSearch'

        and `opentapsdb`.`PARTY`.`STATUS_ID` = 'PARTY_ENABLED'";
    
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
    }

    ?>