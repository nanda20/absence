@extends('admin\index')
@section('content')
  <head>
    <script type="text/javascript" src="http://localhost/absence/bootstrap/chart.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable( 
          [['Month','BULAN'],
          ['january',1000],
          ['february',1170],
          ['maret',660],
          ['april',1030]]);


        var options = {
          title: 'Data Pengunjung Ruang Baca',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <style>
      #curve_chart{
        position: absolute;
        margin-left: -70px;
        z-index: 99;
      }

    </style>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 500px"></div>
  </body>
@endsection
