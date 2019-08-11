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
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$type=$_POST['type'];
$churchid=$_POST['churchid'];
$estd=$_POST['estd'];
$substation=mysqli_real_escape_string($conn,$_POST['substation']);
$psaint=mysqli_real_escape_string($conn,$_POST['psaint']);
$institution=$_POST['institution'];
$anbiyam=$_POST['anbiyam'];
$pious=$_POST['pious'];
$families=$_POST['families'];
$population=$_POST['population'];
$website=$_POST['website'];
$telephone=$_POST['telephone'];
$sgroups=mysqli_real_escape_string($conn,$_POST['sgroups']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$pemail=$_POST['pemail'];
$sql = "update parish set type='$type',cname='$cname',churchid='$churchid',estd='$estd',substation='$substation',psaint='$psaint',institution='$institution',anbiyam='$anbiyam',pious='$pious',families='$families',population='$population',website='$website',telephone='$telephone',sgroups='$sgroups',address='$address',pemail='$pemail' where id=".$cid;

	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewparish.php?msg=1");
	exit();
	}
	}
	$id=$_GET['id'];
	$sql = "SELECT * FROM parish where id=".$id;
	$result = $conn->query($sql);



		$row = $result->fetch_assoc();


		?>
		<form action="" method="post">

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Parish - <?php echo $row['cname']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Parish Name</p>
	<p><input type="text" name="cname" class="form-control" value="<?php echo $row['cname']; ?>"></p>
</div>
<div class="col-md-3">
<p>Parish id</p>
	<p><input type="text" name="churchid" class="form-control" value="<?php echo $row['churchid']; ?>"></p>
</div>
<div class="col-md-3">
<p>Patron Saint</p>
	<p><input type="text" name="psaint" value="<?php echo $row['psaint']; ?>"></p>
</div>
<div class="col-md-3">
<p>Established Year</p>
	<p><input type="text" name="estd" value="<?php echo $row['estd']; ?>"></p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<p>Substations</p>
	<p>
<textarea name="substation" style="width: 400px; height: 100px;">
  <?php echo $row['substation']; ?>
</textarea>
	</p>
</div>
<div class="col-md-6">
<p>Institutions</p>
	<p>
<textarea name="institution" style="width: 400px; height: 100px;">
  <?php echo $row['institution']; ?>
</textarea>
	</p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<p>Pious Association</p>
	<p>
<textarea name="pious" style="width: 400px; height: 100px;">
  <?php echo $row['pious']; ?>
</textarea>
	</p>
</div>
<div class="col-md-6">
<p>Special Groups</p>
	<p>
<textarea name="sgroups" style="width: 400px; height: 100px;">
  <?php echo $row['sgroups']; ?>
</textarea>
	</p>
</div>
</div>

<div class="row">
<div class="col-md-3">
<p>Anbiyam</p>
	<p><input type="text" name="anbiyam" value="<?php echo $row['anbiyam']; ?>"></p>
</div>
<div class="col-md-3">
<p>Families</p>
	<p><input type="text" name="families" value="<?php echo $row['families']; ?>"></p>
</div>
<div class="col-md-3">
<p>Population</p>
	<p><input type="text" name="population" value="<?php echo $row['population']; ?>"></p>
</div>
<div class="col-md-3">
<p>Website</p>
	<p><input type="text" name="website" value="<?php echo $row['website']; ?>"></p>
</div>
</div>

<div class="row">
<div class="col-md-3">
<p>Telephone</p>
	<p><input type="text" name="telephone" value="<?php echo $row['telephone']; ?>"></p>
</div>
<div class="col-md-3">
	<p>Email</p>
	<p><input type="text" name="pemail" value="<?php echo $row['pemail']; ?>"></p>
</div>
<div class="col-md-6">
<p>Address</p>
	<p>
<textarea name="address" style="width: 400px; height: 100px;">
  <?php echo $row['address']; ?>
</textarea>
	</p>
</div>

</div>

<div class="row">
<div class="col-md-3">
<p>Parish/Shrine</p><p>
<select name="type">
<?php
if($row['type']=='Parish')
{
 echo "<option>Shrine</option>";
 echo "<option selected=true>Parish</option>";
}
else
{
echo "<option selected=true>Shrine</option>";
 echo "<option>Parish</option>";
}
?>



</select></p>
</div>
<div class="col-md-3">
	
<input type="hidden" name="cid" value="<?php echo $id ?>"/>

<input type="submit" value="Update" class="btn btn-success" name="Update"/>
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


