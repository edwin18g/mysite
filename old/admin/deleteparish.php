<?php ob_start(); ?>	
<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

	<?php
	if(isset($_POST["delete"]))
	{

	$cid=$_POST['cid'];

	$sql = "delete from parish where id=".$cid;
	$val=$conn->query($sql);
	if($val)
	{
	header("Location:viewparish.php?msg=3");
	exit();
	}
	}
	


	$id=$_GET['id'];
	$sql = "SELECT * FROM parish where id=".$id;
	$result = $conn->query($sql);



		$row = $result->fetch_assoc();


		?>
		<form action="" method="post"  name="myForm">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Are You Sure to Delete - <?php echo $row['cname']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-3">
<input type="hidden" name="cid" value="<?php echo $id ?>"/>

<input type="submit" name="delete" class="btn btn-success" value="Delete"/>
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


