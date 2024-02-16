<?php 



require("config.php");


$category = $_GET['category']; 
$sql = "SELECT * FROM category WHERE category_type='$category'";
$result = $conn->query($sql);

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "SELECT * FROM category WHERE id='$id'";
    $category = $conn->query($sql);
    $category_data = $category->fetch_assoc();
} else {

    $category_data = $result->fetch_assoc();
    $result->data_seek(0);
}





?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/normalize.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

            <style>
                 h1,h2,body{ font-family: 'Teko', sans-serif;}
                 #mmm li{
                    padding: 12px;
                    background: black;
                    margin-bottom: 1px;
                    /* margin-top: 10px; */
                    width: 140px;
                    width: 100%;
                    border-top-radius-left: 23px;
    
                 }

                 #mmm li a{
                    color:white;
                    text-decoration:none;
                    font-size:18px;
    
                 }
             
                 h2{
                    
                 }
                 #id{
                    width: 20%;
                    padding-left:12px;
                    
                 }
                 #rig{
                    width: 86%;
                    text-align: center;
                    padding: 0px 32px;
                    background: black;
                    color: white;
                    margin-left: 20px;
                    margin-right: 20px;
                    border-radius: 12px;
                    margin-bottom:30px;
                 }
                 a{
                    color:white;
                 }
                 #menu li{
                 display: inline;
                 margin: 10px;
                 padding: 10px;
                 }
                 .active {
                    background:orange;
                 }
                 #iii{
    background-color: black;
    color:white;
  }  
  .row.home-boxes a {
    font-size: 32px;
    color: white;
}
#iii img{
  min-width: 100%;
}
#iii h2{
    margin: 2%;
    background: linear-gradient(4deg, #ffcb28, #705959);
    color: white;
}
#iii h3{
  font-size: 150%;
}
            </style>
    </head>
 
            <body>
            <div style="
                background: black;
                color: white;">
                
                <header>
    
                <div class="row top-header">
                    <div class="col right">
                        <h1 style="text-align: center; margin: 0px; padding: 0px;">HOME DECOR</h1>                      
                    </div>
                </div>
            


             <div class="row">

    <div class="col-2" style="width: 8%;">
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
                
            
                <h1 style="padding-top:190px;text-align: center;margin-top:0;font-weight:500;"><?php echo ($_GET['category'] == "interior")?"INTERIOR ITEMS":"Exterior ITEMS"; ?></h1> 
                <div class="row">
                    <div class="col-2 center" id="id">
                        <h2 style="               background: orange;
    padding: 12px;
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;
    color: white;font-weight:normal;font-size:32px;letter-spacing:1px;"><a style="color:white;text-decoration:none;" href="">Categories</a></h2>
                        <ul id="mmm">
                            <?php while ($row= $result->fetch_assoc()) { ?>

                            <li><a href="view.php?id=<?php echo $row['id']; ?>&category=<?php echo $_GET['category']; ?>"><?php echo $row['category_name']; ?></a></li>

                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-2 right" id="rig">
                                <p>
                        <?php echo $category_data['category_descp']; ?>

                                </p>
                    </div>
                
                </div>                
               

 



        <div class="row" id="iii">
               <div class="col-4">
                <img id="foot" src="images/logo.png" alt="">
                
               </div>

               <div class="col-4" id="our">
                    <h2 style="color: white;background-color: black;">OUR COMPANY</h2>

                    <ul style="margin-top: 10px;">
                      <li style="color: black;margin-bottom: 21px;"><a style="color: white;" href="index.php">HOME</a></li>
                      <li style="color: black;margin-bottom: 21px;"><a style="color: white;" href="about.php">ABOUT US</a></li>
                      <li style="color: black;margin-bottom: 21px;"><a style="color: white;" href="sevices.html">SERVICES</a></li>
                      <li style="color: black;margin-bottom: 21px;"><a style="color: white;" href="portfolio.php">PORTFOLIO</a></li>
                      <li style="color: black;margin-bottom: 21px;"><a style="color: white;" href="contact.php">CONTACT US</a></li>
                    </ul>
               </div>

               <div class="col-4" id="social">
                  <h2 style="color: white;background-color: black;">SOCIAL HANDELS</h2>

                  <ul style="margin-top: 10px;">
                    <li style="margin-bottom: 21px;"><a style="color: white;" href="https://instagram.com/_udayaroraa_?igshid=MzMyNGUyNmU2YQ==">INSTAGRAM</a></li>
                    <li style="margin-bottom: 21px;"><a style="color: white;" href="https://www.facebook.com/uday.arora.1297">FACEBOOK</a></li>
                    <li style="margin-bottom: 21px;"><a style="color: white;" href="https://x.com/UdayAro36686908?t=kqRFwoL2AkxgUE6sg68Nkg&s=09">TWITTER </a></li>
                  </ul>

               </div>
              
               <div class="col-4" id="add">
                  <h2 >ADDRESS INFO</h2>
                  <li style="margin-bottom: 21px;">BUILDING NO 123,STREET 12</li>
                  <li style="margin-bottom: 21px;">MODEL TOWN,PANIPAT 132100</li>
                  <li style="margin-bottom: 21px;">1023-123-456-78</li>
                  <li style="margin-bottom: 21px;"><a style="color: white;" href="">EMAIL - udayarora133@gmail.com</a></li>
               </div>
               
      </div>
       <h2 style="color: white;background-color: black;">Have Solutions for All Your Space Related Issues!</h2>

            </body>




</html>


