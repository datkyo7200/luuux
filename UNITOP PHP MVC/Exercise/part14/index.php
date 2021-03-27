<?php
require "mail.php";

$recipient = "ptd58131284@gmail.com";
$recipient_fullname = "Người vô hình";
$subject = "Thư hẹn PV";
$body = "Dear You. 123";
$option  = array(
    'recipient_name'=> 'Phan Thành Đạt',
    'attachments' => "1.jpg",
    'attachments_name' => "2.jpg"
);
send_mail($recipient, $recipient_fullname, $subject, $body, $option);