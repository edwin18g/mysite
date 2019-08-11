<?php include 'header.php'; ?>
<?php include '../config.php'; ?>
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
<?php
if(isset($_GET['msg']))
{
$vl=$_GET['msg'];
if($vl==1)
{
echo "<font color=green>News Letter Updated Successfully</font>";
}
elseif($vl==2)
{
echo "<font color=green>News Letter Added Successfully</font>";
}
elseif($vl==3)
{
echo "<font color=green>News Letter Deleted Successfully</font>";
}
}
?>
</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
  	<a href="addnewsletter.php" class="btn btn-success">Add News Letter</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
<div class="col-md-12 whitebg2">
<div class="col-md-3">
</div>
<div class="col-md-6">
<center><font size="6px"><b>News Letter</b></font></center>
</div>
<div class="col-md-3">
<?php

$sql = "SELECT * FROM newsletter order by id";

?>

</div>
</div>
</div>


<div class="row">
<div class="col-md-12 whitebg1">

<?php
//$sql = "SELECT * FROM parish";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    $val=0;
	while($row = $result->fetch_assoc()) 
	{
		$val++;
		if($val==1)
		{
			echo "<div class=row>";
		}

		echo "<div class=col-md-12>".$row['ctitle']."&nbsp&nbsp<a href=editnewsletter.php?id=".$row['id'].">Edit</a>&nbsp&nbsp&nbsp<a href=deletenewsletter.php?id=".$row['id'].">Delete</a></div>";

		if($val==2)
		{
			echo "</div>";
			$val=0;
		}
	}
} 
else 
{
	echo "0 results";
}

$conn->close();
?>
</div>
</div>
<?php include 'footer.php'; ?>
