<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      
      
    <?php

    $query3 = "SELECT CAT_ID, CAT_NAME, COUNT(art_work.ART_CATEGORY) AS TOTAL FROM category, art_work WHERE category.CAT_NAME = art_work.ART_CATEGORY GROUP BY CAT_NAME";
    $result3 = mysqli_query($conn, $query3);


    ?>

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Artwork', 'Category'],
          
          <?php while($row3 = mysqli_fetch_array($result3)):; ?>
          ['<?php echo $row3['CAT_NAME']; ?>', <?php echo $row3['TOTAL']; ?>],
          <?php endwhile; ?>
          
          
          
        ]);

        var options = {
          title: 'Artworks',
          is3D: true,
          backgroundColor: '#E4E4E4',

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
    
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
          backgroundColor: '#E4E4E4',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href="registerall.php"  style="text-decoration:none;color: inherit;">
          <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
              $query = "SELECT USER_ID FROM user ORDER BY USER_ID";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);

              echo '
              <h4 style="color:black">Total Users: '.$row.' </h4>';

              

               
               ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
    <a href="admin_artworks1.php" style="text-decoration:none;color: inherit;">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Artworks Post</div>
              
              <?php
              $query = "SELECT ART_ID FROM art_work ORDER BY ART_ID";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);

              echo '
              <h4>Total Artworks: '.$row.' </h4>';

              

               
               ?>

            </div>
            <div class="col-auto">
              <i class="fas fa-image fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <a href="admin_orders1.php" style="text-decoration:none;color: inherit;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Orders</div>
              
              <?php
              $query = "SELECT TRANSACTION_ID FROM buy_transaction WHERE SHIPPING_STATUS='Processing' ORDER BY TRANSACTION_ID";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);

              echo '
              <h4>Pending Orders: '.$row.' </h4>';

              

               
               ?>

            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <a href="admin_orders1(sold).php" style="text-decoration:none;color: inherit;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sold Artworks</div>
              
              <?php
              $query = "SELECT ART_ID FROM art_work WHERE ART_STATUS = 'SOLD' ORDER BY ART_ID";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);

              echo '
              <h4>Total Artworks: '.$row.' </h4>';

              

               
               ?>




            </div>
            <div class="col-auto">
              <i class="fas fa-check fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>

  <!-- Content Row -->
<div id="piechart" style="width: 100%; height: 500px;border: 1px solid #ccc"></div>


<div style="height:10px"></div>
  
<div id="donutchart" style="width: 50%; height: 500px;border: 1px solid #ccc"></div>
  
  







  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>