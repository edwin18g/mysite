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
if(isset($_POST["save"]))
	{

	
	$pname=mysqli_real_escape_string($conn,$_POST['pname']);
	$priestid=$_POST['priestid'];
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
	$nadd1=mysqli_real_escape_string($conn,$_POST['nadd1']);
	$nadd2=mysqli_real_escape_string($conn,$_POST['nadd2']);
	$nadd3=mysqli_real_escape_string($conn,$_POST['nadd3']);
	$bloodg=mysqli_real_escape_string($conn,$_POST['bloodg']);
	$pemail=$_POST['pemail'];
	$pphone=$_POST['pphone'];
	$pmobile=$_POST['pmobile'];

	$sql = "insert into diocesepriest(priestid,pname,pfname,pmnane,pdob,pplace,pseminary,porddate,pordplace,pordby,pminstring,paddress,pemail,pphone,pmobile,pimg,nadd1,nadd2,nadd3,bloodg) values('$priestid','$pname','$pfname','$pmnane','$pdob','$pplace','$pseminary','$porddate','$pordplace','$pordby','$pminstring','$paddress','$pemail','$pphone','$pmobile','$priestid.jpg','$nadd1','$nadd2','$nadd3','$bloodg')";
	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewdiocesepriest.php?msg=2");
	exit();
	}
	}
?>

		<form action="" method="post" onsubmit="return validateForm()" name="myForm">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Priest</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="row">
<div class="col-md-3">
<p>Name</p>
	<p><input type="text" name="pname" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Priest id</p>
	<p><input type="text" name="priestid" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Date of Birth</p>
	<p><input type="text" name="pdob" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Blood Group</p>
	<p><input type="text" name="bloodg" class="form-control"></p>
</div>
</div>



<div class="row">
<div class="col-md-3">
<p>Father</p>
	<p><input type="text" name="pfname" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Mother</p>
	<p><input type="text" name="pmnane" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Place of Birth</p>
	<p><input type="text" name="pplace" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Seminary</p>
	<p><input type="text" name="pseminary" class="form-control" ></p>
</div>


</div>

<div class="row">
<div class="col-md-3">
<p>Ministering At</p>
	<p><input type="text" name="pminstring" class="form-control"></p>
</div>
<div class="col-md-3">
<p>Ordained By</p>
	<p><input type="text" name="pordby" class="form-control"></p>
</div>
<div class="col-md-3">
<p>Date of Ordination</p>
	<p><input type="text" name="porddate" class="form-control" ></p>
</div>
<div class="col-md-3">
<p>Place of Ordination</p>
	<p><input type="text" name="pordplace" class="form-control" ></p>
</div>

</div>

<div class="row">
<div class="col-md-3">
<p>Email</p>
	<p><input type="text" name="pemail" class="form-control"></p>
<p>Phone</p>
	<p><input type="text" name="pphone" class="form-control"></p>
<p>Mobile</p>
	<p><input type="text" name="pmobile" class="form-control"></p>
</div>
<div class="col-md-6">
<p>Address</p>
	<p>
<textarea name="paddress" class="form-control" style="width: 400px; height: 100px;">
  <?php echo $row['paddress']; ?>
</textarea>
	</p>

</div>
<div class="col-md-3">
<p>Native Address</p>
	<p><input type="text" name="nadd1" class="form-control" ></p>
	<p><input type="text" name="nadd2" class="form-control" ></p>
	<p><input type="text" name="nadd3" class="form-control" "></p>

</div>


</div>

<div class="row">
<div class="col-md-3">
</div>

<div class="col-md-3">


<input type="submit" class="btn btn-success" name="save" value="Save"/>
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



