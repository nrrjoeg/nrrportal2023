<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'High', 'Low', 'Evening', 'Morning'],
          ['Monday',  88, 76, 84, 76],
          ['Tuesday',  88, 75, 84, 77],
          ['Wednesday', 88, 75, 82, 77],
          ['Thursday',  86, 75, 82, 77]
        ]);

        var options = {
          title: 'Sarasota Daily Temperatures',
          curveType: 'function',
          legend: { position: 'top' },
          pointsVisible: true
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 800px; height: 450px"></div>
  </body>
</html>
