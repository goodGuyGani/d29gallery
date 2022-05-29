<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>





<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Pending Orders
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

    $query = "SELECT * FROM user,orders
                        WHERE user.USER_ID = orders.USER_ID AND orders.ORDER_STATUS = 'Pending' LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    $result1 = $conn->query("SELECT count(ORDER_ID) AS ORDER_ID FROM orders WHERE ORDER_STATUS = 'Pending' ");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['ORDER_ID'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
    
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;

    ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="text-align:center">
            <th> ID </th>
            <th>Profile</th>
            <th>From</th>
            <th>Contact</th>
            <th>Artwork(s)</th>
            <th>Address</th>
            <th>Total Amount</th>
            <th>Order Placed</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr>
            <td><?php echo $row['ORDER_ID']; ?></td>
            <td><?php echo '<img src="../pictures/profile/'.$row['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
            <td style="text-align:center"><?php echo $row['ORDER_NAME']; ?></td>
            
            <td><?php echo $row['ORDER_PHONE']; ?></td>
            <td><?php echo $row['ORDER_PRODUCTS']; ?></td>
            <td><?php echo $row['ORDER_ADDRESS']; ?></td>
            
            <td style="text-align:center">₱<?php echo 
            $row['ORDER_AMOUNT'] = number_format($row['ORDER_AMOUNT']);
            $row['ORDER_AMOUNT']; ?></td>
            <td style="text-align:center"><?php echo $row['ORDER_DATE']; ?></td>
            
            <?php
            if($row['ORDER_STATUS'] == "Pending"){
                ?>
                <td><div style="background-color: crimson;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['ORDER_STATUS']; ?></div>
                </td>
                <?php
            }
            else if($row['ORDER_STATUS'] == "Shipping"){
                ?>
                <td><div style="background-color: #161f5e;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['ORDER_STATUS']; ?></div>
                </td>
                <?php
            }
            else if($row['ORDER_STATUS'] == "Delivered"){
                ?>
                <td><div style="background-color: #29a32f;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['ORDER_STATUS']; ?></div>
                </td>
                <?php
            }
            else if($row['ORDER_STATUS'] == "Cancelled"){
                ?>
                <td><div style="background-color: #b22222;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['ORDER_STATUS']; ?></div>
                </td>
                <?php
            }
            ?>
            
            
            
            
            <!--<td><?php echo $row['ORDER_DATE']; ?> to <?php echo $row['DELIVERY_DATE']; ?></td>-->
            

            <td>
              
                <a class="editbtn" href="admin_editorder1.php?id=<?php echo $row['ORDER_ID']; ?>"> <button  type="button" name="edit_btn" class="btn btn-success">VIEW</button></a>
            </td>
            <!--<td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['ORDER_DATE']; ?>">
                  <button type="submit" name="order_delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>-->
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
    <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_orders1.php?page=<?= $Next; ?>">Next</a></li>
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