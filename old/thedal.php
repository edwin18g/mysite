<?php include 'header.php'; ?>
<?php include 'admin/config.php'; ?>

<?php
$sql = "SELECT * FROM thedal order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    $val=0;
    echo "<div class='row whitebg1'><div class='col-md-2'></div>";
    echo "<div class='col-md-4 whitebg1'>";
    echo "<img src='images/thedal.jpg' width='100%' class='topmargin' />";
    echo "</div>";
    echo "<div class='col-md-4'>";

	while($row = $result->fetch_assoc()) 
	{
		$val++;
		if($val==1)
		{
			
		}

		echo "<h3><a href='thedal/".$row['cfilename']."' target='_blank'>
<br>".$row['ctitle']."</a></h3>";

		if($val==3)
		{
			
			$val=0;
		}
	}
	echo "</div>";
    echo "<div class='col-md-2'></div></div>";

} 
else 
{
	echo "0 results";
}

$conn->close();
?>
<!--
        <div class="row">
          <div class="col-md-4 whitebg1">
<center>
<a href="thedal/December.pdf"target=“_blank”><img src="thedal/December-1.jpg" width="80%" class="topmargin" />
<br>
<h3>December 2015 Edition</h3></a>
</center>
          </div>
          <div class="col-md-4 whitebg1">
<center>
<a href="thedal/November.pdf"target=“_blank”><img src="thedal/November-1.jpg" width="80%" class="topmargin" />
<br>
<h3>November 2015 Edition</h3></a>
</center>
          </div>
          <div class="col-md-4 whitebg1">
<center>
<a href="thedal/October.pdf" target=“_blank”><img src="thedal/October-1.jpg" width="80%" class="topmargin" />
<br>
<h3>October 2015 Edition</h3></a>
</center>
          </div>
          </div>
          -->
<?php include 'footer.php'; ?>
