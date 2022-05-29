<?php include("includes/connection.php");

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

include("functions.php");
$id = $_GET['delete'];
$pic = $_GET['pic'];
    $delete ="DELETE FROM art_work WHERE art_id = '$id' ";
if (mysqli_query($conn, $delete)) {
    $_SESSION['success'] = "Artwork Deleted";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //echo "Record updated successfully";
    unlink('pictures/arts/'.$pic.'');
} else {
    $_SESSION['status'] = "Artwork Not Deleted";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "Error updating record: " . mysqli_error($conn);
}


//redirect_to("myartworks_available.php");
?>