<?php

require_once $processdir.'/nrr-connect.php';

      $linecount = 0;

      $query = "SELECT * FROM `TodayFloridaSalesTax`";
      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);

?>
