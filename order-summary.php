<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipping</title>

    <?php
include("includes/connection.php");

    include("includes/head.php");
?>

    <style type="text/css">

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

/*
=====
SKIN
=====
*/



.breadcrumb__divider{
  color: var(--uiBreadcrumbDividerColor);
}

span.breadcrumb__point{
  color: var(--uiBreadcrumbTextColorActive);
}

/*
=====
SETTINGS
=====
*/


.breadcrumb_type2{
  --breadcrumbDividerSize: 20px;
}

.breadcrumb_type3{
  --breadcrumbDividerSize: 18px;
}

.breadcrumb_type4{
  --breadcrumbDividerSize: 14px;
}

.breadcrumb_type5{
  --breadcrumbDividerSize: 20px;
}

.breadcrumb_type6{
  --breadcrumbDividerSize: 14px;
}

*{
    text-transform: capitalize;
}
        .head-order {
         font-size: 30px;
          color: rgb( 45, 112, 213 );

          z-index: 19;
          }

        .head-summary{
         font-size: 30px;
          color: rgb( 00, 00, 00 );
           left:155px;

          z-index: 19;
        }

        .hr{
            position: relative;
            border: 1px solid #2d70d5;
            width: 1090px;
        }
        .fsize-special{
            font-size: 20px;
        }

        .hr2{
            position: relative;
            border: 1px solid;
            width: 1090px;
            
        }

         .image{
          box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
          text-align:center;
          height: 270px;
          width: 228px;
        }

         .item-title{
          font-size: 40px;
          font-weight: bold;
          color: #2d70d5;
          position: relative;
          text-align:center;
          z-index: 3;
        }

        .delivery{

          font-size: 16px;
          color: #333333;
          text-align:center;
          z-index: 3;
        }

        .qty{
          font-size: 16px;
          color: #333333;
          text-align:center;
          z-index: 3;
        }

        .price{
          font-size: 16px;
          color: #333333;
          text-align:center;
          z-index: 3;
        }

        .special{
          font-size: 16px;
          color: #333333;

          z-index: 3;
        }
        .special2{
          font-size: 16px;
          color: #333333;

          z-index: 3;
        }

        .total{
          font-size: 16px;
          font-weight: bold;
          color: #333333;
          
          top: 680px;
          z-index: 3;
        }

        .inputbar{

           font-weight: bold;
           border: 1px solid;
           color: white;
           font-size: 25px;
           background-color: #43b353;

           top: 735px;
           
           width: 200px;
           height: 50px;
        }
    </style>
</head>
<body>

<div class="page__section" ">
    <nav  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a href="artworks.php" class="breadcrumb__point r-link">Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artwork Info</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Shipping</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Order Summary</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </nav>
  </div>

<?php
$name = $_POST['name'];
$province = $_POST['province'];
$brgy = $_POST['brgy'];
$street = $_POST['street'];
$zipcode = $_POST['zipcode'];
$contact = $_POST['contact'];
$house_num = $_POST['house_num'];
$area = $_POST['area'];
$municipal = $_POST['municipal'];





$_SESSION['municipal'] = $_POST['municipal'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['province'] = $_POST['province'];
$_SESSION['brgy'] = $_POST['brgy'];
$_SESSION['street'] = $_POST['street'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['contact'] = $_POST['contact'];
$_SESSION['house_num']=$_POST['house_num'];
$_SESSION['area']=$_POST['area'];

?>


    <div id="content">

        <form  class="" action = "shipping_process(planb).php" method="POST" >
               <p >
                <h2 class="head-order" style="text-align:center">Order Summary</h2>
              </p>

              <!--Values from database-->
              <p class="fsize-special" style="text-align: center;">
                  <strong style="font-size: 50px; color:#222;"><?php echo $name; ?> </strong> <br>

                  <?php echo $area.', Philippines<br>'.$house_num. ' '.$street.', '.$brgy.' '.$province; ?>

                  <?php echo $contact;  ?>
              </p>


              <?php

                    $art_id = $_SESSION['art_id'];
                    $query_category1="SELECT ART_IMAGEPATH,art_category FROM art_work WHERE art_id = '$art_id'";
                    $result_category1 = mysqli_query($conn,$query_category1);

                    while($row=mysqli_fetch_array($result_category1)){

                        echo '<img class="image" style="margin-left:auto;margin-right:auto;display: block;height:400px;width:400px;object-fit: cover;"  src="pictures/arts/'.$row['ART_IMAGEPATH'].'" ><br />';
                    }

                    $query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_width,art_work.art_height,art_work.art_media,art_work.art_category,user.user_contact,art_work.art_thickness,art_work.art_stock
                                     FROM art_work,user
                                    where art_work.user_id = user.user_id AND art_id = '$art_id'";
                    $result_category = mysqli_query($conn,$query_category);

                    while($row=mysqli_fetch_array($result_category)){
                        echo '<p class="item-title" >'.$row['art_title'].'</p>';
                        $price = $row['art_price'];
                        if($row['art_category'] == 'Sculpture'){
                          $art_stock = $_POST['items'];
                          $_SESSION['items'] = $art_stock;
                          if($row['art_stock'] < $art_stock ){
                            echo "<script type=\"text/javascript\">window.alert('The number of items you ordered is greater than the available artwork!!');window.location.href = 'info_art.php?id=$art_id';</script>";

                          }
                          else{
                          $total_price = $price * $art_stock;
                          $_SESSION['total_price'] = $total_price;
                           echo ' <p class="qty">Quantity - '.$art_stock.' </p>';
                         }
                        }
                        else{
                          echo ' <p class="qty">Quantity - 1 </p>';
                          $total_price = $price;
                           $_SESSION['total_price'] = $total_price;
                        }
                    }
         ?>



         <p class="delivery">
          <?php
            $today = getdate();
            $day = $today['weekday'];
            $month = $today['mon'];
            $day1 = $today['mday'];
            $year =$today['year'];
            $month1 = $today['month'];
            echo 'Delivery Date:  ';
            echo  $month.'-'.$day1.'-'.$year;
            $aa = $year.'-'.$month.'-'.$day1;
            $_SESSION['ordered_date'] = $aa;
            ?>  to <?php
             $today="$day1";
             $today1 = getdate();
            $day = $today1['weekday'];
            $month = $today1['mon'];
            $day1 = $today1['mday'];
            $year =$today1['year'];
            if($area == 'luzon'){
             $day1=$day1+3;
             if($day1 > 31){
              $month++;
              $dayyy =$day1-31 ;
              $day1 = $dayyy;
            }
           }
           else if($area == 'visayas'){
            $day1=$day1+7;
            if($day1 > 31){
              $month++;
              $dayyy =$day1-31 ;
              $day1 = $dayyy;
            }
           }
           else if($area =='mindanao'){
            $month++;
           }
             echo $month.'-'.$day1.'-'.$year;
              $bb= $year.'-'.$month.'-'.$day1;
             $_SESSION['shipping_date'] = $bb;
             $price = number_format($price);
             $total_price = number_format($total_price);
            ?></p>
           
           <p class="price">Php <?php echo $price;?></p>

           <p class="special" align="center">Subtotal Php <?php echo $total_price;?>.00<br>
           <p class="special2" align="center">Shipping Fee: Free<br><br></p>


           <p class="total" style="text-align:center">Total(Tax included) Php <?php echo $total_price;?>.00</p>



              <input class = "inputbar" style="margin-left:auto;margin-right:auto;display: block;margin-bottom:30px;background-color:#fd3e50" type="submit" name="submit" value="Order">


  </form>
    </div>
<!--</body>-->
</html>