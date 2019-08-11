<?php
session_start();
if(isset($_POST["signIn"])) 
{
	if($_POST["username"]=="admin" && $_POST["password"]=="alomic")
	{
		$_SESSION["username"]=$row["username"];
		header("location:home.php");
	}
	else
	{
		header("location:index.php");
	}

}

?>
<!--

try {
$connect=new PDO("mysql:host=localhost;dbname=student_assessment","root","");
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement=$connect->prepare("SELECT * FROM user_info WHERE (username=:username AND password=:password) AND status=:status;");
$statement->bindParam(":username",$_POST["username"]);
$statement->bindParam(":password",$_POST["password"]);
$value=1; $statement->bindParam(":status",$value);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$row=$statement->fetch();
if($row==NULL) {

}
else {            
$_SESSION["username"]=$row["username"];
$_SESSION["fullname"]=$row["fullname"];
if($row["type"]=="ADMIN") {
$connect=NULL;
header("location:../admin/index.php");
}
if($row["type"]=="STAFF") {
$connect=NULL;
header("location:../staff/index.php");
}
if($row["type"]=="STUDENT") {
$connect=NULL;
header("location:../student/index.php");
}
}
} 
catch(PDOException $ex) {
$ex->getMessage();
}   
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/metisMenu.min.css" rel="stylesheet">
<link href="css/sb-admin-2.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="login-panel panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Sign In</h3>
</div>
<div class="panel-body">
<form method="POST" role="form">
<fieldset>
<div class="form-group">
<input class="form-control" placeholder="Enter your username" name="username" type="text">
</div>
<div class="form-group">
<input class="form-control" placeholder="Enter your password" name="password" type="password">
</div>
<div class="form-group">
<input type="submit" name="signIn" class="btn btn-lg btn-success btn-block" value="Sign In" />
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/sb-admin-2.js"></script>
</body>
</html>
