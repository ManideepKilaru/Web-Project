<?php
require 'PHPMailer/PHPMailerAutoload.php';
$con=mysqli_connect('localhost','root','','ats') or die("error at connection");
$pname=$_POST['p1'];
$email=$_POST['mail'];
$age=$_POST['a1'];
$gen=$_POST['Gender'];
$mn=$_POST['ph'];
$da=$_POST['d1'];
$ptime=$_POST['sel'];
$hl=$_POST['hll'];
$hna=$_POST['hn'];
$spl=$_POST['spl'];
$query="insert into app values('$pname','$email','$age','$gen','$mn','$da','$ptime','$hl','$hna','$spl')";
$res=mysqli_query($con,$query) or die("error at execution");
if($res)
{
$remail = $email;
$na=$pname;
$subject ="Hospital Appointment Status";
$body ="Hello $pname,Appointment Confirmed on $da in $ptime at $hna in $hl ";
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username ="bm.chandana07@gmail.com" ;

//Password to use for SMTP authentication
$mail->Password = "chandana2610";

//Set who the message is to be sent from
$mail->setFrom('ATS', '');

//Set an alternative reply-to address
$mail->addReplyTo('ATS', '');

//Set who the message is to be sent to
$mail->addAddress($remail,$na);

//Set the subject line
$mail->Subject =$subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML="<h1>test mail</h1>";
$mail->Body ="Hello $pname,Appointment Confirmed on $da in $ptime at $hna in $hl";
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent to  $remail";
}}
else
echo "Unsuccessful";
?>