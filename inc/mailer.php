<?php
// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../vendor/autoload.php'; // Use Composer's autoload


// Initialize variables
$errors = [];
$successMessage = ""; 

// IF STATEMENT SENDS DATA TO DATABASE
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize input
    $firstname = test_input($_POST['user_firstname']);
    $lastname =  test_input($_POST['user_lastname']);
    $email =  test_input($_POST['user_email']);
    $telephone = test_input($_POST['user_telephone']);
    $subject = test_input($_POST['user_subject']);
    $message = test_input($_POST['user_message']);

    // Validate each input before proceeding
    if (empty($firstname) || strlen($firstname) < 3) {
        $errors[] = "First name is required and should be at least 3 characters.";
    }
    if (empty($lastname) || strlen($lastname) < 3) {
        $errors[] = "Last name is required and should be at least 3 characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }
    if (!preg_match("/^\+?[0-9\s\-]{7,15}$/", $telephone)) {
        $errors[] = "A valid telephone number is required.";
    }
    if (empty($subject) || strlen($subject) < 5) {
        $errors[] = "Subject is required and should be at least 5 characters.";
    }
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message is required and should be at least 10 characters.";
    }

    if (empty($errors)) {
        try {
            // Database connection (PDO)
            require_once "dbconfig.php"; // Make sure dbconfig.php contains correct connection details

            $query = "INSERT INTO `contact_me` (`firstname`, `lastname`, `email`, `telephone`, `subject`, `message`)
                      VALUES (?, ?, ?, ?, ?, ?)";
            $statement = $dpdo->prepare($query);
            $statement->execute([$firstname, $lastname, $email, $telephone, $subject, $message]);

            // Close the database connection
            $dpdo = null;
            $statement = null;

            header("Location: ../my-portfolio.php");

            // Proceed to send the email
            $mail = new PHPMailer(true); // Pass `true` to throw exceptions on error
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io'; // Mailtrap SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'your_mailtrap_username'; // Mailtrap username
            $mail->Password = 'your_mailtrap_password'; // Mailtrap password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set sender and recipient
            $mail->setFrom($email, $firstName);
            $mail->addAddress('receiver@gmail.com', 'Receiver Name');

            // Email subject and body
            $mail->Subject = 'Thanks for choosing Our Hotel!';
            $mail->isHTML(true);
            $mail->Body = "<html>Hi there, we are happy to <br>confirm your booking.</br> Please check the document in the attachment.</html>";
            $mail->AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';

            // Attach a file
            // $attachmentPath = './confirmations/yourbooking.pdf';
            // if (file_exists($attachmentPath)) {
            //     $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
            // }

            // Send the email
            if ($mail->send()) {
                $successMessage = 'Your enquiry was successfully submitted and an email has been sent!';
            } else {
                $errors[] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
        } catch (PDOException $e) {
            $errors[] = 'Database error: ' . $e->getMessage();
        } catch (Exception $e) {
            $errors[] = 'PHPMailer error: ' . $e->getMessage();
        }
    }
} else {
    // Redirect if form is accessed directly
    header("Location: ../my-portfolio.php");
    exit();
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>