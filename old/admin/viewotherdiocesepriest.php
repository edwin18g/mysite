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
                <div class="col-lg-12">
  	<a href="addotherdiocesepriest.php" class="btn btn-success">Add New Priest</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
Other Diocese Priest/Priest on Contract
</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
<div class="col-md-12">
<div class="col-md-3">
</div>
<div class="col-md-6">
<center><font size="6px"><b></b></font></center>
</div>
<div class="col-md-3">
<?php
$or=$_GET['or'];
if ($or=="1")
{
$sql = "SELECT * FROM odiocesepriest order by pname";
?>
<br><center><font size="2px"><a href=viewotherdiocesepriest.php?or=0>Click here to Change the Order</a></font></center>

<?php
}
else
{
$sql = "SELECT * FROM odiocesepriest order by priestid";
?>
<br><center><font size="2px"><a href=viewotherdiocesepriest.php?or=1>Click here to Change the Order</a></font></center>
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
".$row['pname']."<p><a href=editotherdiocesepriest.php?id=".$row['id'].">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a href=deleteotherdiocesepriest.php?id=".$row['id'].">Delete</a></p>";
if($row['contract']=='yes')
{
echo "<p>Contract Priest</p>";
}
else
{
echo "<p>Other Diocese Priest</p>";
}
echo "</div>";
		
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
