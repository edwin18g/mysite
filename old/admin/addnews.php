<?php ob_start(); ?>	
<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["cname"].value;
    if (x == null || x == "") {
        alert("Please enter the Church Name");
        return false;
    }
var y = document.forms["myForm"]["churchid"].value;
      if (y == null || y == "") {
        alert("Please enter the Church ID");
        return false;
    }
}
</script>

	<?php
	if(isset($_POST["insert"]))
	{
	$count=1;
	$sql = "SELECT max(id) as id FROM newsandevents";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) 
	{
	$count=$row["id"];
	}
	$count++;
$title=$_POST['title'];
 
			$sql = "insert into newsandevents(ctitle) values('$title')"; 

	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewnews.php?msg=2");
	exit();
	}
                  
               
   

	}
	


		?>
		<form action="" method="post" >

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Title</p>
	<p><input type="text" name="title" class="form-control" ></p>
</div>
<div class="col-md-3">

</div>
<div class="col-md-3">

</div>
<div class="col-md-3">

</div>
</div>





<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-3">

<input type="submit" value="Add News" class="btn btn-success" name="insert"/>
</div>
<div class="col-md-6">

</div>

</div>


	</form>
	
<?php
		$conn->close();
		?>
<?php include 'footer.php'; ?>

<?php ob_flush(); ?>



