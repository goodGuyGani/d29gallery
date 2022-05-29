<?php session_start();
include("includes/connection.php");
include("functions.php");

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

$user_id = $_SESSION['USER_ID'];
 $sql = "SELECT user_type  FROM user WHERE user_id ='$user_id' ";
            $result_set = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result_set)){

if($row['user_type'] == "Customer" || $row['user_type'] == 'Artist') {

$transaction_id = $_GET['id'];
 $sql1 ="SELECT art_work.art_stock FROM buy_transaction,art_work WHERE buy_transaction.art_id = art_work.art_id AND transaction_id = '$transaction_id' ";
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1)){
    $art_stock = $row1['art_stock'];
 }
    $order_id = $_GET['id'];
    $user_id = $_GET['user'];

    $delete ="UPDATE orders SET ORDER_STATUS = 'Cancelled' WHERE ORDER_ID = '$order_id' ";
if (mysqli_query($conn, $delete)) {
    $query2 = "UPDATE art_work SET ART_STATE=NULL, USER_ID2=NULL, ART_STATUS = 'Available', art_stock = art_stock + 1 WHERE USER_ID2='$user_id' AND ART_STATE='Sent'";
    $query_run2 = mysqli_query($conn, $query2);
        
    //echo "Record updated successfully";
    $_SESSION['success'] = "Order Cancelled Successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    $_SESSION['success'] = "Order Not Cancelled";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "Error updating record: " . mysqli_error($conn);
}


$art_id = $_GET['art_id'];
$ordered_no = $_GET['item_num'];

$ordered_no =$ordered_no +$art_stock;
$sql = "UPDATE art_work SET art_status ='Available',art_stock = '$ordered_no' WHERE art_id = '$art_id'";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    //redirect_to("orders.php");
    ?>
    <script type="text/javascript">
    window.location.href = '/orders.php';
    </script>
    <?php

} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}


else{

    $transaction_id = $_GET['id'];
 $sql1 ="SELECT art_work.art_stock FROM buy_transaction,art_work WHERE buy_transaction.art_id = art_work.art_id AND transaction_id = '$transaction_id' ";
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1)){
    $art_stock = $row1['art_stock'];
 }


    $delete ="DELETE FROM buy_transaction WHERE transaction_id = '$transaction_id' ";
if (mysqli_query($conn, $delete)) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


$art_id = $_GET['art_id'];
$ordered_no = $_GET['item_num'];

$ordered_no =$ordered_no +$art_stock;
$sql = "UPDATE art_work SET art_status ='Available',art_stock = '$ordered_no' WHERE art_id = '$art_id'";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    redirect_to("admin_orders.php");

} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);


}
}
?>