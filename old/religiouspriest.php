	<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
	<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM religiouspriest where id=".$id;
	
	$result = $conn->query($sql);
	
	
		$row = $result->fetch_assoc();


		?>
		<div class="row">
			<div class="col-md-12">
<div style="background-color:#fff;padding:5px;margin-top:12px;" >
				<center><h2><?php echo $row['pname']; ?></h2></center>
</div>
			</div>
		</div>
		<div class="row row-flex row-flex-wrap">
			<div class="col-md-4">
				<div class="whitebg1 verti">
				<center><img class="borderimg" src="images/diocesepriest/<?php echo $row['pimg']; ?>" onError="this.onerror=null;this.src='images/diocesepriest/1000.jpg';" /></center>
				</div>
			</div>
			<div class="col-md-4" >
				<div class="whitebg1 personal">
<table>
	<tr><td colspan="2"><h2 >Personal Information</h2></td></tr>
<?php if($row['pdiocese']!=null){?>
	<tr><td>Congregation:</td><td><?php echo $row['pdiocese']; ?></td></tr>
<?php }?>

<?php if($row['pfname']!=null){?>
	<tr><td>Father:</td><td><?php echo $row['pfname']; ?></td></tr>
<?php }?>
<?php if($row['pmnane']!=null){?>
	<tr><td>Mother:</td><td><?php echo $row['pmnane']; ?></td></tr>
<?php }?>
<?php if($row['pdob']!=null){?>
	<tr><td>Date of Birth:</td><td><?php echo $row['pdob']; ?></td></tr>
<?php }?>
<?php if($row['pplace']!=null){?>
	<tr><td>Place of Birth:</td><td><?php echo $row['pplace']; ?></td></tr>
<?php }?>
<?php if($row['pseminary']!=null){?>
	<tr><td>Seminary:</td><td><?php echo $row['pseminary']; ?></td></tr>
<?php }?>
<?php if($row['porddate']!=null){?>
	<tr><td>Date of Ordination:</td><td><?php echo $row['porddate']; ?></td></tr>
<?php }?>
<?php if($row['pordplace']!=null){?>
	<tr><td>Place of Ordination:</td><td><?php echo $row['pordplace']; ?></td></tr>
<?php }?>
<?php if($row['pordby']!=null){?>
	<tr><td>Ordained By:</td><td><?php echo $row['pordby']; ?></td></tr>
<?php }?>
<?php if($row['pminstring']!=null){?>
	<tr><td>Ministering At:</td><td><?php echo $row['pminstring']; ?></td></tr>
<?php }?>
</table>
				


				</div>
			</div>
			<div class="col-md-4">
<div class="whitebg1 contact">
			
				<h2>Contact</h2>
<?php if($row['paddress']!=null){?>
							<b><p>Address:</p></b><p><span><?php echo $row['paddress']; ?></span></p>
<?php }?>
<?php if($row['phone']!=null){?>
							<b><p>Phone:</p></b><p><span><?php echo $row['phone']; ?>+91-<?php echo $row['pmobile']; ?></span></p>
<?php }?>
<?php if($row['pemail']!=null){?>
							<b><p>Email:</p></b><p><span><?php echo $row['pemail']; ?></span></p>
<?php }?>
							
						</div>
				
			</div>
		</div>
		<?php
		$conn->close();
		?>
		<?php include 'footer.php'; ?>
