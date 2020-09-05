<?php
require 'mail/PHPMailerAutoload.php';
error_reporting(0);

session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$seatno = $_SESSION['seatno'];
$busid = $_SESSION['busid'];
$busname =  $_SESSION['busname'];
$dateid = $_SESSION['dateid'];
$fare = $_SESSION['fare'];
$src_name = $_SESSION['source'];
$des_name = $_SESSION['dest'];
$tid = $_SESSION['t_id'];
$time = $_SESSION['time'];


$mail = new PHPMailer(true);


    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   =  true;                                   
    $mail->Username   = '';                     
    $mail->Password   = '';                               
    $mail->SMTPSecure = 'tls';         
    $mail->Port       =  587;                                    

    
    $mail->setFrom('travel@gmail.com','Perfect Destination');
    $mail->addAddress($email);     // Adding a recipient
  
    $mail->addReplyTo('travel@gmail.com','Perfect Destination');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Your Ticket has been booked!';
    $mail->Body    = 'Hello '.$name.'.Thank You for choosing us!!.<br>'.'<br><b> The Details of your journey are as follows:</b>'.'<br>'.'TICKET ID: '.$tid.'<br>'.'BUS ID: '.$busid.'<br>'.'BUS NAME: '.$busname.'<br>'.'STARTING POINT(SOURCE): '.$src_name.'<br>'.'DESTINATION: '.$des_name.'<br>'.'DATE: '.$dateid.'<br>'.'TIME: '.$time.'<br>'.'SEAT NUMBER: '.$seatno.'<br>'.'<b>Please make sure you carry all the necessary ID proofs.<br>Happy Journey :)!!</b>' ;
    
if($mail->send()){
    echo 'Message has been sent';
    header('location:bookinginfo.php');
}
 else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}