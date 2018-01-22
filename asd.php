<?php
$n = $_POST['n'];
$ma = $_POST['ma'];
$t = $_POST['t'];
$m = $_POST['m'];

$to      = 'lyboleg@gmail.com';
if(!$n){
    $n = $_SERVER['HTTP_HOST'];
}
$subject = $n;
$message = 'Тема - '.$t."\r\n";
$message .= 'Почта - '.$ma."\r\n";
$message .= 'Имя - '.$n."\r\n";
$message .= 'Сообщение - '.$m;

if(!$ma){
    $ma = 'support@support';
}
$headers = 'From: <'.$ma.'>';

mail($to, $subject, $message, $headers);
?>