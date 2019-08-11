<?php include 'header.php'; ?>
 <div class="row">
                    <div class="col-md-12 whitebg2">
                  <center>  <h3>Contact Us</h3></center>
                    </div>
                    </div>


				<div class="row">
					<div class="col-md-12 whitebg">

<?php
$result="...";
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        
        $to = 'xaviersengg@yahoo.com'; 
        $subject = 'Kuzhithurai Diocese - Contact us';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
//if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $email)) {
        $result='<div class="col-md-4"></div><div class="col-md-4 alert alert-success"><center>Thank You!</center></div><div class="col-md-4"></div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
echo $result;
}
else
{
?>
<br/>
<form class="form-horizontal" role="form" method="post" action="contactus.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Your Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
					</div>
				</div>
<?php }?>
				<div class="row">
 <div class="col-md-12 whitebg2">

 <div class="row">
 <div class="col-md-4">

                            <b><p>Address:</p></b><p><span>Diocese of Kuzhithurai<br/>Bishop’s House,<br/>P.B. No.1</br>Unnamalaikadai – 629171</br>K.K.Dist, Tamil Nadu</span></p>
                    <b><p>Phone:</p></b><p><span>04651-272077</span></p>
 <b><p>Email:</p></b><p><span>rcdiocesekuzhithurai@gmail.com</span></p>         
                        
 </div>

 <div class="col-md-8">

 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16588.02983126123!2d77.23520452384743!3d8.304332080229145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1452162073626" width="700" height="350" frameborder="0" style="border:1" allowfullscreen></iframe>
 </div>

</div>
 </div>



</div>
<?php include 'footer.php'; ?>
