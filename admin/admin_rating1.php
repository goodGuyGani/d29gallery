<?php
include('includes/header.php'); 
include('includes/connection.php');
include('includes/navbar.php'); 
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this rating?'))
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
       
       $('.delete_rating').click(function (e){
           e.preventDefault();
           
           
           var id = $(this).val();
           
           swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this rating!",
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
                        'delete_rating': true
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
    <h6 class="m-0 font-weight-bold text-primary">Artwork Ratings
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

    $query = "SELECT * FROM art_work, rating, user WHERE rating.art_id = art_work.art_id AND rating.user_id = user.user_id LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    $result1 = $conn->query("SELECT count(RATING_ID) AS RATING_ID FROM rating");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['RATING_ID'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
    
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;

    ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    <div class="table-responsive">

    <div style="height: 600px; overflow-y: auto;">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Image</th>
            <th>Title</th>
            <th>From </th>
            <th>Rating</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
              ?>

          <tr>
            <td><?php echo $row['RATING_ID']; ?></td>
            <td><a href="../info_art.php?id=<?php echo $row['ART_ID']; ?>"><?php echo '<img src="../pictures/arts/'.$row['ART_IMAGEPATH'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></a></td>
            <td><?php echo $row['ART_TITLE']; ?></td>
            <td><?php echo $row['USER_FNAME']; ?> <?php echo $row['USER_LNAME']; ?></td>
            <td><?php echo $row['RATING_VALUE']; ?></td>
            

            <td>
                <!--<a class="delbutton" href="../admin_deleterating.php?id=<?php echo $row['RATING_ID']; ?>"onclick="return(YNconfirm());">
                  <input type="hidden"">
                  <button class="btn btn-danger"> DELETE</button>-->
                  
                  <button type="submit" class="btn btn-danger delete_rating" value="<?php echo $row['RATING_ID']; ?>">DELETE</button>

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
    <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_rating1.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

    </div>
  </div>
</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>