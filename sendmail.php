<?php 
    include "sec.php";
$_SESSION['name']=$_REQUEST['mail'];
//$_SESSION['pass']=$_REQUEST['pass'];
echo $_SESSION['name'];
  ?>
<?php

$mail=$_REQUEST['mail'];
$to=$mail;
$subject="Varification mail";
$otp=mt_rand(0,1000);
$message='Your otp is '.$otp;
mail($to, $subject, $message);
echo "sent",$otp;

?> 
