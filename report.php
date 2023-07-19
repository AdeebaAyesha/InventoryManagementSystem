<?php
include 'dbconnection.php';
 ?>
 <html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Balance', 'Unit','Date_u'],
        <?php
        $query="select * from sale";
        $res=mysqli_query($connection, $query);
        while($data=mysqli_fetch_array($res)){
          $balance=$data['Balance'];
          $unit=$data['Unit'];
          $date=$data['Date_u'];
         ?>
         [<?php echo $balance;?>,<?php echo $unit;?>,<?php echo $date;?>],
        <?php
      }
         ?>

      ]);

      var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>
