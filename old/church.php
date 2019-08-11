	<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
	<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM parish where id=".$id;
	$result = $conn->query($sql);



		$row = $result->fetch_assoc();


		?>
<div class="row">
			<div class="col-md-12">
<div class="whitebg3">
				<center><h2><?php echo $row['cname']; ?></h2></center>
</div>
			</div>
		</div>
<div class="row">
			<div class="col-md-12">
			<div class="col-md-8" style="margin-left:-15px">
				<center>		<img class="figure1" src="images/parish/<?php echo $row['cimg']; ?>" onError="this.onerror=null;this.src='images/parish/churchno.jpg';" width="100%" />
</center>
			</div>
			<div class="col-md-4 whitebg4">

	<h4><b>Parish Information</b></h4>
<table>	
	<?php if($row['psaint']!=null){?>
	<tr><td>Patron Saint:</td><td><?php echo $row['psaint']; ?></td></tr>
	<?php }?>
	<?php if($row['estd']!=null){?>
	<tr><td>Est. Year:</td><td><?php echo $row['estd']; ?></td></tr>
	<?php }?>
	<?php if($row['substation']!=null){?>
	<tr style="vertical-align:top"><td>Substations:</td><td><?php echo $row['substation']; ?></td></tr>
	<?php }?>
	<?php if($row['families']!=null){?>
	<tr><td>No.of Families:</td><td><?php echo $row['families']; ?></td></tr>
	<?php }?>
	<?php if($row['anbiyam']!=null){?>
	<tr><td>Anbiyam:</td><td><?php echo $row['anbiyam']; ?></td></tr>
	<?php }?>
	<?php if($row['pious']!=null){?>
	<tr style="vertical-align:top"><td>Pious Associations:</td><td><?php echo $row['pious']; ?></td></tr>
	<?php }?>
	<?php if($row['sgroups']!=null){?>
	<tr style="vertical-align:top"><td>Special Groups:</td><td><?php echo $row['sgroups']; ?></td></tr>
	<?php }?>
	<?php if($row['population']!=null){?>
	<tr><td>Population:</td><td><?php echo $row['population']; ?></td></tr>
	<?php }?>
	<?php if($row['institution']!=null){?>
	<tr style="vertical-align:top"><td>Institutions:</td><td><?php echo $row['institution']; ?></td></tr>
	<?php }?>

	<?php if($row['paddress']!=null){?>
							<tr style="vertical-align:top"><td><b><p>Address:</p></b></td><td><p><span><?php echo $row['address']; ?></span></p></td></tr>
							<?php }?>
							<?php if($row['telephone']!=null){?>
							<tr><td><b><p>Phone:</p></b></td><td><p><span><?php echo $row['telephone']; ?></span></p></td></tr>
							<?php }?>
							<?php if($row['pemail']!=null){?>
							<tr><td><b><p>Email:</p></b></td><td><p><span><?php echo $row['pemail']; ?></span></p></td></tr>
							<?php }?>
							<?php if($row['website']!=null){?>
							<tr><td><b><p>Website:</p></b></td><td><p><span><?php echo $row['website']; ?></span></p></td></tr>
							<?php }?>

</table>
				

							
     </div>
				
   </div>
</div>
	

<?php
		$conn->close();
		?>
<?php include 'footer.php'; ?>
