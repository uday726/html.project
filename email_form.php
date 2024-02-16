<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["Email"], $_POST["Subject"], $_POST["Message"])) {
    $recipient_email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    
    // Check if the email is empty or invalid
    if (empty($recipient_email) || !filter_var($recipient_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid recipient email";
    } 
    else {
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
        $mailer->Subject = $subject;
        $mailer->Body = $message;
        
        try {
            $mailer->send();
            echo "Email sent successfully.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: " . $mailer->ErrorInfo;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Form</title>
</head>
<body>
    <h2>Send Email</h2>
    <form action="email_form.php" method="POST">
        <label for="Email">Recipient Email:</label>
        <input type="email" name="Email" id="Email" required>
        <br>
        <label for="Subject">Subject:</label>
        <input type="text" name="Subject" id="Subject" required>
        <br>
        <label for="Message">Message:</label>
        <textarea name="Message" id="Message" rows="4" required></textarea>
        <br>
        <input type="submit" value="Send Email">
    </form>
</body>
</html>
