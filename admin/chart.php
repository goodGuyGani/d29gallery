<?php
include('includes/connection.php');
?>




<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      
      
      <?php
            $sql = "SELECT COUNT(*) AS available from art_work WHERE ART_STATUS='Available'";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
    ?>
    
    <?php
            $sql2 = "SELECT COUNT(*) AS sold from art_work WHERE ART_STATUS='Sold'";
            $result = $conn->query($sql2);
            $data2 =  $result->fetch_assoc();
    ?>
      
      
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Artwork Status', 'Count'],
          ['Available',     <?php echo $data['available']; ?>],
          ['Sold',     <?php echo $data2['sold']; ?>],
        ]);

        var options = {
          title: 'Status',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

