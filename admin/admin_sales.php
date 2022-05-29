<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




      

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Top Selling Artist 
    </h6>

<!--
    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                            <form action="search.php" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>-->

  </div>

  <!--<div class="card-body">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>




    <?php

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    $query = "SELECT  * FROM user WHERE user.USER_TYPE = 'Artist' ORDER BY TOTAL_SALES DESC LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    
    ?>


    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style="text-align:center">
          <tr>
            <th> ID </th>
            <th>Profile</th>
            <th>Name</th>
            <th>Total Sales</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr style="text-align:center">
            <td><?php echo $row['USER_ID']; ?></td>
            <td><?php echo '<img src="../pictures/profile/'.$row['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
            <td><?php echo $row['USER_FNAME']; ?> <?php echo $row['USER_LNAME']; ?></td>
            <td>Php <?php $row['TOTAL_SALES'] = number_format($row['TOTAL_SALES']); echo $row['TOTAL_SALES']; ?></td>
            

           
          </tr>

          <?php
            }
          }
          else{
            echo 'No Record Found';
          }
          ?>
        
        </tbody>
      </table>

      </div>
      

    </div>
  </div>
</div>-->


<div class="card-body">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>




    <?php

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    $query = "SELECT user.USER_ID,user.User_imagepath,user.USER_FNAME, user.USER_LNAME, COUNT(art_work.ART_STATUS) AS SOLD, SUM(art_work.ART_PRICE) AS TOTAL FROM user,art_work WHERE user.USER_ID = art_work.USER_ID AND art_work.ART_STATUS = 'Sold'  GROUP BY USER_ID ORDER BY TOTAL DESC LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);
    
    $result1 = $conn->query("SELECT COUNT(user.USER_ID) AS USER_ID FROM user, art_work WHERE user.USER_ID = art_work.USER_ID AND art_work.ART_STATUS = 'Sold'  GROUP BY user.USER_ID");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['USER_ID'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
    
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;

    
    ?>
    
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>


    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style="text-align:center">
          <tr>
            <th> ID </th>
            <th>Profile</th>
            <th>Name</th>
            <th>Sold Artworks</th>
            <th>Total Sales</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr style="text-align:center" align="center">
            <td><?php echo $row['USER_ID']; ?></td>
            <td><?php echo '<img src="../pictures/profile/'.$row['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
            <td><?php echo $row['USER_FNAME']; ?> <?php echo $row['USER_LNAME']; ?></td>
            <td><?php echo $row['SOLD']; ?></td>
            <td>Php <?php $row['TOTAL'] = number_format($row['TOTAL']); echo $row['TOTAL']; ?></td>
            

           
          </tr>

          <?php
            }
          }
          else{
            echo 'No Record Found';
          }
          ?>
        
        </tbody>
      </table>

      </div>
      
      <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_sales.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>
      

    </div>
  </div>
</div>



<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>  