<?php

include 'nrr-connect.php';

$linecount = 0;

    $query = "SELECT * FROM `YesterdayOrdersByStore`";
    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

?>
