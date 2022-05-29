<?php 
session_start();
include('includes/connection.php');
include("../functions.php");




if(isset($_POST['delete_rating']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM rating WHERE RATING_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Rating is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Rating is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }    
}



if(isset($_POST['delete_comment']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM comment WHERE COMMENT_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Comment is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Comment is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }    
}


if(isset($_POST['delete_cat']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM category WHERE CAT_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Category is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Category is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }    
}




if(isset($_POST['add_cat'])){





  $cat_name = $_POST['cat_name'];



    $query = "INSERT INTO category (CAT_NAME) VALUES ('$cat_name')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Category Added";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Category Not Added";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

  

}










if(isset($_POST['registerbtn'])){





  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];
  $USER_FNAME= $_POST['Fname'];
  $USER_LNAME= $_POST['Lname'];
  $USER_GENDER= $_POST['gender'];
  $USER_BDAY= $_POST['bday'];
  $USER_CONTACT= $_POST['contact'];
  $image = $_FILES["file_upload"]['name'];
  $user_type = $_POST['type'];

  if($password === $cpassword){
    $query = "INSERT INTO user (username, USER_EMAIL, password, USER_TYPE, USER_FNAME, USER_LNAME, USER_GENDER, USER_BDAY, USER_CONTACT, USER_IMAGEPATH) VALUES ('$username', '$email', '$password', '$user_type', '$USER_FNAME', '$USER_LNAME', '$USER_GENDER', '$USER_BDAY', '$USER_CONTACT', '$image')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
    $_SESSION['success'] = "Admin Profile Added";
    header('Location: register.php');
  }
  else{
    $_SESSION['status'] = "Admin Profile NOT Added";
    header('Location: register.php');
    }
  }
  else{
    $_SESSION['status'] = "Password and Confirm Password Does Not Match";
    header('Location: register.php');
  }

  

}


if(isset($_POST['registerbtn2'])){





  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];
  $USER_FNAME= $_POST['Fname'];
  $USER_LNAME= $_POST['Lname'];
  $USER_GENDER= $_POST['gender'];
  $USER_BDAY= $_POST['bday'];
  $USER_CONTACT= $_POST['contact'];
  $image = $_FILES["file_upload"]['name'];
  $user_type = $_POST['type'];

  if($password === $cpassword){
    $query = "INSERT INTO user (username, USER_EMAIL, password, USER_TYPE, USER_FNAME, USER_LNAME, USER_GENDER, USER_BDAY, USER_CONTACT, USER_IMAGEPATH) VALUES ('$username', '$email', '$password', '$user_type', '$USER_FNAME', '$USER_LNAME', '$USER_GENDER', '$USER_BDAY', '$USER_CONTACT', '$image')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
    $_SESSION['success'] = "Artist Profile Added";
    header('Location: register2.php');
  }
  else{
    $_SESSION['status'] = "Artist Profile NOT Added";
    header('Location: register2.php');
    }
  }
  else{
    $_SESSION['status'] = "Password and Confirm Password Does Not Match";
    header('Location: register2.php');
  }

  

}





if(isset($_POST['registerbtn3'])){





  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];
  $USER_FNAME= $_POST['Fname'];
  $USER_LNAME= $_POST['Lname'];
  $USER_GENDER= $_POST['gender'];
  $USER_BDAY= $_POST['bday'];
  $USER_CONTACT= $_POST['contact'];
  $image = $_FILES["file_upload"]['name'];
  $user_type = $_POST['type'];

  if($password === $cpassword){
    $query = "INSERT INTO user (username, USER_EMAIL, password, USER_TYPE, USER_FNAME, USER_LNAME, USER_GENDER, USER_BDAY, USER_CONTACT, USER_IMAGEPATH) VALUES ('$username', '$email', '$password', '$user_type', '$USER_FNAME', '$USER_LNAME', '$USER_GENDER', '$USER_BDAY', '$USER_CONTACT', '$image')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
    $_SESSION['success'] = "Customer Profile Added";
    header('Location: register3.php');
  }
  else{
    $_SESSION['status'] = "Customer Profile NOT Added";
    header('Location: register3.php');
    }
  }
  else{
    $_SESSION['status'] = "Password and Confirm Password Does Not Match";
    header('Location: register3.php');
  }

  

}





if(isset($_POST['updatebtn']))
{
    $image = $_FILES["file_upload"]['name'];
    
    if($image == ''){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register.php'); 
        }
    }
    else{
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact', User_imagepath='$image' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register.php'); 
        }
    }
}



if(isset($_POST['updatebtn2']))
{
    $image = $_FILES["file_upload"]['name'];
    
    if($image == ''){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register2.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register2.php'); 
        }
    }
    else{
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact', User_imagepath='$image' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register2.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register2.php'); 
        }
    }
}




if(isset($_POST['updatebtn3']))
{
    $image = $_FILES["file_upload"]['name'];
    
    if($image == ''){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register3.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register3.php'); 
        }
    }
    else{
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact', User_imagepath='$image' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register3.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register3.php'); 
        }
    }
}



if(isset($_POST['updatebtnsearch']))
{
    $image = $_FILES["file_upload"]['name'];
    
    if($image == ''){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: registerall.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: registerall.php'); 
        }
    }
    else{
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact', User_imagepath='$image' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: registerall.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: registerall.php'); 
        }
    }
}





if(isset($_POST['updatebtnall']))
{
    $image = $_FILES["file_upload"]['name'];
    
    if($image == ''){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: registerall.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: registerall.php'); 
        }
    }
    else{
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $contact = $_POST['contact'];
        

        $query = "UPDATE user SET username='$username', USER_EMAIL='$email', password='$password', USER_FNAME='$fname', USER_LNAME='$lname', USER_CONTACT='$contact', User_imagepath='$image' WHERE USER_ID = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["file_upload"]["tmp_name"], "../pictures/profile/".$_FILES["file_upload"]["name"]);
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: registerall.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: registerall.php'); 
        }
    }
}




if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    
    
    if($id == 5){
        $_SESSION['status'] = "You Can't Delete The Head Admin";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
    }
    else{

    $query = "DELETE FROM user WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
    }
}


if(isset($_POST['delete_btn_search']))
{
    $id = $_POST['delete_id'];
    
    if($id == 5){
        $_SESSION['status'] = "You Can't Delete The Head Admin";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{

    $query = "DELETE FROM user WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } 
    }
}

if(isset($_POST['delete_btn2a']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register2.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register2.php'); 
    }    
}


if(isset($_POST['delete_btn3a']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register3.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register3.php'); 
    }    
}




if(isset($_POST['delete_btn2']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM art_work WHERE ART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_artworks1.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_artworks1.php'); 
    }    
}


if(isset($_POST['delete_drawing']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM art_work WHERE ART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_drawing.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_drawing.php'); 
    }    
}

if(isset($_POST['delete_digitalart']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM art_work WHERE ART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_digitalart.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_digitalart.php'); 
    }    
}



if(isset($_POST['delete_painting']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM art_work WHERE ART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_painting.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_painting.php'); 
    }    
}

if(isset($_POST['delete_photography']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM art_work WHERE ART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_photography.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_photography.php'); 
    }    
}




if(isset($_POST['order_delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM buy_transaction WHERE TRANSACTION_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin_orders1.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: admin_orders1.php'); 
    }    
}



if(isset($_POST['delete_btnall']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: registerall.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: registerall.php'); 
    }    
}




if(isset($_POST['delete_request']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM commission_request WHERE COM_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }    
}


if(isset($_POST['delete_message']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM message WHERE MESSAGE_ID='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Message is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Message is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }    
}




?>