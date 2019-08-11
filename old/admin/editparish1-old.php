	<?php include 'header.php'; ?>
	<?php include 'config.php'; ?>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM parish where id=".$id;
	$result = $conn->query($sql);



		$row = $result->fetch_assoc();


		?>
		<form action="updateparish.php" method="post">
<div class="row">

			<div class="col-md-12">
			<div style="background-color:#fff;padding:5px;margin-top:12px;margin-bottom:5px;" >
							<center><h2><?php echo $row['cname']; ?></h2></center>
			</div>
			</div>
		</div>
<div class="row">
			<div class="col-md-12">
	<div class="row whitebg">
	<div class="col-md-6 ">
	<p>Patron Saint</p>
	<p><input type="text" name="psaint" value="<?php echo $row['psaint']; ?>"></p>
		<p>Established Year</p>
	<p><input type="text" name="estd" value="<?php echo $row['estd']; ?>"></p>
		<p>Substations</p>
	<p>
<textarea name="substation" style="width: 400px; height: 100px;">
  <?php echo $row['substation']; ?>
</textarea>
	</p>
	<p>Institutions</p>
	<p>
<textarea name="institution" style="width: 400px; height: 100px;">
  <?php echo $row['institution']; ?>
</textarea>
	</p>
	<p>Anbiyam</p>
	<p><input type="text" name="anbiyam" value="<?php echo $row['anbiyam']; ?>"></p>
<p>Pious Association</p>
	<p>
<textarea name="pious" style="width: 400px; height: 100px;">
  <?php echo $row['pious']; ?>
</textarea>
	</p>
<p>Families</p>
	<p><input type="text" name="families" value="<?php echo $row['families']; ?>"></p>
	<p>Population</p>
	<p><input type="text" name="population" value="<?php echo $row['population']; ?>"></p>
	<p>Website</p>
	<p><input type="text" name="website" value="<?php echo $row['website']; ?>"></p>
	<p>Telephone</p>
	<p><input type="text" name="telephone" value="<?php echo $row['telephone']; ?>"></p>
	<p>Special Groups</p>
	<p>
<textarea name="sgroups" style="width: 400px; height: 100px;">
  <?php echo $row['sgroups']; ?>
</textarea>
	</p>
	<p>Address</p>
	<p>
<textarea name="address" style="width: 400px; height: 100px;">
  <?php echo $row['address']; ?>
</textarea>
	</p>
	<p>Email</p>
	<p><input type="text" name="pemail" value="<?php echo $row['pemail']; ?>"></p>
	</div>
<div class="col-md-6 ">
    <h4>History</h4>

<input type="hidden" name="cid" value="<?php echo $id ?>"/>
<textarea name="area3" style="width: 500px; height: 300px;">
  <?php echo $row['chistory']; ?>
</textarea>
<input type="submit" value="Update"/>

		</div>
	</div>
</div>
	</div>
	</form>
	
<?php
		$conn->close();
		?>
<?php include 'footer.php'; ?>





