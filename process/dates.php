<?php
  
  require_once $_SERVER['DOCUMENT_ROOT'].'/NRR-Dev/config/config.php';

  echo 'Yesterdays Date<br>';
  $yesterday = date('Y-m-d', strtotime("-1 days"));
  echo $yesterday,'<br>';
  echo 'Today Date <br>';
  $today = date('Y-m-d');
  echo $today,'<br>';

  echo 'Last Day of Last Month<br>';
  echo $lastdayoflastmonth,'<br>';
  echo 'First Day of Last Month<br>';
  echo $firstdayoflastmonth,'<br>';

  echo 'First Day of This Month<br>';
  echo $firstdayofcurrentmonth,'<br>';
  echo 'Last Day of Current Month<br>';
  echo $lastdayofcurrentmonth,'<br>';

?>
