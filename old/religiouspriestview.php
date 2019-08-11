<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<div class="row">
<div class="col-md-12 whitebg2">
<center><font size="6px"><b>Religious Priests</b></font></center>
</div>
</div>


<div class="row">
<div class="col-md-12 whitebg1">

<?php
$sql = "SELECT * FROM religiouspriest where status='priest' order by priestid";
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
<a href=religiouspriest.php?id=".$row['id'].">
<img  class=figure src=images/diocesepriest/".$row['pimg']." onError=\"this.onerror=null;this.src='images/diocesepriest/1000.jpg';\" width=80 height=80 border=1 />
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
