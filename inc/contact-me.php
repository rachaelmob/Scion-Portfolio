<?php
// IF STATEMENT SEND DATA TO DATABSE
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST['user_firstname']);
    /* $firstnameErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $firstnameErr = "Only letters and white space allowed";
    } */
    $lastname =  test_input($_POST['user_lastname']);
    $email =  test_input($_POST['user_email']);
    $telephone = test_input($_POST['user_telephone']);
    $subject = test_input($_POST['user_subject']);
    $message = test_input($_POST['user_message']);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    try {
        require_once "dbconfig.php";

        $query = "INSERT INTO `contact-me` (`firstname`, lastname, email, telephone, `subject`,	`message`)
        VALUES (?, ?, ?, ?, ?, ?);";

        $statement = $dpdo->prepare($query);
        $statement->execute([$name, $lastname, $email, $telephone, $subject, $message]);

        $dpdo = null;
        $statement = null;

        header("Location: ../index.php");

        die();
    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else { // Send them to home page if form not submited
    header("Location: ../index.php");
}

//TODO -- USE htmlspecialchars() to avoid hacking and injections 



// TODO --  Client and Server side validation



// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once './vendor/autoload.php';
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';


// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'api';
$mail->Password = '1a2b3c4d5e6f7g';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('confirmation@registered-domain', 'Your Hotel');
$mail->addAddress('receiver@gmail.com', 'Me');
$mail->Subject = 'Thanks for choosing Our Hotel!';
// Set HTML 
$mail->isHTML(TRUE);
$mail->Body = '<html>Hi there, we are happy to <br>confirm your booking.</br> Please check the document in the attachment.</html>';
$mail->AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';
// add attachment 
// just add the '/path/to/file.pdf'
$attachmentPath = './confirmations/yourbooking.pdf';
if (file_exists($attachmentPath)) {
    $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
}

// send the message
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}