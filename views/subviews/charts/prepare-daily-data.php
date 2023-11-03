<?php 

      include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

      include $processdir.'/nrr-connect.php';

$query = "CREATE temporary table `RetailOrdersByDay` as
          
          Select `OrderDate`,
                  sum(`AllOpentapsOrders`.`OrderTotal`) AS `RetailOrders`,
                  count(*) as `DailyRetailOrderCount`
          
          from `OpentapsDW`.`AllOpentapsOrders`
          
          where `OrderDate` between '$startdate' and '$enddate'
          
          and isnull(`AllOpentapsOrders`.`AccountName`)
          
          and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'

          and `AllOpentapsOrders`.`OrderNum` not in (select `OrderNumber` from `OpentapsDW`.`DeadOrders` where 1)
          
          group by `OrderDate`;";
          
          
$query .= "CREATE temporary table `ResellerOrdersByDay` as
          
          select `OrderDate`,
                  sum(`AllOpentapsOrders`.`OrderTotal`) AS `ResellerOrders`,
                  count(*) as `DailyResellerOrderCount`
          
          from `OpentapsDW`.`AllOpentapsOrders`
          
          where `OrderDate` between '$startdate' and '$enddate'
          
          and `AllOpentapsOrders`.`AccountName` is not null
          
          and `AllOpentapsOrders`.`CustomerNum` <> '42803'
          
          and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'

          and `AllOpentapsOrders`.`OrderNum` not in (select `OrderNumber` from `OpentapsDW`.`DeadOrders` where 1)
          
          group by `OrderDate`;";
          
          
$query .= "CREATE temporary table `DrWestOrdersByDay` as
          
          select `OrderDate`,
                  sum(`AllOpentapsOrders`.`OrderTotal`) AS `DrWestOrders`,
                  count(*) as `DailyDrWestOrderCount`
          
          from `OpentapsDW`.`AllOpentapsOrders`
          
          where `OrderDate` between '$startdate' and '$enddate'
          
          and `AllOpentapsOrders`.`CustomerNum` = '42803'
          
          and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'

          and `AllOpentapsOrders`.`OrderNum` not in (select `OrderNumber` from `OpentapsDW`.`DeadOrders` where 1)
          
          group by `OrderDate`;";
          
          
          
$query .= "DROP table if exists `OrderTotalsByDay`;";
          
$query .= "CREATE table `OrderTotalsByDay` as
          
          SELECT 
          
          `RetailOrdersByDay`.`OrderDate`,
          `RetailOrdersByDay`.`RetailOrders`,
          `RetailOrdersByDay`.`DailyRetailOrderCount`,
          `ResellerOrdersByDay`.`ResellerOrders`,
          `ResellerOrdersByDay`.`DailyResellerOrderCount`,
          `DrWestOrdersByDay`.`DrWestOrders`,
          `DrWestOrdersByDay`.`DailyDrWestOrderCount`

          FROM `RetailOrdersByDay` 
          
          left join `ResellerOrdersByDay` on `ResellerOrdersByDay`.`OrderDate` = `RetailOrdersByDay`.`OrderDate`
          
          left join `DrWestOrdersByDay` on `DrWestOrdersByDay`.`OrderDate` = `RetailOrdersByDay`.`OrderDate`
          
          where 1;";
          
$query .= "UPDATE `OrderTotalsByDay`
          
          Set `RetailOrders` = '0' , `DailyRetailOrderCount` ='0'
          
          where `RetailOrders` is null;";
          
$query .=  "UPDATE `OrderTotalsByDay`
          
          Set `ResellerOrders` = '0' , `DailyResellerOrderCount` = '0' 
          
          where `ResellerOrders` is null;";
          
$query .= "UPDATE `OrderTotalsByDay`
          
          Set `DrWestOrders` = '0', `DailyDrWestOrderCount` = '0' 
          
          where `DrWestOrders` is null;";

$query .= "DROP TABLE if exists `OverallTotals`;";

$query .= "CREATE Table `OverallTotals` as

          SELECT sum(`RetailOrders`) as `TotalRetail`,
          sum(`DailyRetailOrderCount`) as `RetailOrderCount`,
          sum(`ResellerOrders`) as `ResellerTotal`,
          sum(`DailyResellerOrderCount`) as `ResellerOrderCount`,
          sum(`DrWestOrders`) as `DrWestTotal`,
          sum(`DailyDrWestOrderCount`) as `DrWestOrderCount`

          FROM `OrderTotalsByDay` WHERE 1;";
          
     if (mysqli_multi_query($mysqli,$query))
        {
          do{

    // Store first result set

    if ($result=mysqli_store_result($mysqli)) {

      // Fetch one and one row

      while ($row=mysqli_fetch_row($result)){

        printf("%s\n",$row[0]);

        }
      // Free result set
      mysqli_free_result($result);

      }
    }

  while (mysqli_next_result($mysqli));

}

?>