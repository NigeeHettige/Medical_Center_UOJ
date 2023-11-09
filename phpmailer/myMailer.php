<?php

include('..\connection.php');
session_start();
$_SESSION['reg_number'] = $_POST['reg_number'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'chanukachamith23@gmail.com'; // Your Gmail email address
    $mail->Password = 'okzmaftnlqrdguwe'; // Your Gmail password or app-specific password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Gmail SMTP port (TLS)

    $reg_num = $_POST['reg_number'];
    $query = "SELECT email FROM user_details WHERE reg_number='$reg_num'";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);
    $emailAddress = $row['email'];



    // Sender and recipient
    $mail->setFrom('chanukachamith23@gmail.com', 'MC');
    $mail->addAddress($emailAddress, 'chanuka');

    $minKey = 100000; // Minimum value for the key
    $maxKey = 999999; // Maximum value for the key
    $randomKey = rand($minKey, $maxKey);
    $_SESSION['randomKey'] = $randomKey;

    // Email content
    $mail->isHTML(false);
    $mail->Subject = 'verification Code';
    // $mail->Body    = "Hello $firstname,\r\n\nPlease use the verification code below on the DCS-Student Management System : $randomKey.\r\n\nif you didn't request this, you can ignore this email or let us know.\r\n\n\nThanks!.";   
    $mail->Body = $randomKey;

    // Send the email
    $mail->send();
    date_default_timezone_set("Asia/Colombo");
    $_SESSION['email_code_sent_time'] = date("i");
    ?>

    <script>
        window.location.href = "../User/login/otp.php";
    </script>

    <?php
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}



?>