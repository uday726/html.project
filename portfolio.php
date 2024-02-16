<?php 

require("config.php");

$sql = "SELECT * FROM product";

$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>PORTFOLIO</title>
        <!-- lets add two style files-->
        <link href="css/normalize.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

      <style>
        
        #menu{
          padding-top: 20px;
        }
        #menu li{
   display: inline;
   margin: 10px;
   padding: 10px;
 }
 h2,h1,a {
   font-family: 'Teko', sans-serif;
 }
 #menu a{
   font-size: 18px;
  
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
h2 {
    margin: 2%;
    font-size: 180%;
}
p{
    font-size: 120%;
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
</header>

  <h1 style="text-align: center;margin: 0px;padding-top: 200px;">Portfolio</h1>
  <h2 style="text-align: center;">We Have Solutions for All Your Space Related Issues!</h2>

  <div class="content-area">

  <?php while($row=$result->fetch_assoc()) {  ?>
  <div style="margin-bottom:15%">
    <div class="row">
      <div class="col-3 center">
          <h2 style="padding-top: 6%;"><?php echo $row['product_name']; ?></h2>
          <p style="text-align: justify; padding-left: 9%;padding-right: 9%;">  <?php echo $row['product_description']; ?></p>
      </div>

      <div class="col-3 center" style="height: 230px;">
          <img style="height: 33%; object-fit: cover;" src="uploads/<?php echo $row['product_image1']; ?>" alt="">
      </div>

      <div class="col-3 center" style="height: 230px; padding-right: 5%;">
          <img style="height: 33%; object-fit: cover;" src="uploads/<?php echo $row['product_image2']; ?>" alt="">
      </div>
  </div>
  <div class="row">
    <div class="col-3 center" style="height: 230px;">
      <img style="height: 33%; object-fit: cover; padding-left: 9%;" src="uploads/<?php echo $row['product_image3']; ?>" alt="">
    </div>

    <div class="col-3 center" style="height: 230px;">
        <img style="height: 33%; object-fit: cover;" src="uploads/<?php echo $row['product_image4']; ?>" alt="">
    </div>

    <div class="col-3 center" style="height: 230px; padding-right: 5%;">
        <img style="height: 33%; object-fit: cover;" src="uploads/<?php echo $row['product_image5']; ?>" alt="">
    </div>
  </div>
</div>
<?php } ?>
  
 


  <div class="row" id="iii">
    <div class="col-4">
     <img id="foot" src="images/logo.png" alt="">
    </div>
  
    <div class="col-4" id="our">
         <h2 style="color: white;">OUR COMPANY</h2>
  
         <ul style="margin-top: 10px;">
           <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="index.php">HOME</a></li>
           <li style="margin-bottom: 21px; color: white;background-color: black;"><a style=" color: white;" href="about.php">ABOUT</a></li>
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
       <h2>ADDRESS INFO</h2>
       <li style="margin-bottom: 21px; background-color: black; color: white;">BUILDING NO 123,STREET 12</li>
       <li style="margin-bottom: 21px; background-color: black; color: white;">MODEL TOWN,PANIPAT 132100</li>
       <li style="margin-bottom: 21px; background-color: black; color: white;">1023-123-456-78</li>
       <li style="margin-bottom: 21px;background-color: black; color: white;">udayarora133@gmail.com</li>
        </div>
    
  </div>
  <h2 style="color: white;background-color: black; text-align: center;">Have Solutions for All Your Space Related Issues!</h2> 
  
</body>
    
</html>
