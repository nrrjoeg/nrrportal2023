<?php

    while ($row = mysqli_fetch_array($search_result)):

    $startdate = $row['StartDate'];
    $enddate = $row['EndDate'];

    endwhile;

?>