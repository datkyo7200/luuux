<?php

$config_email = array(
    'charset'=>'utf-8',
    'smtp_debug'=> 0,
    'host' => 'smtp.gmail.com',
    'fullname'=>'Phan Thành Đạt',
    'username' => 'phanthanhdat47f1@gmail.com',
    'password' => 'Chieubuon720',
    'smtp_secure'=> 'PHPMailer::ENCRYPTION_STARTTLS',
    'port'=> 587
);

echo "<pre>";
print_r($config_email);
echo "</pre>";