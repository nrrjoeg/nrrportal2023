<script type="text/javascript">

         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);

         function drawChart() {
             var data = google.visualization.arrayToDataTable([
 
      ['TotalDollars','RetailOrders','ResellerOrders', {role: 'annotation' } ],

    <?php

        $filler = "";
        
	      $query = "SELECT * FROM `OrderTotalsByDay`";
         
         $exec = mysqli_query($mysqli,$query);

	    while($row = mysqli_fetch_array($exec)){
 
            echo "['".$row['OrderDate']."',".$row['RetailOrders'].",".$row['ResellerOrders'].",'".$filler."'],";
	  }
   ?> 
 
     ]);
 
    var options = {

      title: 'Daily Totals not including HealthAlert',
      width: 1000,
      height: 500,
      legend: { position: 'top', maxLines: 3 },
      bar: { groupWidth: '75%' },
      isStacked: true,
    };

   var chart = new google.visualization.AreaChart(document.getElementById("AreaChart5"));
   chart.draw(data,options);

}
	
</script>
      <div class="resultbox" style="float: left">
       <div id="AreaChart5"></div>
      </div>