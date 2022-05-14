<?php
session_start();
 include("includes/connection.php");
 include("admin.php"); ?>

<?php include("includes/connection.php");
if(isset($_POST['submit'])){
$id = $_POST['deleteuser'];
    $delete ="DELETE FROM rating WHERE rating_id = '$id' ";
if (mysqli_query($conn, $delete)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}

?>


<html>
<head>

    <title></title>
    <style type="text/css">
*{
  font-family: "source sans pro", sans-serif;
}

body{
        background-image: url(pictures/tracks.jpg);
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
           top:-1px;
           left:50px;

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
    if (window.confirm('Are you sure you want to delete this rating?'))
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
          <a href="" class="breadcrumb__point r-link">Comments</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>
  

  <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span style="color: black;">Ratings</span></h3>




        <form action ="admin_rating.php" method="POST">

            <?php
                $db_host = 'localhost';
                $db_user = 'root';
                $db_pwd = '';

                $database = 'online_art_gallery_database_final';
                $table = 'user';



                $result1 = mysqli_query($conn,"SELECT * FROM rating");

                if (!$result1) {
                    die("Query to show fields from table failed");
                }

                if(mysqli_num_rows($result1) <=0){
                            echo '<h1 align="Center"><br><br><br><br><br><br><br>No Ratings Available </h1>';
                }
                else{
                        $fields_num1 = mysqli_num_fields($result1);

                         echo '<table style="margin-left:auto;margin-right:auto;margin-bottom:100px;display:block;top:180px;left:70px;border-collapse: collapse; width: 40%;"><tr class="table-head">';
                        // printing table headers

                        for($i=0; $i<$fields_num1; $i++){
                            $field1 = mysqli_fetch_field($result1);
                           echo '<td class="table-data" style="background-color:#fd3e50; color:white;" >'.$field1->name.'</td>';
                        }
                         echo '<td class="table-data" style="background-color:#fd3e50; color:white;">&nbsp;&nbsp;&nbsp;&nbsp;ACTION&nbsp;&nbsp;&nbsp;&nbsp;</td>';
                        echo "</tr>\n";

                        // printing table rows
                        while($row1 = mysqli_fetch_row($result1)){
                              echo '<tr class="rowdesign table-head">';

                            // $row is array... foreach( .. ) puts every element
                            // of $row to $cell variable
                                echo '<td  class="table-data">'.$row1[0].'</td>';
                                echo '<td  class="table-data">'.$row1[1].'</td>';
                                echo '<td  class="table-data">'.$row1[2].'</td>';
                                echo '<td  class="table-data">'.$row1[3].'</td>';

                                 echo '<td> <a  class="delbutton" href="admin_deleterating.php?id='.$row1[0].'"onclick="return(YNconfirm());">Delete</a></td>';
                            echo "</tr>\n";
                        }

                mysqli_free_result($result1);


                }
            ?>
    </form>

</body>
</html>