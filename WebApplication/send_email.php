<?php

    //TODO: We have the email of the user this email is coming from in $_SESSION['email']
    //We need the email of the user this email will be sent to by queries the DB of the specific listing to fetch the email, and that will go in $mail->addAddress.
    //Also, update the body to reflect the message that will be sent inside the body of the email.

    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    date_default_timezone_set('Etc/UTC');
    require '../vendor/autoload.php';

    if($_POST){
        $emailBody = $_POST['email'];
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'myunimarket@outlook.com';
        $mail->Password = 'WebApplication@123';
        $mail->setFrom('myunimarket@outlook.com', 'MyUniMarket');
        $mail->addAddress($_SESSION['toEmail'], 'User');
        $mail->Subject = 'You have a new message! - MyUniMarket';
        $mail->Body = $emailBody;
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }
    }
?>

<html>
    <body>
        <form method="post">
            <textarea name="email" rows="4" cols="50">
            </textarea>
            <p><input type="submit" value="Submit"></p>
        </form>
    </body>
</html>
