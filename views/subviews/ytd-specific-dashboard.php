<?php
    require_once $processdir.'/get-nrr-totals.php';
    require_once $subviewsdir.'/show-nrr-totals.php';
?>

<?php
    require_once $processdir.'/get-retail-total.php';
    require_once $subviewsdir.'/show-retail-total.php';
?>

<?php
     require_once $processdir.'/get-reseller-total.php';
     require_once $subviewsdir.'/show-reseller-total.php';
?>

<?php
    require_once $processdir.'/get-drwest-total.php';
    require_once $subviewsdir.'/show-dr-west-total.php';
?>

<?php
    require_once $chartsdir.'/prepare-daily-data.php';
    require_once $chartsdir.'/totals-pie-chart.php';
    require_once $chartsdir.'/ytd-area-chart.php';
?>

<?php 
    require_once $processdir.'/get-orders-by-store.php';
    require_once $subviewsdir.'/show-orders-by-store.php';
?>

<?php
    require_once $processdir.'/get-big-resellers.php';
    require_once $subviewsdir.'/show-large-reseller-totals.php';
?>

<?php
    require_once $processdir.'/get-small-retailers.php';
    require_once $subviewsdir.'/show-small-retailers.php';
?>

<?php
    require_once $processdir.'/get-florida-sales-tax.php';
    require_once $subviewsdir.'/show-florida-sales-tax.php';
?>

<?php
    require_once $processdir.'/get-total-shipments.php';
    require_once $subviewsdir.'/show-shipping-charges.php';
?>

<?php
    require_once $processdir.'/order-counts/roll-up-order-counts.php';
    require_once $chartsdir.'/order-count-pie-chart.php';
?>

<?php
    require_once $processdir.'/order-counts/roll-up-order-counts.php';
    require_once $chartsdir.'/order-count-pie-chart.php';
?>

<?php
    require_once $processdir.'/get-sar-unit-counts/get-sar-retail-units.php';
    require_once $subviewsdir.'/show-sar-unit-counts/show-sar-retail-units.php';
?>

<?php
    require_once $processdir.'/get-sar-unit-counts/get-sar-wholesale-units.php';
    require_once $subviewsdir.'/show-sar-unit-counts/show-sar-wholesale-units.php';
?>