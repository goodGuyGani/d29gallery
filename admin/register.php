<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" required name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" required name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" required name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" required name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" required name="Fname" class="form-control" placeholder="Enter Firstname">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" required name="Lname" class="form-control" placeholder="Enter Lastname">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="custom-select" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" id="contact" required name="contact" placeholder="Enter Number">
            <div class="form-group">
                <label>User Type</label>
                <select class="custom-select" name="type">
                  <option value="Admin">Admin</option>
                  <option value="Artist">Artist</option>
                  <option value="Customer">Customer</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label>Birthdate</label><br>
                <input id="datePicker" type="date"  id="bday" name="bday"/>
            </div>
            <div class="form-group">
              <label class="form-label" for="customFile">Profile Picture</label>
              <input type="file" class="form-control" id="file_upload"  name="file_upload" />
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function(){
       
       $('.delete_btn').click(function (e){
           e.preventDefault();
           
           
           var id = $(this).val();
           
           swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this user!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'delete_id': id,
                        'delete_btn': true
                    },
                    
                }).then( () => {
            swal("Done!","Your Data Is Deleted","success");
            setTimeout("location.href = '';", 800);
    
});
            } 
});
           
           
       })
        
    });
</script>






<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
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

  <div class="card-body" id="products_table">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="bg-info text-white text-center"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="bg-info text-white text-center"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>




    <?php

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    $query = "SELECT  * FROM user WHERE USER_TYPE = 'Admin' LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    $result1 = $conn->query("SELECT count(USER_ID) AS USER_ID FROM user WHERE USER_TYPE = 'Admin'");
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
    <li class="page-item"><a class="page-link" href="register.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="register.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="register.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr>
            <td><?php echo $row['USER_ID']; ?></td>
            <td><?php echo '<img src="../pictures/profile/'.$row['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['USER_EMAIL']; ?></td>
            <td><?php echo $row['USER_FNAME']; ?> <?php echo $row['USER_LNAME']; ?></td>
            <td>0<?php echo $row['USER_CONTACT']; ?></td>
            <td><?php echo $row['USER_TYPE']; ?></td>
            

            <td>
              
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['USER_ID']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <!--<form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['USER_ID']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>-->
                
                
                <button type="submit" class="btn btn-danger delete_btn" value="<?php echo $row['USER_ID']; ?>"> DELETE</button>
                

            </td>
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
    <li class="page-item"><a class="page-link" href="register.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="register.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="register.php?page=<?= $Next; ?>">Next</a></li>
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