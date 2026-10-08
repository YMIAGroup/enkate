<?php
// cPanel-ready starter handler. Set the destination below before launch.
$to = 'info@ankateconsulting.co.ke';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: contact.html'); exit; }
$name=trim($_POST['name']??''); $email=trim($_POST['email']??''); $phone=trim($_POST['phone']??'');
$company=trim($_POST['company']??''); $service=trim($_POST['service']??''); $team=trim($_POST['team_size']??''); $message=trim($_POST['message']??'');
if (!$name || !filter_var($email,FILTER_VALIDATE_EMAIL)) { http_response_code(400); exit('Please provide a valid name and email.'); }
$subject='New Ankate website enquiry';
$body="Name: $name\nEmail: $email\nPhone: $phone\nOrganisation: $company\nService: $service\nTeam size: $team\n\nMessage:\n$message";
$headers='From: website@'.($_SERVER['HTTP_HOST']??'localhost')."\r\nReply-To: $email\r\n";
$sent=@mail($to,$subject,$body,$headers);
header('Location: contact.html?sent='.($sent?'1':'0')); exit;
?>