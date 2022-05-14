<?php session_start();?>
<?php
include("admin.php");
?>
<?php
$db_host = 'localhost';
$db_user = 'id18835340_root';
$db_pwd = '8}FA0=cIDlXs4XNw';

$database = 'id18835340_online_art_gallery_database_final';
$table = 'user';
$conn = mysqli_connect($db_host, $db_user, $db_pwd,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php

if(isset($_POST['submit'])) {
    $id = $_POST['deleteuser'];
    $delete ="DELETE FROM user WHERE user_id = '$id' ";
if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

} ?>
<html>
<head>
    <title>MySQL Table Viewer</title>
    <style type="text/css">
        *{
  font-family: "source sans pro", sans-serif;
}
        body{
        background-image: url(pictures/birmingham-museums-trust-HEEvYhNzpEo-unsplash.jpg);
        background-size: cover;
        }

        .head-table {
          font-size: 40px;
          color: rgb( 45, 112, 213 );
            top: 80px;
            left: 45px;
          }
        .head-user{
            font-variant: small-caps;
            font-size: 50px;
            color: rgb( 00, 00, 00 );
            top: 63px;
            left: 170px;
            z-index: 19;
        }
        .hr{    
            border: 1px solid #2d70d5;
            top: 145px;
            margin-left: -26px;
            width: 1150px;
            left: 73px;
        }
        .deletebar{
            border-radius: 8px;
            border: 1px solid none;
            background-color: #fff;      
            top: 6px;
            width:150px;
            height: 30px;
        }
        .delbutton{
          text-decoration: none;
            cursor: pointer;
            border-radius: 8px;
            padding:  5px 8px 5px 8px;
           color: white;
           font-size: 13px;
           background-color: #fd3e50;
           position: relative;
           top:-9px;
           left:58px;

        }
        .editbtn{
            border-radius: 8px;
            padding: 5px 8px 5px 8px;
            background-color: #234;
             cursor: pointer;
            text-decoration:none;
            color:white;
           color:white;
           font-size: 13px;
           position: relative;
           top:10px;
           left:0px;
          width: 60px;
           height: 25px;
           bottom: 3px;
        }

         .rowdesign:nth-child(odd){
            background-color: #f2f2f2;
        }
        .table-head{
            font-weight: bold;
        }

         .table-head .table-data{
                padding:10px;
                text-align: center;
                border-bottom: 1px solid none;
    
        }
        .table-head:hover{
            background-color: #f5f5f5;
        }


        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");

.heading {
    font-family: Arial, Helvetica, sans-serif;
text-align: center;
font-size: 50px;
color: #fff;
margin-bottom: 3rem;
text-transform: uppercase;
}

.heading span {
text-transform: uppercase;
color: black;
}

@media (max-width: 768px) {
.heading {
font-size: 12vw;
}
}


.r-list{
--uirListPaddingLeft: var(--rListPaddingLeft, 0);
--uirListMarginTop: var(--rListMarginTop, 0);
--uirListMarginBottom: var(--rListMarginBottom, 0);
--uirListListStyle: var(--rListListStyle, none);

padding-left: var(--uirListPaddingLeft) !important;
margin-top: var(--uirListMarginTop) !important;
margin-bottom: var(--uirListMarginBottom) !important;
list-style: var(--uirListListStyle) !important;
}

.r-link{
--uirLinkDisplay: var(--rLinkDisplay, inline-flex);
--uirLinkTextColor: var(--rLinkTextColor);
--uirLinkTextDecoration: var(--rLinkTextDecoration, none);
display: var(--uirLinkDisplay) !important;
color: var(--uirLinkTextColor) !important;
text-decoration: var(--uirLinkTextDecoration) !important;
}

/*
=====
COMPONENT
=====
*/

.breadcrumb{
margin-bottom:0;
border-radius: 0rem;
background-color:#e9ecef;
--uiBreadcrumbDividerColor: var(--breadcrumbDividerColor, inherit);
--uiBreadcrumbDividerSize: var(--breadcrumbDividerSize, 1rem);
--uiBreadcrumbIndent:  var(--breadcrumbIndent, .75rem);
}

.breadcrumb__list{
display: flex;
flex-wrap: wrap;
gap: var(--uiBreadcrumbIndent);
}

.breadcrumb__group{
display: inline-flex;
align-items: center;
}

.breadcrumb__divider{
margin-left: var(--uiBreadcrumbIndent);
font-size: var(--uiBreadcrumbDividerSize);
}
    </style>
</head>
<body>
<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete This Account?  (WARNING ALL THE DATA IN THIS ACCOUNT WILL BE DELETED INCLUDING ORDERS, ARTWORKS, RATINGS OF THIS USER AND COMMENTS)'))
    {
        return true;
    }
    else
        return false;
};
</script>

<div class="page__section" >
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="admin_artworks.php" class="breadcrumb__point r-link">Admin</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="" class="breadcrumb__point r-link">Users</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>

  

  <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span style="color: white;">Users</span></h3>

  <div style="margin-left: 55px;margin-bottom:200px">

    <form action = "admin_user.php" method="POST">

        <?php

            // sending query
            $result = mysqli_query($conn,"SELECT USER_ID, USERNAME, PASSWORD, USER_FNAME, USER_LNAME, USER_GENDER, USER_BDAY, USER_CONTACT, USER_TYPE FROM user WHERE user_type = 'Artist' OR user_type = 'Customer'");
            if (!$result) {
                die("Query to show fields from table failed");
            }

            if(mysqli_num_rows($result) <=0){
                        echo '<h1 align="Center">No User Accounts Created</h1>';
            }
            else{
                    $fields_num = mysqli_num_fields($result);



                    echo '<table style=" top:180px;left:70px;border-collapse: collapse; width: 50px;"><tr class="table-head" >';
                    // printing table headers
                        for($i=0; $i<$fields_num; $i++){
                            $field = mysqli_fetch_field($result);
                            echo '<td class="table-data" style="background-color:#fd3e50; color:white;">'.$field->name.'</td>';
                        }
                         echo '<td class="table-data" style="background-color:#fd3e50; color:white;">&nbsp;&nbsp;&nbsp;&nbsp;ACTION&nbsp;&nbsp;&nbsp;&nbsp;</td>';
                    echo "</tr>\n";

                    // printing table rows
                        while($row = mysqli_fetch_array($result)){
                            echo '<tr class="rowdesign table-head">';

                            echo '<td class="table-data">'.$row[0].'</td>
                                <td class="table-data">'.$row[1].'</td>
                                <td class="table-data">'.$row[2].'</td>
                                <td class="table-data">'.$row[3].'</td>
                                <td class="table-data">'.$row[4].'</td>
                                <td class="table-data">'.$row[5].'</td>
                                <td class="table-data">'.$row[6].'</td>
                                <td class="table-data">0'.$row[7].'</td>
                                <td class="table-data">'.$row[8].'</td>';
                            echo '<td><a class="editbtn" href =edituser.php?id='.$row[0].'> Modify</a>  <a class="delbutton" href="admin_deleteuser.php?id='.$row[0].'" onclick="return(YNconfirm());">Delete</a></td>';
                            echo "</tr>\n";

                    }
            }

            mysqli_free_result($result);

        ?>


      </form></div>

<!--</body>-->
</html>