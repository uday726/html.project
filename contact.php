<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["Email"], $_POST["Subject"], $_POST["Message"])) {
  $name = $_POST["Name"];
  $phone = $_POST["Phone"];
  $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    
    $mail_message = "<html><head></head><body><table style='width:100%;border:1px solid black;'>
    <tr>
    <td>Name:</td><td>$name</td>
    </tr>
    <tr>
    <td>Phone:</td><td>$phone</td>
    </tr>
    <tr>
    <td>Email:</td><td>$email</td>
    </tr>
    <tr>
    <td>Subject:</td><td>$subject</td>
    </tr>
    <tr>
    <td>Message:</td><td>$message</td>
    </tr></table></body></html>";

    // Check if the email is empty or invalid
    //if (empty($recipient_email) || !filter_var($recipient_email, FILTER_VALIDATE_EMAIL)) {
        // echo "Invalid recipient email";
    // else {
        $mailer = new PHPMailer(true);
        $mailer->isSMTP();
        $mailer->SMTPDebug = 0; // Set to 0 for production, or 2 for debugging
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Port = 587;
        $mailer->Username = 'udayarora0726@gmail.com'; // Your Gmail email address
        $mailer->Password = 'hohtubfakuvuwhsw';
        $mailer->SMTPSecure = 'tls';
        $mailer->setFrom('udayarora0726@gmail.com', 'Server');
        $mailer->addAddress('udayarora133@gmail.com');
        $mailer->addAddress($email);
        $mailer->Subject = $subject;
        $mailer->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
        $mailer->Body = $mail_message;
        
        try {
            $mailer->send();
            echo "Email sent successfully.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: " . $mailer->ErrorInfo;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CONTACT US FORM</title>
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
h1,h2{
    margin: 2%;
   
}
.contact-form  td {
  padding-bottom: 32px;
}

.contact-form input, textarea {
  font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
    height: 37px;
    border-radius: 8px;
    box-shadow: 2px 2px 4px white;
    border: 1px solid grey;
    background: black;
    color: white;
}
textarea {
    height: 100px;
    width: 100%;
}
td {
  vertical-align:top;
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
          <li><a style="color: white;" href="services.php">Services</a></li>
          <li><a style="color: white;" href="contact.php">Contact Us</a></li>
        </ul>
    </div>
  </div>
</header>
       <div  class="row" style="padding-top:300px">
      
      <div style="padding-left: 15%;" class="col-2">
        <h1 style="padding-right: 20%;
    padding-right: 20%;
    text-shadow: 2px 2px green;
    margin-left: 0px;
">
        CONTACT US FORM
      </h1>
      <form action="contact.php" method="POST">
        <table class="contact-form">
          <tr>
            <td><label for="Name">Name:</label></td>
            <td> <input type="text" name="Name" id="name" required></td>
          </tr>
          <tr>
            <td><label for="Phone">phone:</label></td>
            <td><input type="text" name="Phone" id="phone" required></td>
          </tr>
          <tr>
            <td><label for="Email">Email:</label></td>
            <td><input type="email" name="Email" id="Email" required></td>
          </tr>
          <tr>
            <td><label for="Subject">Subject:</label></td>
            <td><input type="text" name="Subject" id="Subject" required></td>
          </tr>
          <tr>
            <td><label for="Message">Message:</label></td>
            <td><textarea name="Message" id="Message" rows="4" required></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Send Email"></td>
          </tr>
      </table>

       
    </form>
 
        </div>

          <div  class="col-2">
            <h1 style="padding-right: 20%;padding-right: 20%;text-shadow: 2px 2px green;margin-left:0px;">Let's Get In Touch</h1>
            <p style="    padding-right: 20%;text-align: justify;line-height: 30px;font-size: 17px;font-weight: bold;">Do not be angry with the pain in the reprimand in the pleasure he wants to be a hair from the pain in the hope that there is no breeding. Unless they are blinded by lust, they do not come forth; they are in fault who abandon their duties and soften their hearts, that is, their labors.</p>
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
       <h2 style="background-color: black; color: white; margin-bottom: 2%;" >ADDRESS INFO</h2>
       <li style="margin-bottom: 21px; background-color: black; color: white;">BUILDING NO 123,STREET 12</li>
       <li style="margin-bottom: 21px; background-color: black; color: white;">MODEL TOWN,PANIPAT 132100</li>
       <li style="margin-bottom: 21px; background-color: black; color: white;">1023-123-456-78</li>
       <li style="margin-bottom: 21px;background-color: black; color: white;">udayarora133@gmail.com</li>
        </div>
    
  </div>
  <h2 style="text-align: center;">Have Solutions for All Your Space Related Issues!</h2> 
  
</body>
    
</html>
