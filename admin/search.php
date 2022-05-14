<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>





<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Results </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th>Image</th>
                                    <th> Username </th>
                                    <th>Email </th>
                                    <th>Name</th>
                                    <th>Contact Number</th>
                                    <th>User Type</th>
                                    <th>EDIT </th>
                                    <th>DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM user WHERE CONCAT(USER_FNAME,USER_LNAME,USER_EMAIL, username) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><?= $items['USER_ID']; ?></td>
                                                <td><?= '<img src="../pictures/profile/'.$items['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
                                                <td><?= $items['username']; ?></td>
                                                <td><?= $items['USER_EMAIL']; ?></td>
                                                <td><?= $items['USER_FNAME']; ?> <?= $items['USER_LNAME']; ?></td>
                                                <td>0<?= $items['USER_CONTACT']; ?></td>
                                                <td><?= $items['USER_TYPE']; ?></td>

                                                <td>
              
                <form action="register_editsearch.php " method="post">
                    <input type="hidden" name="edit_id" value="<?= $items['USER_ID']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?= $items['USER_ID']; ?>">
                  <button type="submit" name="delete_btn_search" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>











<?php
include('includes/scripts.php');
include('includes/footer.php');
?>