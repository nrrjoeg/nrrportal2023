<script type="text/javascript">

         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);

         function drawChart() {
             var data = google.visualization.arrayToDataTable([
 
      ['CustomerType','TotalOrders'],

    <?php
        
	      $query = "SELECT * FROM `OverallTotals`";
         
         $exec = mysqli_query($mysqli,$query);

	    while($row = mysqli_fetch_array($exec)){
 
            echo "['RetailTotal', ".$row['TotalRetail']."],
            
            ['ResellerTotal', ".$row['ResellerTotal']."],
            
            ['DrWestTotal', ".$row['DrWestTotal']."]";
	  }
   ?> 
 
     ]);
 
    var options = {

      title: 'Order Total Dollars by Percent',
      is3D: true,
    };

   var chart = new google.visualization.PieChart(document.getElementById("PieChart6"));
   chart.draw(data,options);

}
	
</script>
     <div class="presentation-container-piechart">
       <div id="PieChart6" style="width: 900px; height: 500px;"></div>
    </div>