<?php include("includes/connection.php");

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

include("functions.php");
$id = $_GET['delete'];
$pic = $_GET['pic'];
    $delete ="DELETE FROM art_work WHERE art_id = '$id' ";
if (mysqli_query($conn, $delete)) {
    //echo "Record updated successfully";
    unlink('pictures/arts/'.$pic.'');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
    <script type="text/javascript">
    window.history.back();
    </script>
<?php

//redirect_to("myartworks_available.php");
?>