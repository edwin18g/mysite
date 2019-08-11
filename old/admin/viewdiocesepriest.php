<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
<?php
if(isset($_GET['msg']))
{
$vl=$_GET['msg'];
if($vl==1)
{
echo "<font color=green>Priest Details Updated Successfully</font>";
}
elseif($vl==2)
{
echo "<font color=green>Priest Details Added Successfully</font>";
}
elseif($vl==3)
{
echo "<font color=green>Priest Details Deleted Successfully</font>";
}
}
?>
</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-4">
  	<a href="adddiocesepriest.php" class="btn btn-success">Add New Priest</a>
                </div>
                <div class="col-lg-4">
  	<a href="printdiocesepriest.php?or=0" class="btn btn-success">Print Order By ID</a>
                </div>
                <div class="col-lg-4">
  	<a href="printdiocesepriest.php?or=1" class="btn btn-success">Print Order By Name</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
</div>
<div class="col-md-4">
<center><font size="6px"><b>Diocese priest</b></font></center>
</div>
<div class="col-md-4">
<?php
$or=$_GET['or'];
if ($or=="1")
{
$sql = "SELECT * FROM diocesepriest order by pname";
?>
<br><center><font size="2px"><a href=viewdiocesepriest.php?or=0>Click here to Change the Order</a></font></center>

<?php
}
else
{
$sql = "SELECT * FROM diocesepriest order by priestid";
?>
<br><center><font size="2px"><a href=viewdiocesepriest.php?or=1>Click here to Change the Order</a></font></center>
<?php
}
?>

</div>
</div>
</div>
<div class="row">
<div class="col-md-12 whitebg1">

<?php
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $val=0;
	while($row = $result->fetch_assoc()) 
	{
		$val++;
		if($val==1)
		{
			echo "<div class=row>";
		}
//<img src=images/diocesepriest/".$row['pimg']." width=50 height=50 />



		echo "<div class=col-md-2>"."

<img  class=figure src=../images/diocesepriest/".$row['pimg']." onError=\"this.onerror=null;this.src='../images/diocesepriest/1000.png';\" width=80 height=80 border=1 />
<br/>
".$row['pname']."<p><a href=editdiocesepriest.php?id=".$row['id'].">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a href=deletediocesepriest.php?id=".$row['id']." onclick='return confirm('Are you sure you wish to delete this Record?');'>Delete</a></p></div>";
		
		if($val==6)
		{
			echo "</div>";
			$val=0;
		}
	}
} else {
	echo "0 results";
}

$conn->close();
?>
</div>
</div>
<?php include 'footer.php'; ?>
