<?php

include $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT * FROM `OpenInvoicesTable`";
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
