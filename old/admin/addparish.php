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

	$cid=$_POST['cid'];
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$type=$_POST['type'];
$churchid=$_POST['churchid'];
$estd=$_POST['estd'];
$substation=$_POST['substation'];
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
$sql = "insert into parish(cname,churchid,estd,substation,psaint,institution,anbiyam,pious,families,population,website,telephone,sgroups,address,pemail,type) values('$cname','$churchid','$estd','$substation','$psaint','$institution','$anbiyam','$pious','$families','$population','$website','$telephone','$sgroups','$address','$pemail','$type')"; 

	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewparish.php?msg=1");
	exit();
	}
	}
	


		?>
		<form action="" method="post">

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Parish</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Parish Name</p>
	<p><input type="text" name="cname" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Parish id</p>
	<p><input type="text" name="churchid" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Patron Saint</p>
	<p><input type="text" name="psaint"></p>
</div>
<div class="col-md-3">
<p>Established Year</p>
	<p><input type="text" name="estd"></p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<p>Substations</p>
	<p>
<textarea name="substation" style="width: 400px; height: 100px;">
  
</textarea>
	</p>
</div>
<div class="col-md-6">
<p>Institutions</p>
	<p>
<textarea name="institution" style="width: 400px; height: 100px;">
  
</textarea>
	</p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<p>Pious Association</p>
	<p>
<textarea name="pious" style="width: 400px; height: 100px;">
 
</textarea>
	</p>
</div>
<div class="col-md-6">
<p>Special Groups</p>
	<p>
<textarea name="sgroups" style="width: 400px; height: 100px;">
 
</textarea>
	</p>
</div>
</div>

<div class="row">
<div class="col-md-3">
<p>Anbiyam</p>
	<p><input type="text" name="anbiyam" ></p>
</div>
<div class="col-md-3">
<p>Families</p>
	<p><input type="text" name="families" ></p>
</div>
<div class="col-md-3">
<p>Population</p>
	<p><input type="text" name="population" ></p>
</div>
<div class="col-md-3">
<p>Website</p>
	<p><input type="text" name="website" ></p>
</div>
</div>

<div class="row">
<div class="col-md-3">
<p>Telephone</p>
	<p><input type="text" name="telephone" ></p>
</div>
<div class="col-md-3">
	<p>Email</p>
	<p><input type="text" name="pemail" ></p>
</div>
<div class="col-md-6">
<p>Address</p>
	<p>
<textarea name="address" style="width: 400px; height: 100px;">
  
</textarea>
	</p>
</div>

</div>

<div class="row">
<div class="col-md-3">
<p>Parish/Shrine</p><p>
<select name="type">
<option>Parish</option>
<option>Shrine</option>

</select></p>
</div>
<div class="col-md-3">
	
<input type="hidden" name="cid" value="<?php echo $id ?>"/>

<input type="submit" value="Add Parish" class="btn btn-success" name="insert"/>
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



