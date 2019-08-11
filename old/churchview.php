<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<div class="row">
<div class="col-md-12 whitebg2">
<div class="col-md-4">
</div>
<div class="col-md-4">
<center><font size="6px"><b>Diocesan Parishes</b></font></center>
</div>
<div class="col-md-4">
<?php
$or=$_GET['or'];
if ($or=="1")
{
$sql = "SELECT * FROM parish order by cname";
?>
<br><center><font size="2px"><a href=churchview.php?or=0>Click here to Change the Order</a></font></center>

<?php
}
else
{
$sql = "SELECT * FROM parish where type='Parish' order by churchid";
?>
<br><center><font size="2px"><a href=churchview.php?or=1>Click here to Change the Order</a></font></center>
<?php
}
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

		echo "<div class=col-md-6 style=padding:2px;> "."<img class=figure2 src=images/parish/".$row['cimg']." onError=\"this.onerror=null;this.src='images/parish/churchno.jpg';\" width=60 height=40 /><a href=church.php?id=".$row['id'].">".$row['cname']."</a></div>";

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
