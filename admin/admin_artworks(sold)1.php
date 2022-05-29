<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function(){
       
       $('.delete_btn2').click(function (e){
           e.preventDefault();
           
           
           var id = $(this).val();
           
           swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this artwork!",
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
                        'delete_btn2': true
                    },
                    
                }).then( () => {
            swal("Your Data Is Deleted");
            setTimeout("location.href = '';", 800);
    
});
            } 
});
           
           
       })
        
    });
</script>


<?php

    $query3 = "SELECT * FROM category";
    $result3 = mysqli_query($conn, $query3);


?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sold Artworks
            <a href="admin_artworks(sold)2.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Artwork Grid
            </button></a>
            <div class="form-group float-right" style="width:20%">
                <label></label>
                
                <form action="cat_search2.php" method="GET">
                <select class="custom-select" name="cat_name" id="fetchval">
                  <option selected>Select Category</option>
                  <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                  <option value="<?php echo $row3['CAT_NAME']; ?>"><?php echo $row3['CAT_NAME']; ?></option>
                  <?php endwhile; ?>
                </select>
                
                
                <button type="submit" name="cat_btn" class="btn btn-primary" style="width:100%;margin-top:10px">
              Filter
            </button>
            </form>
            </div>
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

    $query = "SELECT  * FROM art_work WHERE ART_STATUS = 'Sold' LIMIT $start, $limit ";
    $query_run = mysqli_query($conn, $query);

    $result1 = $conn->query("SELECT count(ART_ID) AS ART_ID FROM art_work WHERE ART_STATUS = 'Sold'");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['ART_ID'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
    
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;

    ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $Next; ?>">Next</a></li>
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
            <th>Price </th>
            <th>Date Added</th>
            <th>Category</th>
            <th>Status</th>
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
            <td><?php echo $row['ART_ID']; ?></td>
            <td><?php echo '<img src="../pictures/arts/'.$row['ART_IMAGEPATH'].'" width="100px;" height="100px;" alt="Image" style="object-fit: cover;">' ?></td>
            <td><?php echo $row['ART_TITLE']; ?></td>
            <td><?php echo 
            $row['ART_PRICE'] = number_format($row['ART_PRICE']);
            $row['ART_PRICE']; ?></td>
            <td><?php echo $row['ART_DATE']; ?></td>
            <td><?php echo $row['ART_CATEGORY']; ?></td>
            
            
            <?php
            if($row['ART_STATUS'] == "Sold" || $row['ART_STATUS'] == "SOLD"){
                ?>
                <td><div style="background-color: #29a32f;color:white;border-radius:30px;padding:5px;text-align:center">Sold</div>
                </td>
                <?php
            }
            else if($row['ART_STATUS'] == "Available" || $row['ART_STATUS'] == "AVAILABLE"){
                ?>
                <td><div style="background-color: crimson;color:white;border-radius:30px;padding:5px;text-align:center">Available</div>
                </td>
                <?php
            }
            ?>
            

            <td>
              
                <a class="editbtn" href="edit_artwork.php?category=<?php echo $row['ART_CATEGORY']; ?>&id=<?php echo $row['ART_ID']; ?>"> <button  type="button" name="edit_btn" class="btn btn-success"> EDIT</button></a>
            </td>
            <td>
                <!--<form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['ART_ID']; ?>">
                  <button type="submit" name="delete_btn2" class="btn btn-danger"> DELETE</button>
                </form>-->
                
                <button type="submit" class="btn btn-danger delete_btn2" value="<?php echo $row['ART_ID'];; ?>"> DELETE</button>
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
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)1.php?page=<?= $Next; ?>">Next</a></li>
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