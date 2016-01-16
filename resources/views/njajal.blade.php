<html>
  <head>
    <?php 
    $value =  [
          ['Year','Sales', 'Expenses','direct'],
          ['january',1000,400,500],
          ['2005',1170,460,700],
          ['2006',660,1120,800],
          ['2007',1030,540,900]
          ]
    ?>
    <script type="text/javascript" src="http://localhost/absence/bootstrap/chart.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var isi = <?php echo json_encode($value) ?>
        var data = google.visualization.arrayToDataTable(isi);

        var options = {
          title: 'Data Pengunjung Ruang Baca',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 500px"></div>
  </body>
</html>