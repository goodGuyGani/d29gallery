<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this Comment?'))
    {
        return true;
    }
    else
        return false;
};
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function(){
       
       $('.delete_request').click(function (e){
           e.preventDefault();
           
           
           var id = $(this).val();
           
           swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this request!",
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
                        'delete_request': true
                    },
                    
                }).then( () => {
            swal("Done!","Your Data Is Deleted","success");
            
            setTimeout("location.href = '';", 1000);
    
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
    <h6 class="m-0 font-weight-bold text-primary">Commission Request
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

    $query = "SELECT * FROM user, commission_request WHERE commission_request.USER_ID = user.USER_ID ORDER BY COM_ID DESC LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    $result1 = $conn->query("SELECT count(COM_ID) AS COM_ID FROM commission_request");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['COM_ID'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
    
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;

    ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="text-align:center">
            <th> ID </th>
            <th>To</th>
            <th>Status</th>
            <th>From</th>
            <th>Contact</th>
            <th>Description</th>
            <th>Budget(Ideal)</th>
            <th>Finish Date</th>
            
            <th>Size</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr>
            <td><?php echo $row['COM_ID']; ?></td>
            <td align="center"><?php echo '<img src="../pictures/profile/'.$row['User_imagepath'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?>
            <?php echo $row['USER_FNAME']; ?> <?php echo $row['USER_LNAME']; ?>
            
            <!--<form action="code.php" method="post" style="padding:10px;margin-top:20px">
                <input type="hidden" name="delete_id" value="<?php echo $row['COM_ID']; ?>">
                <button type="submit" name="delete_request" class="btn btn-danger"> DELETE</button>
            </form>-->
            
            <button type="submit" class="btn btn-danger delete_request" value="<?php echo $row['COM_ID']; ?>">DELETE</button>
            
            </td>
            <?php
            if($row['COM_STATUS'] == "Accepted"){
                ?>
                <td><div style="background-color: #29a32f;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['COM_STATUS']; ?></div>
                </td>
                <?php
            }
            else if($row['COM_STATUS'] == "Declined"){
                ?>
                <td><div style="background-color: #b22222;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['COM_STATUS']; ?></div>
                </td>
                <?php
            }
            else if($row['COM_STATUS'] == "Unchecked"){
                ?>
                <td><div style="background-color: crimson;color:white;border-radius:30px;padding:5px;text-align:center"><?php echo $row['COM_STATUS']; ?></div>
                </td>
                <?php
            }
            $row['COM_BUDGET'] = number_format($row['COM_BUDGET']);
            ?>
            
            <td style="text-align:center"><?php echo $row['COM_NAME']; ?></td>
            <td>0<?php echo $row['COM_CONTACT']; ?></td>
            
            <td><?php echo $row['COM_DESCRIPTION']; ?></td>
            <td style="text-align:center">Php <?php echo $row['COM_BUDGET']; ?></td>
            <td><?php echo $row['COM_FINISHDATE']; ?></td>
            
            
            <td style="text-align:center"><?php echo $row['COM_SIZE']; ?></td>
            

            <!--<td>
                <a class="delbutton" href="../delete_comment.php?id=<?php echo $row['COM_ID']; ?>"onclick="return(YNconfirm());">
                  <input type="hidden"">
                  <button class="btn btn-danger"> DELETE</button>

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
    <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="request_all.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    </div>
  </div>
</div>








<?php
include('includes/scripts.php');
include('includes/footer.php');
?>  