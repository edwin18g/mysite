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
 $file_name=$_FILES["photo"]["name"];

    $a=explode(".",$file_name);
    $file_extension=$a[count($a)-1];
    $newFileName=$id.".".$file_extension;
if($_FILES["photo"]["size"] != 0 && $_FILES['photo']['error'] != 0)
{
 		if(move_uploaded_file($_FILES["photo"]["tmp_name"],"../circular/".$newFileName))
                  {
			$sql = "update circular set ctitle='$title',cfilename='$newFileName' where id='$id'"; 

			$val=$conn->query($sql);
			if($val)
			{
			header("Location:viewcircular.php?msg=1");
			exit();
			}
                  
                  }
                   else
                  {
                   echo "<h1>File Not Uploaded. Please ty again later</h1>";
                  }
   
}
else
{
$sql = "update circular set ctitle='$title' where id='$id'"; 

			$val=$conn->query($sql);
			if($val)
			{
			header("Location:viewcircular.php?msg=1");
			exit();
			}
}


	}
	
$sql = "SELECT * FROM circular where id='$id'";

$result = $conn->query($sql);
$row1 = $result->fetch_assoc()
		?>
		<form action="" name="myForm" method="post" enctype='multipart/form-data'>

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Circular</h1>
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
<p>Select File</p>
	<p><input type="file" name="photo" class="form-control" ></p>
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

<input type="submit" value="Update Circular" class="btn btn-success" name="insert"/>
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



