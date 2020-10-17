<?php

include "include/connect.php";



$sql = "SELECT book.order_id,book.date,book.datebook,book.payments,book.Advlt,book.book_img,book.Chid,tour.Tour_name,tour.Chid_price,tour.Advlt_price,customer.cus_name,customer.cus_last,customer.cus_email,customer.phone 
FROM  (( `book`
INNER JOIN customer ON book.cus_ID = customer.cus_ID )
INNER JOIN tour ON book.Tour_ID = tour.Tour_ID ) WHERE book.order_id = '". $_GET['id']."' ";
$result = $con->query($sql) or die($con->error);
$rowdeteil =$result ->fetch_assoc() ;
?>


<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JJ Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<style type="text/css">
@media print{
    #hid{display:none;

    }
}


</style>


            <div id="dataTable" class="container">
				<div class="row">
                    <!-- order -->
                    <div class="col-md-10 col-md-offset-1 animate-box">   
                        <br><h1 style="font-weight:bold;text-align: center;">Confirm Order</h1>
                        <div class="row col-md-12 padding-bottom " >
							<h3 class="font-weight-bold">JJ Adventure tour company</h3></span>
                        </div>
                        <div class="row col-md-12 padding-bottom">
						<h4 class="font-weight-bold">Invoice No. <?php echo $rowdeteil['order_id']?></h4>
                        </div>
						<div class="row col-md-12 padding-bottom">
						<h4 class="font-weight-bold">Tax Invoice.53/00194</h4>
                        </div>
						<div class="row col-md-12 padding-bottom">
						<h4 class="font-weight-bold">Email jjtourguide@gmail.com</h4>
                        </div>
						<div class="row col-md-12 padding-bottom">
						<h4 class="font-weight-bold">Tel. 081-0665909, 093-3917847 </h4>
                        </div>
                        <div class="col-md-12 padding-bottom">
                        <br><h2 class="font-weight-bold">Customer</h2><br>
                            <div class="row form-group">
								<div class="col-md-3 padding-bottom">
									<span><h3>First Name</h3></span>
									<span><?php echo $rowdeteil['cus_name']?></span>
								</div>
								<div class="col-md-3">
									<span><h3>Last Name</h3></span>
									<span><?php echo $rowdeteil['cus_last']?></span>
								</div>
                                <div class="col-md-3">
									<span><h3>Email</h3></span>
									<span><?php echo $rowdeteil['cus_email']?></span>
								</div>
								<div class="col-md-3">
									<span><h3>Phone Number</h3></span>
									<span><?php echo $rowdeteil['phone']?></span>
								</div>
							</div>
                        </div>
                    </div>
                
                    <!-- /order -->
					<div class="col-md-10 col-md-offset-1 animate-box">                       
						<form action="" method="post" enctype="multipart/form-data">
                            <!--customer  -->
                                
                            <!-- /customer -->
                            <!-- Package -->
                                <br><h2 class="font-weight-bold">Description</h2><br>
                                <div class="row form-group">
                                   
                                        <div class="col-md-6 padding-bottom">
                                            <span><h3>Tour name</h3></span>
                                            <span><?php echo $rowdeteil['Tour_name']?></span>
                                        </div>
                                        <div class="col-md-6 padding-bottom">
                                            <span><h3>Date of Travel</h3></span>
                                            <span><?php echo $rowdeteil['date']?></span>
                                        </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 padding-bottom">
                                        <table class="table text-center">
                                            <thead class="thead bg-success text-uppercase">
                                                <tr>
                                                <th scope="col">Description</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Unit price</th>
                                                <th scope="col">amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="font-weight-bold text-left">Adult</td>
                                                <td><?php echo $rowdeteil['Advlt']?></td>
                                                <td><?php echo $rowdeteil['Advlt_price']?></td>
                                                <td></td>
                                                </tr>
                                                <tr>
                                                <td class="font-weight-bold text-left">Child</td>
                                                <td><?php echo $rowdeteil['Chid']?></td>
                                                <td><?php echo $rowdeteil['Chid_price']?></td>
                                                <td></td>
                                                </tr>
                                                <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $rowdeteil['payments']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col-md-12 padding-bottom text-right">
                                    <span><h2 class="font-weight-bold">Amount</h2></span>
                                            <span><h4><?php echo $rowdeteil['payments']?></h4></span>
                                    </div>
                                </div> -->
                            <!-- /Package -->
                            <!-- CF -->
                                <h2 class="font-weight-bold">Proof of payment</h2><br>
                                <div class="row form-group">
                                    <div class="col-md-12 padding-bottom text-right">
                                        <div class="col-md-12 padding-bottom">
                                            <img src="images/<?php echo $rowdeteil['book_img']?>" class="img-rounded" style="width:50%">
                                            
                                            <span><h3 class="font-weight-bold">Confirm payment</h3></span>
                                            <span><h5 class="font-weight-bold">Somjai Phuangbanyen</h5></span>
                                            <span><h5>(Miss Somjai Phuangbanyen)</h5></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-bottom ">
                                        <div class="col-md-12 padding-bottom">
                                            <span><h5 class="font-weight-bold text-danger">**Please call back To receive the service From company. Before the deadline Tour</h5></span>
                                            <span><h5 class="font-weight-bold text-danger">Tel. 081-0665909, 093-3917847</h5></span>
                                        </div>
                                    </div>
                                </div>
                            <!-- /CF -->
							<div class="form-group text-center" id="hid">
								<button class="btn btn-info" onClick="window.print()">print</button>
							</div>

						</form>		
					</div>
					
				</div>
			</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!--...-->
