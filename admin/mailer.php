<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = 'harzhedzmig@gmail.com';

?>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>  