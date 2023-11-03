<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $startdate = $_GET['BeginDatevaluetoSearch'];
    $enddate = $_GET['EndDatevaluetoSearch'];
}
?>
