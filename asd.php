<?php
$n = $_POST['n'];
$ma = $_POST['ma'];
$t = $_POST['t'];
$m = $_POST['m'];

$to      = 'lyboleg@gmail.com';
$subject = $t;
$message = $m;
$headers = 'From: '.$ma;

mail($to, $subject, $message, $headers);
?>