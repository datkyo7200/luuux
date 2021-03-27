<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function;
    //Đoạn này cần phải có
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->CharSet   = "utf-8";
    $mail->SMTPDebug  = 0;
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phanthanhdat47f1@gmail.com';                     //SMTP username
    $mail->Password   = 'Chieubuon720';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('phanthanhdat47f1@gmail.com', 'TD MUSIC');
    $mail->addAddress('datkyo7200@gmail.com', 'Phan Thành Đạt');     //Add a recipient
    $mail->addAddress('ptd58131284@gmail.com');               //Name is optional
    $mail->addReplyTo('phanthanhdat47f1@gmail.com', 'TD MUSIC');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('js98.jpg');         //Add attachments
    $mail->addAttachment('js98.jpg', 'DD98.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[TD MUSIC] Gửi mail từ TD MUSIC';
    $mail->Body    = 'Thông tin được gửi từ <b>TD MUSIC!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Thư được gửi thành công';
} catch (Exception $e) {
    echo "Thư không được gửi. Chi tiết lỗi: {$mail->ErrorInfo}";
}