<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'function/mails/vendor/autoload.php';

if(isset($_POST['contact-us'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];
    $mail = new PHPMailer(true);
    try {
        //Server settings
       # $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'qurandz.ga';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contact@qurandz.ga';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('contact@qurandz.ga', 'QuranDZ');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "You have received an e-mail from <br>name: $name.<br>| phone number: $phone |<br>| subject: $subject | <br> | message: $message |";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header('Location: contact/message-sent');
    } catch (Exception $e) {
        header('Location: contact/message-unsent');
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 }
if(in_array('message-sent', $url)){
    $notify = 'تم إرسال رسالتك بنجاح';
    $notifyType = 'success';
    $notifyIcon = 'check';
}elseif(in_array('message-unsent', $url)){
    $notify = 'حدث خطأ ما، حاول مرة أخرى';
    $notifyType = 'danger';

}