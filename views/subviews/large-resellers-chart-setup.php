<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);

   function drawChart() {
     var data = google.visualization.arrayToDataTable([
 
     ['Store','OrdersMTD'],

       <?php 
		 $query = "SELECT * from PrevMonthHighVolumeResellersView";
 
		 $exec = mysqli_query($con,$query);

		 while($row = mysqli_fetch_array($exec)){
 
		 echo "['".$row['AccountName']."',".$row['TotalOrders']."],";
		 }
	   ?> 
 
     ]);
 
    var options = {

      title: 'Previous Month\'s Orders by Store',

      pieHole: 0.4,
            pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
    };

   var chart = new google.visualization.BarChart(document.getElementById("columnchart12"));
   chart.draw(data,options);
}
	
</script>