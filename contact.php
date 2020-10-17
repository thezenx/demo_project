<?php
include_once "include/connect.php";

if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `contact` (`name`, `lastname`, `email`, `subject`, `message`, `date_at`) 
        VALUES ('".$_POST['fname']."', 
             '".$_POST['lname']."',
             '".$_POST['email']."',
             '".$_POST['sub']."', 
			 '".$_POST['detail']."',
			 '".date("Y-m-d")."');";   
			
		   
        $result = $con->query($sql) or die($con->error);
		if ($result) {
			echo '<script> alert("บันทึกข้อมูลอุปกรณ์เรียบร้อยแล้ว")</script>';
			header('Refresh:0; url=contact.php');
		} else {
			echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
			header('Refresh:0; url=contact.php');
		}
	
	}

?>
<?php include "include/navbar.php" ?>
<!--img head-->
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/toursl4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>Contact us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
</aside>
<!--contact-->
<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Get In Touch</h3>
						<form action="contact.php" method="post" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname">First Name</label>
									<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="sub">Subject</label>
									<input type="text" name="sub" id="sub" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="detail">Message</label>
									<textarea name="detail" name="detail" id="detail" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<!-- <div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div> -->
							<div class="col-md-4">
								<p><span><i class="icon-phone3"></i></span> 081-0665909 , 093-3917847 </p>
							</div>
							<div class="col-md-4">
								<p><span><i class="fa fa-facebook-square text-primary"></i></span><a href="https://www.facebook.com/tourguideJJ/"> JJ Adventure tour</a></p>
							</div>
							<div class="col-md-4">
								<p><span><i class="icon-globe"></i></span> jjtourguide@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
</div>
  

<?php include "include/footer.php" ?>