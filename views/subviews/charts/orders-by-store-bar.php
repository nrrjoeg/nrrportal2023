<script type="text/javascript">
         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);

         function drawChart() {
             var data = google.visualization.arrayToDataTable([
 
             ['StoreName','OrdersMTD', {role: 'style'}],

    <?php

          $fillcolor = "fill-color: #ADCF3F";
	     
	  $strokecolor = "stroke-color: #564536;";
	     
          $strokewidth = "stroke-width: 1;";
	  
          $query = "SELECT `AllOpentapsOrders`.`Store` AS `Store`,
      
          `ProductStores`.`StoreName` AS `StoreName`, 
      
          sum(`AllOpentapsOrders`.`OrderTotal`) AS `TotalStoreOrdersMTD` 
      
          from `OpentapsDW`.`AllOpentapsOrders` join `OpentapsDW`.`ProductStores` 
      
          where `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED' 
      
          and `AllOpentapsOrders`.`OrderType` = 'SALES_ORDER' 
      
          and `ProductStores`.`StoreNum` = `AllOpentapsOrders`.`Store` 
      
          and `AllOpentapsOrders`.`OrderDate` between '$startdate' and '$enddate' 
      
          and `AllOpentapsOrders`.`OrderNum` not in (SELECT `OrderNumber` from `OpentapsDW`.`DeadOrders`)

          and `AllOpentapsOrders`.`Store` <> '10011'
      
          group by `AllOpentapsOrders`.`Store` 
      
          order by sum(`AllOpentapsOrders`.`OrderTotal`) desc";
 
	 $exec = mysqli_query($mysqli,$query);

	     while($row = mysqli_fetch_array($exec)){
 
		 echo "['".$row['StoreName']."',".$row['TotalStoreOrdersMTD'].",'".$strokecolor.$strokewidth.$fillcolor."'],";
             }
     
	?>
 
     ]);
 
    var options = {

      title: 'Orders by Store not Including Health Alert',

      pieHole: 0.4,
            pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
    };

   var chart = new google.visualization.BarChart(document.getElementById("BarChart2"));
   chart.draw(data,options);
}
	
</script>

<div class="resultbox" style="float: left">
     <div id="BarChart2" style="width: 100%; height: 300px;"></div>
</div>
