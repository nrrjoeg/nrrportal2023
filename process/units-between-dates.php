<?php

require_once $processdir.'/nrr-connect.php';

if(isset($_GET['BeginDatevaluetoSearch'], $_GET['EndDatevaluetoSearch']))

{
    $BeginDatevaluetoSearch = $_GET['BeginDatevaluetoSearch'];
    $EndDatevaluetoSearch = $_GET['EndDatevaluetoSearch'];

    $query = "SELECT `OrderItemsView`.`ProductNum` AS `ProductNum`,
    
    `OrderItemsView`.`ItemDesc` AS `ItemDesc`,
    
    round(sum(`OrderItemsView`.`Quantity`),0) AS `QuantityOrdered`,
    
    round(sum(`OrderItemsView`.`ExtPrice`),2) AS `TotalDollars`,

    (round(sum(`OrderItemsView`.`ExtPrice`),2) / round(sum(`OrderItemsView`.`Quantity`),0)) AS `AveragePrice` 
    
    from `OpentapsDW`.`OrderItemsView`

    where `OrderItemsView`.`Date` between '$BeginDatevaluetoSearch' and '$EndDatevaluetoSearch'
    
    and `OrderItemsView`.`Status` = 'ITEM_COMPLETED' 
    
    group by `OrderItemsView`.`ProductNum` 
    
    order by `OrderItemsView`.`ItemDesc`";

      $search_result = mysqli_query($mysqli, $query);
      $linecount = mysqli_num_rows($search_result);
}
?>