<?php
session_start(); 
include("includes/head.php"); ?>
<!DOCTYPE HTML>
<HTML>
<title> Art Guide</title>
<style type="text/css">

   .head-artists {
          font-size: 30px;
          
          color: rgb( 45, 112, 213 );
          
          left: 50px;
          top: 80px;
          z-index: 19;
          }

        .head-guide{
          font-size: 30px;
         
          
           left:150px;
          top: 80px;
          z-index: 19;
        }

        .hr{
            position:absolute;
            border: 1px solid #2d70d5;
            top: 135px;
            width: 1140px;
            left: 49px;

        }
          .guide-background{

          background: url(pictures/guidelines_background.jpg) no-repeat fixed;
          background-size: cover;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: inherit;
          width: 100%;
          height: 100%;
          z-index: 1;

        }
        .word2{
            position: relative;
            top: 115px;
            left:80px;
            font-family:"Yu Gothic UI Light";
             font-size:18px;
            color: #f2f2f2;
            margin-right: 200px;
            text-align: justify;
        }
        .word1{
            position: relative;
            top:130px;
            left: 50px;
            color: white;
            font-weight: bold;
            font-family:"Yu Gothic UI Light";
             font-size:22px;
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

@import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
  
}

h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  font-family: 'Sanchez';
  padding: 20px;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  color: darkslategray;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
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
<body class="">

<div class="page__section">
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artist Guide</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
</div>
  </div>




  <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span>Artist Guide</span></h3>

            <h3 class="word1">Selling your art has never been so easy!</h3>
           <p class="word2">
                        1. Register and upload your artwork on <a style="color:#f2f2f2;" href="home.php">Murad Khaal Gallery.</a><br>
                        2. Ship the artwork to the buyer.<br>
                        3. Receive 80% of the selling price.<br>
            </p>

            <h3 class="word1">How do I apply to exhibit my artwork at Murad Khaal Gallery?</h3>
                <p class="word2">Please click the "Sign Up" link at the top right of this page.</p>

            <h3 class="word1">Can artists living outside of the Philippines apply?</h3>
                <p class="word2">No. Our application is only open to artists from Philippines.</p>

            <h3 class="word1">What does the application entail?</h3>
                 <p class="word2">The application is a simple, two-step process that takes about 5 minutes. The first page is for your contact information and artistic background. The second page asks that you upload five sample images of your artwork. Your application will then be reviewed within 2 days.</p>

            <h3 class="word1">Is there an application fee?</h3>
                 <p class="word2">No. Registration is free.</p>

            <h3 class="word1">What kind of artwork do you show?</h3>
                <p class="word2">We exhibit art in every genre, style, size, and media.</p>

            <h3 class="word1">How will you market my art?</h3>
                <p class="word2">We promote our artists' work in a number of ways. We manage a large online advertising campaign and we do a lot of search engine optimization. We have a large email list, and a popular Facebook page.</p>

            <h3 class="word1">What is your commission structure?</h3>
                <p class="word2"> Murad Khaal Gallery Gallery will pay you 80% of the selling price.  Pay for shipping and get your profit!<br><br>

            Example 1:<br>
            You live in Legazpi City.<br>
            A buyer from Camalig, Daraga purchased one of your artworks.<br>
            Selling price: Php. 42,500.<br>
            You keep 80% of this amount: Php. 34,000. This is the amount you will receive from us.<br>
            You pay the shipping costs: Php. 1,000. (based on Fedex rates in February 2014 for a 2kg or 4.5lbs weight artwork).<br>
            Your profit: Php. 33,000.<br><br>


            Example 2:<br>
            You live in Guinobatan City.<br>
            A buyer from Legazpi City purchased one of your artworks.<br>
            Selling price: Php. 75,000.<br>
            You keep 80% of this amount: Php. 60,000. This is the amount you will receive from us.<br>
            You pay the shipping costs: Php. 5,000 (based on Fedex rates in February 2014 for a 2kg or 4.5lbs weight artwork).<br>
            Your profit: Php. 55, 000.</p>


            <h3 class="word1">Who covers the costs of packaging and shipping the artwork to the Buyer’s address?</h3>
                <p class="word2">You (the artist) cover the cost of packaging and shipping the artwork to the Buyer.</p>

            <h3 class="word1" >Where is Murad Khaal Gallery based?</h3>
                <p class="word2">Our main office is located in BUCS, Legazpi city, although we are primarily a virtual gallery.</p>

            <h3 class="word1">If I exhibit my work at Murad Khaal Gallery, may I seek other gallery representation?</h3>
                <p class="word2">Yes.</p>

            <h3 class="word1">How do I know when my artwork is sold? What do I do once it is sold?</h3>
                <p class="word2">Once your art is sold, you will receive an email notifying you of the sale.</p>

            <h3 class="word1">When and how do I get paid for sold artwork?</h3>
                <p class="word2">We pay by Cash on Delivery payment method that transfers 7 day after artwork is delivered to the client.</p>

            <h3 class="word1">Who owns the rights to my artwork once it is sold?</h3>
                <p class="word2">You retain the rights to your art after it is sold.</p>

            <h3 class="word1">Can clients living outside of the United States purchase my art on Murad Khaal Gallery?</h3>
                <p class="word2">No! We don't allow international customers.</p>

            <h3 class="word1">How do I submit more art if I am already exhibiting my work at Murad Khaal Gallery?</h3>
                <p class="word2">You can upload your artwork through your artist profile page using a quality JPEG or PNG file. The image must be in focus, true to the color of the art, and at least 900 pixels wide.</p>

            <br><br><br><br><br><br><br><br><br>

        <!--<?php
        $file = fopen("guidelines.txt","r");
        while(! feof($file))
          {
          echo fgets($file);
          }
          fclose($file);
          ?>-->

 </body>
</HTML>
<?php include("includes/footer.php"); ?>