<?php

include "include/connect.php";



$sql = "SELECT book.order_id,book.date,book.datebook,book.payments,book.Advlt,book.Chid,tour.Tour_name,tour.Chid_price,tour.Advlt_price,customer.cus_name,customer.cus_last,customer.cus_email,customer.phone 
FROM  (( `book`
INNER JOIN customer ON book.cus_ID = customer.cus_ID )
INNER JOIN tour ON book.Tour_ID = tour.Tour_ID ) WHERE book.order_id = '". $_GET['id']."' ";
$result = $con->query($sql) or die($con->error);
$rowdeteil =$result ->fetch_assoc() ;
?>

<?php include "include/navbar.php" ?>

<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h1>Payment notification</h1>
						<form action="updatepay.php" method="post" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname"><h2>Invoice No.</h2></label>
									<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $rowdeteil ['order_id']; ?>" readonly>
								</div>
								<div class="col-md-6">
									<label for="lname"><h2>Tour Name</h2></label>
									<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $rowdeteil ['Tour_name']; ?>" readonly>
								</div>
							</div>

                            <div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname"><h2>First Name</h2></label>
									<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $rowdeteil ['cus_name']; ?>" readonly>
								</div>
								<div class="col-md-6">
									<label for="lname"><h2>Last Name</h2></label>
									<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $rowdeteil ['cus_last']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 padding-bottom">
									<label for="fname"><h2>Method of payment</h2></label><br>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"><h3><img src="images/SCB.png" style="width:40px;"> Siam commercial bank (Ref.1) 409-0506-222 Miss.Somjai Puangbanyen</h3>  </label><br><h6 class="text-danger">***Please keep the money transfer slip for upload.</h6><br>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"><h3><img src="images/PromptPay.jpg" style="width:80px;"> PromptPay 081-066-5909 Miss.Somjai Puangbanyen</h3>  </label><br><h6 class="text-danger">***Please keep the money transfer slip for upload.</h6><br>
										<!-- <label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"><h3>Transfer money via formptpay</h3>  </label><br> -->
										
									</label>
								</div>
								<div class="col-md-6">
									<label for="Date"><h2>Date of transfer</h2></label>
									<input type="date" name="Date" id="lname" class="form-control" value="" >
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12 padding-bottom">
                                    <input type="file" id="myFile"  name="file">
									<span><h5 class="text-danger">***Please upload the transfer slip correctly and clearly.***</h5></span>
								</div>
							</div>

                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

							<div class="form-group text-center">
								<input type="submit" name="submit" value="Send" class="btn btn-primary">
	
							</div>

						</form>		
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						
						<div class="row contact-info-wrap">
							
						</div>
					</div>
				</div>
			</div>
        </div>
</div>

<?php include "include/footer.php" ?>