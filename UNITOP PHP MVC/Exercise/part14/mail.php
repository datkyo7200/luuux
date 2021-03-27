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
    require 'config/email.php';

    //Instantiation and passing `true` enables exceptions

function send_mail($recipient, $recipient_fullname, $subject, $body, $option  = array())
{
    global $config_email;
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->CharSet   = $config_email['charset'];
        $mail->SMTPDebug  = $config_email['smtp_debug'];
        $mail->Host       = $config_email['host'];                     //Set the SMTP server to send through
        $mail->Username   = $config_email['username'];                     //SMTP username
        $mail->Password   = $config_email['password'];                                  //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];            //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $config_email['port'];
        //Recipients
    
        $mail->setFrom($config_email['username'], $config_email['fullname']);
    
        $mail->addAddress($recipient, $option['recipient_name']);     //Add a recipient
        // $mail->addAddress('ptd58131284@gmail.com');               //Name is optional
        $mail->addReplyTo('phanthanhdat47f1@gmail.com', 'TD MUSIC');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment($option['attachments']);         //Add attachments
        $mail->addAttachment($option['attachments'], $option['attachments_name']);    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo " Đã gửi thành công";
        return true;
    } catch (Exception $e) {
        return "Thư không được gửi. Chi tiết lỗi: {$mail->ErrorInfo}";
    }
}