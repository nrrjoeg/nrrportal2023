<?php

require_once $processdir.'/dashboard-connect.php';

      $query = "SELECT 
       
         Title,
         ItemText,
         ViewFileName,
         PrintFile,
         ParentDirectory

       FROM `InvoiceMenu`";

      $search_result = mysqli_query($connection, $query);
      $linecount = mysqli_num_rows($search_result);

?>
