<?php
include('includes/header.php'); 
include('includes/connection.php');
include('includes/navbar.php'); 
?>

    <style>
      *{
  font-family: "source sans pro", sans-serif;
}
 .head-available {
         font-size: 30px;
          
          color: rgb( 45, 112, 213 );

          left: 70px;
          top: 100;
          z-index: 19;
          }

        .head-artworks{
         font-size: 30px;
         
          color: rgb( 00, 00, 00 );

           left:200px;
          top: 40px;
          z-index: 19;
        }

        .hr{
            position:relative;
            border: 1px solid #2d70d5;
            top:-17px;
            width: 1090px;
            left: -223px;
        }

        .head-sold {
         font-size: 30px;
          
          color: rgb( 45, 112, 213 );

          left: -290px;
          top: 550;
          z-index: 1;
          }
         .head-artworks2{
         font-size: 30px;
         
          color: rgb( 00, 00, 00 );

           left:-220px;
          top: 490px;
          z-index: 1;
        }

         .hr2{
            position:relative;
            border: 1px solid #2d70d5;
            top:-385px;
            width: 1090px;
            left: 200px;
        }

 .photo {
            position: relative ;
            width: 300px;
           height : 250px;
        }

    .desc-title{
        color:#2d70d5;
        font-variant: small-caps;
        
        font-size: 40px;
        top: 0px;
        left: 5px;
        text-decoration: none;
    }
    .desc-content{
        font-size: 17px;
        font-family:  "Yu Gothic UI Light";
        top: -7px;

    }
    .desc-content2{
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: -30px;
    }

     .pic-table{
            border: 3px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            overflow: auto;
            margin: 0px 50px 50px 0px;

            top: 0px;
            z-index: 80;
        }

        .space{

          left:-100px;
          
          margin-right: 100px;

        }

         .desc-content3{

            font-size: 16px;
            font-family:  "Yu Gothic UI Light";
            top: -40px;
        }

        .pic-table2{
            border: 3px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            margin: 0px 50px 50px 0px;
        }

        .space2{

          left:100px;
          top: 120px;
          margin-right: 100px;
        }

        .addbtn{
            margin-left: auto;
            margin-right: auto;
            display: block;
            cursor: pointer;
            text-decoration:none;
            padding: 10px;
            border-radius: 12px;
            font-family: Georgia, 'Times New Roman', Times, serif;
           font-weight: bold;
           border: 1px solid;
           color: white;
           font-size: 20px;
           background-color: #43b353;
           width: 220px;
           height: 50px;
           z-index: 100;
        }

         .modifybtn{
            cursor: pointer;
            text-decoration:none;
            color:white;
            padding: 10px;
            border-radius: 12px;
           
           font-weight: bold;
           border: 1px solid;
           color: white;
           font-size: 22px;
           background-color: #234;
           width: 140px;
           height: 30px;
           z-index: 100;
        }

        .deletebtn{
          border-radius: 8px;
           
           font-weight: bold;
           color: white;
           font-size: 25px;
           background-color: #234;           
           padding: 10px;
           left: 10px;
           width: 100px;
           height: 35px;
           text-decoration: none;
        }

        .image-gallery {
  width: 100%;
  max-width: 1350px;
  margin: 0 auto;
  padding: 50px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-auto-rows: 350px;
  grid-auto-flow: dense;
  grid-gap: 20px;
}

.image-gallery .image-box {
  position: relative;
  background-color: #d7d7d8;
  overflow: hidden;
}

.image-gallery .image-box:nth-child(7n + 1) {
  grid-column: span 1;
  grid-row: span 1;
}

.image-gallery .image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.5s ease;
}

.image-gallery .image-box:hover img {
  transform: scale(1.1);
}

.image-gallery .image-box .overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.5s ease;
  z-index: 1;
}

.image-gallery .image-box:hover .overlay {
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  opacity: 1;
}

.image-gallery .image-box .details {
  text-align: center;
}

