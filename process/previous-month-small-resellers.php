<?php

include 'nrr-connect.php';

$linecount = 0;

    $query = "SELECT * FROM `PrevMonthSmallResellers`";
    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

?>
