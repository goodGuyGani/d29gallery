<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
<?php
if(isset($_POST['edit_btn'])){
$id = $_POST['edit_id'];

$query = "SELECT * FROM user WHERE USER_ID = '$id' ";
$query_run = mysqli_query($conn, $query);

foreach($query_run as $row){
  ?>


<img class="mx-auto d-block" src="../pictures/profile/<?php echo $row['User_imagepath']?>" alt="image.jpg" height="300px;" width="300px;" style="object-fit: cover;"/>

         
        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['USER_ID'] ?>">
                            
                            <div class="form-group">
                                <label class="form-label" for="customFile">Profile Picture</label>
                                <input type="file" class="form-control" id="file_upload"  name="file_upload" />
                            </div>

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['USER_EMAIL'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" name="Fname" value="<?php echo $row['USER_FNAME'] ?>" class="form-control"
                                    placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" name="Lname" value="<?php echo $row['USER_LNAME'] ?>" class="form-control"
                                    placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contact" value="0<?php echo $row['USER_CONTACT'] ?>" class="form-control"
                                    placeholder="Enter Number">
                            </div>
                            
                            
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                        </form>
<?php
    }
  }
?>


        </div>
    </div>
</div>

</div>









<?php
include('includes/scripts.php');
include('includes/footer.php');
?>  