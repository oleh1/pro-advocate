<?php
$n = $_POST['n'];
$ma = $_POST['ma'];
$t = $_POST['t'];
$m = $_POST['m'];

$to      = 'lyboleg@gmail.com';
$subject = $n;
$message = 'Тема - '.$t."\r\n";
$message .= 'Сообщение - '.$m;
$headers = 'From: <'.$ma.'>';

mail($to, $subject, $message, $headers);
?>