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
<div style="background-color:#fff;padding:5px;margin-top:12px;margin-bottom:5px;" >
				<center><h2><?php echo $row['cname']; ?></h2></center>
</div>
			</div>
		</div>
<div class="row">
			<div class="col-md-12">
<div class="row row-flex row-flex-wrap">
			<div class="col-md-6">
				<div class="whitebg1 verti">
				<center>		<img class="borderimg1" src="images/parish/<?php echo $row['cimg']; ?>" onError="this.onerror=null;this.src='images/parish/churchno.jpg';" width="100%" />
</center>
				</div>
			</div>
			<div class="col-md-3" >
				<div class="whitebg1 personal">
<table>
	<tr><td colspan="2"><h2 >Parish Information</h2></td></tr>
	
	<?php if($row['psaint']!=null){?>
	<tr><td>Patron Saint:</td><td><?php echo $row['psaint']; ?></td></tr>
	<?php }?>
	<?php if($row['estd']!=null){?>
	<tr><td>Established Year:</td><td><?php echo $row['estd']; ?></td></tr>
	<?php }?>
	<?php if($row['substation']!=null){?>
	<tr><td>Substations:</td><td><?php echo $row['substation']; ?></td></tr>
	<?php }?>
	<?php if($row['families']!=null){?>
	<tr><td>Families:</td><td><?php echo $row['families']; ?></td></tr>
	<?php }?>
	<?php if($row['anbiyam']!=null){?>
	<tr><td>Anbiyam:</td><td><?php echo $row['anbiyam']; ?></td></tr>
	<?php }?>
	<?php if($row['pious']!=null){?>
	<tr><td>Pious Associations:</td><td><?php echo $row['pious']; ?></td></tr>
	<?php }?>
	<?php if($row['population']!=null){?>
	<tr><td>Population:</td><td><?php echo $row['population']; ?></td></tr>
	<?php }?>
	<?php if($row['institution']!=null){?>
	<tr><td>Institutions:</td><td><?php echo $row['institution']; ?></td></tr>
	<?php }?>
	<?php if($row['sgroups']!=null){?>
	<tr><td>Special Groups:</td><td><?php echo $row['sgroups']; ?></td></tr>
	<?php }?>
</table>
				


				</div>
			</div>
			<div class="col-md-3">
<div class="whitebg1 contact">
			
				<h2>Contact</h2>
				<?php if($row['paddress']!=null){?>
							<b><p>Address:</p></b><p><span><?php echo $row['address']; ?></span></p>
							<?php }?>
							<?php if($row['telephone']!=null){?>
							<b><p>Phone:</p></b><p><span><?php echo $row['telephone']; ?></span></p>
							<?php }?>
							<?php if($row['pemail']!=null){?>
							<b><p>Email:</p></b><p><span><?php echo $row['pemail']; ?></span></p>
							<?php }?>
							<?php if($row['website']!=null){?>
							<b><p>Website:</p></b><p><span><?php echo $row['website']; ?></span></p>
							<?php }?>
							
						</div>
				
			</div>
		</div>





</div>
	</div>
	

<?php
		$conn->close();
		?>
<?php include 'footer.php'; ?>
