<script type="text/javascript">
         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);

         function drawChart() {
          var data = google.visualization.arrayToDataTable([
 
           ['AccountName','TotalOrders', {role: 'style'}],

        <?php 
	     
	     $fillcolor = "fill-color: #ADCF3F";
	     
	     $strokecolor = "stroke-color: #564536;";
	     
	     $strokewidth = "stroke-width: 1;";
	     
	     $query = "SELECT monthname(`AllOpentapsOrders`.`OrderDate`) AS `Month`,
              year(`AllOpentapsOrders`.`OrderDate`) AS `Year`,
              `AllOpentapsOrders`.`AccountName` AS `AccountName`,`AllOpentapsOrders`.`CustomerNum` AS `CustomerNum`,
              sum(`AllOpentapsOrders`.`OrderTotal`) AS `TotalOrders` 
              
              from `OpentapsDW`.`AllOpentapsOrders` 
              
              where (`AllOpentapsOrders`.`CustomerNum` = '54849'
              or `AllOpentapsOrders`.`CustomerNum` = '56458' 
              or `AllOpentapsOrders`.`CustomerNum` = '52864'
              or `AllOpentapsOrders`.`CustomerNum` = '56166'
              or `AllOpentapsOrders`.`CustomerNum` = '42318'
              or `AllOpentapsOrders`.`CustomerNum` = '52809'
              or `AllOpentapsOrders`.`CustomerNum` = '39199'
              or `AllOpentapsOrders`.`CustomerNum` = '39547'
              or `AllOpentapsOrders`.`CustomerNum` = '55047'
              or `AllOpentapsOrders`.`CustomerNum` = '55354'
              or `AllOpentapsOrders`.`CustomerNum` = '56418'
              or `AllOpentapsOrders`.`CustomerNum` = '57113'
              or `AllOpentapsOrders`.`CustomerNum` = '57123'
              or `AllOpentapsOrders`.`CustomerNum` = '58278'
              or `AllOpentapsOrders`.`CustomerNum` = '58333'
              or `AllOpentapsOrders`.`CustomerNum` = '58385'
              or `AllOpentapsOrders`.`CustomerNum` = '57044'
              or `AllOpentapsOrders`.`CustomerNum` = '58648'
              or `AllOpentapsOrders`.`CustomerNum` = '58849'
              or `AllOpentapsOrders`.`CustomerNum` = '59650'
              or `AllOpentapsOrders`.`CustomerNum` = '59227'
              or `AllOpentapsOrders`.`CustomerNum` = '59713'
              or `AllOpentapsOrders`.`CustomerNum` = '58307'
              or `AllOpentapsOrders`.`CustomerNum` = '56734'
              or `AllOpentapsOrders`.`CustomerNum` = '59522'
              or `AllOpentapsOrders`.`CustomerNum` = '60327'
              or `AllOpentapsOrders`.`CustomerNum` = '60254'
              or `AllOpentapsOrders`.`CustomerNum` = '57700')
              
              and `AllOpentapsOrders`.`OrderDate` between '$startdate' and '$enddate'

            and `AllOpentapsOrders`.`Status` = 'ORDER_COMPLETED'
            
            and `AllOpentapsOrders`.`OrderNum` not in (select `OrderNumber` from `OpentapsDW`.`DeadOrders`)
            
            group by `AllOpentapsOrders`.`CustomerNum` 
            
            order by sum(`AllOpentapsOrders`.`OrderTotal`) desc";
 
	  $exec = mysqli_query($mysqli,$query);

	    while($row = mysqli_fetch_array($exec)){
 
            echo "['".$row['AccountName']."',".$row['TotalOrders'].",'".$strokecolor.$strokewidth.$fillcolor."'],";
	  }
       ?> 
 
     ]);
 
         var options = {

             title: 'Large Resellers not including Health Alert',

             pieHole: 0.4,
             pieSliceTextStyle: {
             color: 'black',
             },
             legend: 'none'
         };

         var chart = new google.visualization.BarChart(document.getElementById("BarChart1"));
   
         chart.draw(data,options);
       }

    </script>

     <div class="resultbox" style="float: left">
         <div id="BarChart1" style="width: 100%; height: 500px;"></div>
     </div>