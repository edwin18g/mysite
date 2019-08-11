<?php include 'config.php'; ?>

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
<center>Diocese of Kuzhithurai - Priest List</center>
</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<?php
$or=$_GET['or'];
if ($or=="1")
{
$sql = "SELECT * FROM diocesepriest order by pname";
}
else
{
$sql = "SELECT * FROM diocesepriest order by priestid";
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
			echo "<table border=1><tr><td>ID</td><td>Photo</td><td>Name</td><td>Address</td><td>DOB & Ord. Date</td><td>Contact</td><td>BG</td></td></tr>";
	while($row = $result->fetch_assoc()) 
	{
		$val++;


		echo "<tr><td>".$row['priestid']."</td><td>

<img  class=figure src=../images/diocesepriest/".$row['pimg']." onError=\"this.onerror=null;this.src='../images/diocesepriest/1000.png';\" width=80 height=80 border=1 />
</td><td>".$row['pname']."</td><td>".$row['nadd1']."</br>".$row['nadd2']."</br>".$row['nadd3']."</td><td>".$row['pdob']."<br><br>".$row['porddate']."</td><td>".$row['pemail']."<br><br>".$row['pphone']."</td><td>".$row['bloodg']."</td></tr>";

        }		
echo "</table>";
}

$conn->close();
?>
</div>
</div>

