<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<div class="row">
<div class="col-md-12 whitebg2">
<div class="col-md-4">
</div>
<div class="col-md-4">
<center><font size="6px"><b>Diocesan Priests</b></font></center>
</div>
<div class="col-md-4">
<?php
$or=$_GET['or'];
if ($or=="1")
{
$sql = "SELECT * FROM diocesepriest order by pname";
?>
<br><center><font size="2px"><a href=diocesepriestview.php?or=0>Click here to Change the Order</a></font></center>

<?php
}
else
{
$sql = "SELECT * FROM diocesepriest order by priestid";
?>
<br><center><font size="2px"><a href=diocesepriestview.php?or=1>Click here to Change the Order</a></font></center>
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
<a href=diocesepriest.php?id=".$row['priestid'].">
<img  class=figure src=images/diocesepriest/".$row['pimg']." onError=\"this.onerror=null;this.src='images/diocesepriest/1000.png';\" width=80 height=80 border=1 />
<br/>
".$row['pname']."</a><p>&nbsp</p></div>";
		
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
