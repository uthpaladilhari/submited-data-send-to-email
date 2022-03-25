<?php
error_reporting(0); 
$patientname = $_POST['patientname'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$area = $_POST['area'];
$nic = $_POST['nic'];
$from = $email;
$to = 'responseyta@mailinator.com';
$headers = 'From: '.$from.'\r\n';
$subject = "New Appointment";
$message = '<b>Patient Name: </b>'.$patientname.'<br/>';
$message .=  '<b>Mobile Number: </b>'.$mobilenumber.'<br/>';
$message .=  '<b>Email: </b>'.$email.'<br/>';
$message .=  '<b>Area: </b>'.$area.'<br/>';
$message .=  '<b>NIC: </b>'.$nic.'<br/>';
$mailsent = mail($to, $subject, $message, $headers);
if($mailsent) {
echo 'Mail has been sent<br/><br/>';
echo '<b>Patient Name: </b>'.$patientname.'<br/>';
echo '<b>Mobile Number: </b>'.$mobilenumber.'<br/>';
echo '<b>Email: </b>'.$email.'<br/>';
echo '<b>Area: </b>'.$area.'<br/>';
echo '<b>NIC: </b>'.$nic.'<br/>';
} else {
echo 'Error in the message.';
}





