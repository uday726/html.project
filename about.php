<?php 
require("config.php");

// query...
$sql = "SELECT * FROM pages WHERE page_name='aboutus'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();




?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- lets add two style files-->
        <link href="css/normalize.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

      <style>
        #menu{
          padding-top: 20px;
        }
        #menu li{
   display: inline;
   margin: 10px;
   padding: 10px;
 }
 h2,h1 {
   font-family: 'Teko', sans-serif;
 }
 #menu a{
   font-size: 18px;
  
 }
 #main{
    background-repeat: no-repeat;
    background-size: cover;
 }
 #aman{
 
    width: 290px;
    padding-left: 50px;
    margin-left: 18%;
 }
 #uday{

    width: 290px;
    padding-left: 50px;
    margin-left: 18%;
 }
 #amann{
  padding-left: 40px;
 }
 #udayy{
  padding-left: 40px;
 }
 


  #our{
    padding-top: 78px;
  }     
  #social{
    padding-top: 78px;
    background-color: black;
  }
  #add{
    padding-top: 78px;
    padding-right: 78px;
    font-size: small;
  }
  #iii{
    background-color: black;
  }  
  .row.home-boxes a {
    font-size: 32px;
    color: white;
}
img{
  min-width: 100%;
}
h2{
  margin: 2%;
    background: linear-gradient(4deg, #ffcb28, #705959);
    padding: 22px 0px;
    border-radius: 12px;
}
p{
  line-height:22px;
  font-size:17px;
}
.table {
  display:table;
}
.tr {
  display:table-row;
}
.td {
  display:table-cell;
  padding-bottom:18px;
}
.td {

  display: inline-block;
    font-weight: 200;
    width: 69%;
}
.td-caption {
  font-weight: bold;
    padding-right: 12px;
    font-weight: 800;
    padding-right: 12px;
    width: 20%;
    vertical-align: top;
}
.td-caption:before {
  content: "";
    width: 10px;
    height: 10px;
    background: #b94eb8;
    display: inline-block;
    /* border-radius: 50%; */
    margin-right: 13px;
}

    </style>
</head>
<body>
    <!-- outer container...-->

<div style="
background: black;
color: white;
padding-bottom: 21px;">

<header>


  <div class="row top-header">

    <div class="col right">

        <h1 style="text-align: center; margin: 0px; padding: 0px;">HOME DECOR</h1>
  
    </div>

  </div>

  <div class="row">

    <div class="col-2" style="width: 5%;">
         <img id="logo" src="images/logo.png" alt="">
    </div>

    <div class="col-2 right" style="width: 95%;">

        <ul id="menu" style=>
          <li><a style="color: white;" href="index.php">Home</a></li>
          <li><a style="color: white;" href="about.php">About</a></li>
          <li><a style="color: white;" href="portfolio.php">Portfolio</a></li>
          <li><a style="color: white;" href="services.html">Services</a></li>
          <li><a style="color: white;" href="contact.php">Contact Us</a></li>
        </ul>
    </div>
  </div>
    </div>
</header>
<div id="main">
<div class="row" >

      <div class="col " style="text-align: center;
    box-shadow: 2px 2px 23px #a5baa5;
    background: black;
    border-radius: 8px;
    opacity: 0.8;
    padding-top: 32px;
    font-weight: 600;
    margin-bottom: 5%;
    color: white;">
        <h1 style="text-align: center;margin: 0px;padding-top: 160px;">ABOUT US</h1>

            <?php echo $row['page_text']; ?>
      </div>   
</div>

<div class="row">
  <div class="col">
        <span><h2 style="text-align: center; font-size: 38px;">Meet OUR DEVELOPERSS</h2></span>
  </div>
        
    </div>
    <div class="row" style="box-shadow: 2px 2px 23px;
    padding-top: 63px;
    padding-bottom: 63px;">
<div class="col-2" id="aman">
                 <img style="border-radius:12px;" src="images/creator.jpg" alt="">
      </div>
        <div class="col-2" id="amann" style="box-shadow: 2px 2px 40px #181e18;
        background: white;
        border-radius: 8px;
        opacity: 0.8;
        margin-left: 12px;
        padding-top: 32px;
        font-weight: 600;">
             <div class="table">
                      <div class="tr">
                        <div class="td td-caption">NAME:</div>
                        <div class="td">UDAY ARORA</div>

                      </div>
                      <div class="tr">
                        <div class="td td-caption">QUALIFICATION:</div>
                        <div class="td">CURRENTLY PERSUING DIPLOMA IN COMPUTER ENGG FROM NILOKHERI POLYTECHNIC</div>

                      </div>
                      <div class="tr">
                        <div class="td td-caption">AGE:</div>
                        <div class="td">17  YEARS OLD</div>

                      </div>

                </div>
        </div>
      </div> 

      <div class="row"  style="box-shadow: 2px 2px 23px;
    padding-top: 63px;
    padding-bottom: 63px;margin-bottom: 2%;" >
        <div class="col-2" id="uday" >
                         <img style="border-radius:12px;" src="images/WhatsApp Image 2023-09-21 at 18.14.21.jpg" alt="">
              </div>
                <div class="col-2" id="udayy" style="box-shadow: 2px 2px 40px #181e18;
                background: white;
                border-radius: 8px;
                opacity: 0.8;
                margin-left: 12px;
                padding-top: 32px;
                font-weight: 600;">
                    <div class="table">
                      <div class="tr">
                        <div class="td td-caption">NAME:</div>
                        <div class="td">Aman Bansal</div>

                      </div>
                      <div class="tr">
                        <div class="td td-caption">QUALIFICATION:</div>
                        <div class="td">CURRENTLY PERSUING DIPLOMA IN COMPUTER ENGG FROM Damla POLYTECHNIC</div>

                      </div>
                      <div class="tr">
                        <div class="td td-caption">AGE:</div>
                        <div class="td">20 YEARS OLD</div>

                      </div>

                </div>
              </div> 
        </div>
</div>
      
<div class="row" id="iii">
  <div class="col-4">
   <img id="foot" src="images/logo.png" alt="">
   
  </div>

  <div class="col-4" id="our">
       <h2 style="color: white;">OUR COMPANY</h2>

       <ul style="margin-top: 10px;">
         <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="index.php">HOME</a></li>
         <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="about.php">ABOUT US</a></li>
         <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="services.html">SERVICES</a></li>
         <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="portfolio.php">PORTFOLIO</a></li>
         <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="contact.php">CONTACT US</a></li>
       </ul>
  </div>

  <div class="col-4" id="social">
     <h2 style="color: white; background-color: black;">SOCIAL HANDELS</h2>

     <ul id="black" style="margin-top: 10px;">
       <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="https://instagram.com/_udayaroraa_?igshid=MzMyNGUyNmU2YQ==">INSTAGRAM</a></li>
       <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="https://www.facebook.com/uday.arora.1297">FACEBOOK</a></li>
       <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="https://x.com/UdayAro36686908?t=kqRFwoL2AkxgUE6sg68Nkg&s=09">TWITTER </a></li>
     </ul>

  </div>
 
  <div class="col-4" id="add">
     <h2 style="background-color: black; color: white; margin-bottom: 2%;" >ADDRESS INFO</h2>
     <li style="margin-bottom: 21px; background-color: black; color: white;">BUILDING NO 123,STREET 12</li>
     <li style="margin-bottom: 21px; background-color: black; color: white;">MODEL TOWN,PANIPAT 132100</li>
     <li style="margin-bottom: 21px; background-color: black; color: white;">1023-123-456-78</li>
     <li style="margin-bottom: 21px;background-color: black; color: white;">udayarora133@gmail.com</li>
      </div>
  
</div>
<h2 style="color: white;background-color: black; text-align: center;">Have Solutions for All Your Space Related Issues!</h2> 
</body>
    </head>
</html>
