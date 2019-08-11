<?php ob_start(); ?>	
<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["pname"].value;
    if (x == null || x == "") {
        alert("Please enter the Priest Name");
        return false;
    }
var y = document.forms["myForm"]["priestid"].value;
      if (y == null || y == "") {
        alert("Please enter the Priest ID");
        return false;
    }
}
</script>

	<?php
	if(isset($_POST["Update"]))
	{

	$cid=$_POST['cid'];
$priestid=$_POST['priestid'];
$pname=mysqli_real_escape_string($conn,$_POST['pname']);
	$pfname=mysqli_real_escape_string($conn,$_POST['pfname']);
	$pmnane=mysqli_real_escape_string($conn,$_POST['pmnane']);
	$pdob=$_POST['pdob'];
	$pplace=mysqli_real_escape_string($conn,$_POST['pplace']);
	$pseminary=mysqli_real_escape_string($conn,$_POST['pseminary']);
	$porddate=$_POST['porddate'];
	$pordplace=mysqli_real_escape_string($conn,$_POST['pordplace']);
	$pordby=mysqli_real_escape_string($conn,$_POST['pordby']);
	$pminstring=mysqli_real_escape_string($conn,$_POST['pminstring']);
	$paddress=mysqli_real_escape_string($conn,$_POST['paddress']);
	$pemail=$_POST['pemail'];
	$phone=$_POST['phone'];
$status=$_POST['status'];
	$sql = "update religiouspriest set  priestid='$priestid',status='$status',pname='$pname',pfname='$pfname',pmnane='$pmnane',pdob='$pdob',pplace='$pplace',pseminary='$pseminary',porddate='$porddate',pordplace='$pordplace',pordby='$pordby',pminstring='$pminstring',paddress='$paddress',pemail='$pemail',pphone='$phone' where id=".$cid;

	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewreligiouspriest.php?msg=1");
	exit();
	}
	}
	


	$id=$_GET['id'];
	$sql = "SELECT * FROM religiouspriest where id=".$id;
	$result = $conn->query($sql);



		$row = $result->fetch_assoc();


		?>
		<form action="" method="post" onsubmit="return validateForm()" name="myForm">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Priest - <?php echo $row['pname']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Name</p>
	<p><input type="text" name="pname" class="form-control" value="<?php echo $row['pname']; ?>"></p>
</div>
<div class="col-md-3">
<p>Priest id</p>
	<p><input type="text" name="priestid" class="form-control" value="<?php echo $row['priestid']; ?>"></p>
</div>
<div class="col-md-3">
<p>Father</p>
	<p><input type="text" name="pfname" class="form-control" value="<?php echo $row['pfname']; ?>"></p>
</div>
<div class="col-md-3">
<p>Mother</p>
	<p><input type="text" name="pmnane" class="form-control" value="<?php echo $row['pmnane']; ?>"></p>
</div>


</div>



<div class="row">
<div class="col-md-3">
<p>Date of Birth</p>
	<p><input type="text" name="pdob" class="form-control" value="<?php echo $row['pdob']; ?>"></p>
</div>
<div class="col-md-3">
<p>Place of Birth</p>
	<p><input type="text" name="pplace" class="form-control" value="<?php echo $row['pplace']; ?>"></p>
</div>
<div class="col-md-3">
<p>Seminary</p>
	<p><input type="text" name="pseminary" class="form-control" value="<?php echo $row['pseminary']; ?>"></p>
</div>
<div class="col-md-3">
<p>Date of Ordination</p>
	<p><input type="text" name="porddate" class="form-control" value="<?php echo $row['porddate']; ?>"></p>
</div>


</div>

<div class="row">
<div class="col-md-3">
<p>Place of Ordination</p>
	<p><input type="text" name="pordplace" class="form-control" value="<?php echo $row['pordplace']; ?>"></p>
</div>
<div class="col-md-3">
<p>Ministering At</p>
	<p><input type="text" name="pminstring" class="form-control" value="<?php echo $row['pminstring']; ?>"></p>
</div>
<div class="col-md-3">
<p>Email</p>
	<p><input type="text" name="pemail" class="form-control" value="<?php echo $row['pemail']; ?>"></p>
</div>
<div class="col-md-3">
<p>Phone</p>
	<p><input type="text" name="phone" class="form-control" value="<?php echo $row['pphone']; ?>"></p>
</div>

</div>

<div class="row">
<div class="col-md-3">
<p>Ordained By</p>
	<p><input type="text" name="pordby" class="form-control" value="<?php echo $row['pordby']; ?>"></p>
</div>
<div class="col-md-3">
<p>Priest on Contract</p><p>
<select name="status">
<?php
if($row['status']=='priest')
{
 echo "<option value=men>Religious Men</option>";
 echo "<option value=priest selected=true>Religious Priest</option>";
}
else
{
echo "<option value=men selected=true>Religious Men</option>";
 echo "<option value=priest >Religious Priest</option>";
}
?>



</select></p>
</div>
<div class="col-md-6">
<p>Address</p>
	<p>
<textarea name="paddress" class="form-control" style="width: 400px; height: 100px;">
  <?php echo $row['paddress']; ?>
</textarea>
	</p>
</div>



</div>

<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-3">
<input type="hidden" name="cid" value="<?php echo $id ?>"/>

<input type="submit" name="Update" class="btn btn-success" value="Update"/>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">

</div>
</div>

	</form>
	
<?php
		$conn->close();
		?>
<?php include 'footer.php'; ?>


<?php ob_flush(); ?>


