<?php
$to='info@ankateconsulting.co.ke';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: insights.html');exit;}
$email=trim($_POST['email']??'');
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){http_response_code(400);exit('Please provide a valid email.');}
$subject='New Ankate Insights subscriber';
$body="New newsletter subscriber: $email\nDate: ".date('c');
$headers='From: website@'.($_SERVER['HTTP_HOST']??'localhost')."\r\nReply-To: $email\r\n";
@file_put_contents(__DIR__.'/newsletter-leads.csv', '"'.str_replace('"','""',$email).'","'.date('c').'"'.PHP_EOL, FILE_APPEND|LOCK_EX);
@mail($to,$subject,$body,$headers);
header('Location: insights.html?subscribed=1');exit;
?>