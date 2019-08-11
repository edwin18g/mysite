<?php ob_start(); ?>	
<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["ctitle"].value;
    if (x == null || x == "") {
        alert("Please enter the Church Name");
        return false;
    }

}
</script>

	<?php
$id=$_GET['id'];
	if(isset($_POST["insert"]))
	{
	
	$title=$_POST['title'];

 		
			$sql = "update newsandevents set ctitle='$title' where id='$id'"; 

			$val=$conn->query($sql);
			if($val)
			{
			header("Location:viewnews.php?msg=1");
			exit();
			}
                  
               



	}
	
$sql = "SELECT * FROM newsandevents where id='$id'";

$result = $conn->query($sql);
$row1 = $result->fetch_assoc()
		?>
		<form action="" name="myForm" method="post" enctype='multipart/form-data'>

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Title</p>
	<p><input type="text" name="title" value="<?php echo $row1['ctitle'];?>" class="form-control" ></p>
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

<input type="submit" value="Update News" class="btn btn-success" name="insert"/>
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



