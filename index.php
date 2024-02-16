<?php 

require("config.php");

$sql = "SELECT * FROM category WHERE category_type='interior' LIMIT 0,3";

$result = $conn->query($sql);

$sql = "SELECT * FROM category WHERE category_type='exterior' LIMIT 0,3";

$exterior_result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- lets add two style files-->
        <link href="css/normalize.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

        <style>
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
  #interior{
    background-image: url(images/holderrr.jpg);
    height: 700px;
    background-position: center center;
    /* width: 100%; */
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    color: white;
    padding-top: 25px;
  }
  .home-boxes {
    column-gap: 20px; 
    padding-left: 28px;
    padding-right: 28px;
  }
  .home-boxes .col-3 {
    height: 200px;
    /* column-gap: 10px; */
   
  }
  .home-boxes .col-3 span {
    background-color: black;
    color: #877474;
    display: block;
    padding: 12px;
  } 
  .img-radius {
    border-radius:14px;
  }
  #butt{
  font-size: 25px;
  padding-top: 160px;
  padding-bottom: 124px;
  
  }
  #exterior{
    background-image: url(https://w0.peakpx.com/wallpaper/856/905/HD-wallpaper-evening-villa-architecture-lighting-houses-love-four-seasons-home-attractions-in-dreams-villa-graphy-exterior-beautiful-houses-evening.jpg);
    height: 700px;
    background-position: center center;
    /* width: 100%; */
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    color: white;
    padding-top: 25px;
  }
  .btn {
    padding: 12px;
    background: black;
    color: whitesmoke;
    border-radius: 9px;
    text-decoration: none;
    /* width: 119px; */
    display: inline-block;
    width: 196px;

  }

  #our{
    padding-top: 78px;
    background-color: black;
  }     
  #social{
    padding-top: 78px;
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
    color: white;
}
h3{
  font-size: 150%;
}


.view-more {
    padding: 12px 57px;
    background: linear-gradient(4deg, #ffcb28, #705959);
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-size: 18px !important;
    display:inline-block;
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

        <div class="col-3 left">
          <h1 style="text-align: center; margin: 0px; padding: 0px;"></h1>
      </div>

        <div class="col-3 center">
            <h1 style="text-align: center; margin: 0px; padding: 0px; ">HOME DECOR</h1>
        </div>

        <div id="icon" class="col-3 right">
          <div style="padding-top: 20px;" class="col-3 center">
            
         </div>
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
       <div id="interior">
        <div class="row" >
        <div class="col">
          <div >
              <span><h1>INTERIOR</h1></span>
          </div>
        <div>

          <div class="row home-boxes">

          <?php while ($row = $result->fetch_assoc()) {  ?>
            <div class="col-3">
              <span><H2><?php echo $row['category_name']; ?></h2></span>
                <img class="img-radius" src="<?php echo "uploads/" . $row['category_image']; ?>" alt="">
                <a class="view-more" href="view.php?id=<?php echo $row['id']; ?>&category=interior">View</a>

            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      </div>

      <div id="butt">
        <div class="row">
          <div class="col">
              <a href="view.php?category=interior" class="btn">View More</a>
          </div>
        </div>
      </div>
  

      
      <div id="exterior">
        <div class="row" >
        <div class="col">
          <div >
              <span><h1>EXTERIOR</h1></span>
          </div>
        <div>

          <div class="row home-boxes">
          <?php while ($row = $exterior_result->fetch_assoc()) {  ?>
            <div class="col-3">
              <span><H2><?php echo $row['category_name']; ?></h2></span>
                <img class="img-radius" src="<?php echo "uploads/" . $row['category_image']; ?>" alt="">
                <a class="view-more" href="view.php?id=<?php echo $row['id']; ?>&category=exterior">View</a>
            </div>
          
      
            <?php } ?>
          </div>
        </div>
      </div>
      </div>
 
      
      <div id="butt">
        <div class="row">
          <div class="col">
              <a href="view.php?category=exterior" class="btn">View More</a>
          </div>
        </div>
      </div>

      <h4 style="text-align: center; color: black;">Every Space Count</h4>
      <h3 style="text-align: center; color: black; margin-bottom: 2%;">Why Choose Us</h3>

      <div class="row">
             <div class="col-3 center" style="padding-left: 3%;">
                    <i class="fa fa-building" aria-hidden="true" style="color: black;font-size: 150%; margin-left: 0px;"></i>
                    <h3 style="text-align: center;color: black;">Building Planning</h3>
                     <p style="text-align: justify; color: black;">Building planning is the method of setting or arranging various components or units of a building in a systematic manner to form a meaningful and homogeneous structure to meet its functional purpose.</p>
             </div>

              <div class="col-3 center " style="margin-left: 3%;margin-right: 3%;">
                   <i class="fa fa-home" aria-hidden="true"  style="color: black;font-size: 190%; margin-left: 0px;"></i>
                     <h3 style="text-align: center; color:black ">Interior Space</h3>
                    <p style="text-align: justify; color: black;">There are four basic elements of interior design, which are line, form, color and texture. Some people include space when discussing design elements, but traditionally only the four elements are listed in interior design books.</p>
              </div>

              <div class="col-3 center" style="padding-right: 3%;">
                   <i class="fa fa-briefcase" aria-hidden="true" style="color: black;font-size: 190%; margin-left: 0px;margin-right: 0px;"></i>
                    <h3 id="h" style="text-align: center; color:black">Small Offices</h3>
                    <p style="text-align: justify; color: black;">Our design specialist have excellent knowledge of utilizing various software tools and programs, coordinating with the whole design team on adjusting plans, improving layouts according to budget limitations, and submitting deliverables within the set deadlines.</p>
              </div>
      </div>


      <div class="row" style="margin-top: 5%;">
        <div class="col-3 center" style="padding-left: 3%;">
               <i class="fa fa-building" aria-hidden="true" style="color: black;font-size: 150%; margin-left: 0px;"></i>
               <h3 style="text-align: center;color: black;">Real Estate</h3>
                <p style="text-align: justify; color: black;">This Real Estate Agent job description template is optimized for posting on job boards or careers pages. This realtor job description is easy to customize for your company and specific realtor needs.</p>
        </div>

         <div class="col-3 center " style="margin-left: 3%;">
              <i class="fa fa-briefcase" aria-hidden="true"  style="color: black;font-size: 190%; margin-left: 0px;"></i>
                <h3 style="text-align: center; color:black ">Free Consulation</h3>
               <p style="text-align: justify; color: black;">A free consultation is a one-on-one interaction, conversation, meeting, or interview given freely to share one's thoughts and discuss possible opportunities of working together.</p>
         </div>

         <div class="col-3 center " style="margin-left: 3%;margin-right: 3%;">
          <i class="fa fa-home" aria-hidden="true"  style="color: black;font-size: 190%; margin-left: 0px;"></i>
            <h3 style="text-align: center; color:black ">Exterior Space</h3>
           <p style="text-align: justify; color: black;">Exterior design includes your home's size and shape, how it fits into the surrounding neighbourhood and streetscape, and the impact it has on its site.</p>
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
                    <li style="margin-bottom: 21px;"><a style="color: white;" href="https://www.facebook.com/uday.arora.1297">Facebook</a></li>
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