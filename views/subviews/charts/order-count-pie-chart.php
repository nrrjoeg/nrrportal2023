<script type="text/javascript">

         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);

         function drawChart() {
             var data = google.visualization.arrayToDataTable([
 
      ['CustomerType','OrderCount'],

    <?php
          $query = "SELECT `RetailOrderCount`,
                    `ResellerOrderCount`,
                    `DrWestOrderCount`
                    
                    from `OverallTotals`
                    
                    where 1";
          
          $exec = mysqli_query($mysqli, $query);

          while($row = mysqli_fetch_array($exec)):

            echo "['Retail Orders', ".$row['RetailOrderCount']."],
                  ['Dr West Orders', ".$row['DrWestOrderCount']."],
                  ['Reseller Orders', ".$row['ResellerOrderCount']."]";
                  

          endwhile;
   ?> 
 
     ]);
 
    var options = {

      title: 'Order Counts with Percentages',
      is3D: true,
    };

   var chart = new google.visualization.PieChart(document.getElementById("PieChart7"));
   chart.draw(data,options);

}
	
</script>
     <div class="presentation-container-piechart">
       <div id="PieChart7" style="width: 900px; height: 500px;"></div>
    </div>