.image-gallery .image-box .details .title {
  margin-bottom: 8px;
  font-size: 24px;
  font-weight: 600;
  position: relative;
  top: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box .details .category {
  font-size: 18px;
  font-weight: 400;
  position: relative;
  bottom: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box:hover .details .title {
  top: 0px;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box:hover .details .category {
  bottom: 0;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box .details .title a,
.image-gallery .image-box .details .category a {
  color: #222222;
  text-decoration: none;
}

/* Let's make it responsive */
@media (max-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
  }

  .image-gallery .image-box:nth-child(7n + 1) {
    grid-column: unset;
    grid-row: unset;
  }
}


@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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
  border-radius: 0px;
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
    </style>


<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this artwork?'))
    {
        return true;
    }
    else
        return false;
};
</script>



  <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span>Sold Artworks</span></h3>


  <?php
$limit = 8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;



$query_category1="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_status,buy_transaction.courier_name,buy_transaction.courier_contact,buy_transaction.shipping_province,buy_transaction.shipping_municipal,buy_transaction.shipping_street,buy_transaction.shipping_brgy,buy_transaction.shipping_house_num,art_work.art_category
                         FROM art_work,user,buy_transaction
                        where art_work.user_id = user.user_id AND buy_transaction.art_id = art_work.art_id   AND art_work.art_status = 'Sold' ORDER BY art_work.art_title ASC LIMIT $start, $limit";
                        
            $result1 = $conn->query("SELECT count(ART_ID) AS ART_ID FROM art_work WHERE art_work.art_status = 'Sold'");
            $userCount = $result1->fetch_all(MYSQLI_ASSOC);
            $total = $userCount[0]['ART_ID'];
            $pages = ceil($total / $limit);

            $Previous = $page - 1;
            $Next = $page + 1;
            
            $Previous = ($page == 1) ? 1 : $page - 1;
            $Next = ($page == $pages) ? $pages : $page + 1;
            
            
            $result_category1 = mysqli_query($conn,$query_category1);
            echo '<div class="image-gallery">';
 if(mysqli_num_rows($result_category1) <=0)
        {
            echo '<h1 align="Center" style="margin-top:150px">No Sold Artworks </h1>';
        }
        else{
            while($row1 = mysqli_fetch_array($result_category1)){
                $row1['art_price'] = number_format($row1['art_price']);
                echo '
                <div class="image-box" >
            <img src="../pictures/arts/'.$row1['art_imagepath'].'" alt="img.jpg" />
            <div class="overlay">
              <div class="details">
                <h3 class="title">
                  <a href=../info_art.php?id='.$row1['art_id'].' style="color:crimson;">'.$row1['art_title'].'</a>
                </h3>
                <span class="category">
                  <a href="#" style="color:lightgray">'.$row1['art_category'].'</a><br>
                  <a  style="color:lightgray">Php '.$row1['art_price'].'</a><br>
                  <a  style="color:green">Sold to: '.$row1['courier_name'].'</a><br>
                  <a  style="color:lightgray">Contact no: 0'.$row1['courier_contact'].'</a><br>
                  <a  style="color:lightgray">Address: '.$row1['shipping_house_num'].' '.$row1['shipping_street'].' '.$row1['shipping_brgy'].',<br>'.$row1['shipping_province'].'</a><br>
                  
                </span>
              </div>
            </div>
          </div>';




/*
                echo '

                <div class="space2" >
                            <table  class="pic-table2">
                                <tr>
                                    <td>
                                        <a><img class="photo" src="pictures/arts/'.$row1['art_imagepath'].'" ></a><br>'.

                                        '<a  href=info_art.php?id='.$row1['art_id'].' class="desc-title"> '.$row1['art_title'].' </a>

                                         <p class="desc-content">'.$row1['art_category'].'</p>


                                         <p class="desc-content" style="float: right;">P'.$row1['art_price'].'.00</p> <br>

                                          <p class="desc-content3"><br> Sold to: '.$row1['courier_name'].' </p>

                                          <p class="desc-content3" >Contact no: 0'.$row1['courier_contact'].'<br>'.$row1['shipping_house_num'].' '.$row1['shipping_street'].' '.$row1['shipping_brgy'].','.$row1['shipping_province'].'
                                          </p>

                                    </td>
                                </tr>
                            </table>
                        </div>';
                        */
        }
    }
'</div>';
        ?>
</div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)2.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="admin_artworks(sold)2.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="admin_artworks(sold)2.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


