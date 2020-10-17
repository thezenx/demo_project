<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JJ Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="apple-touch-icon" sizes="180x180" href="admin/dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="admin/dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="admin/dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="admin/dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="admin/dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="admin/dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="admin/dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
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
	
<style>
		body {margin:0;font-family:Arial}

		.topnav {
		overflow: hidden;
		background-color: #2C3E4C;
		
		}
		
		.topnav a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
		}

		.active {
		background-color: #4CAF50;
		color: white;
		}

		.topnav .icon {
		display: none;
		}



		.topnav a:hover{
		background-color: #68CF0D;
		color: white;
		}


		@media screen and (max-width: 600px) {
		.topnav a:not(:first-child){
			display: none;
		}
		.topnav a.icon {
			float: right;
			display: block;
		}
		}
		/* sticky-top */
		@media screen and (max-width: 600px) {
		.topnav.responsive {position: relative;}
		.topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		}
		.topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		}
		.topnav.responsive {float: none;}
		.topnav.responsive  {position: relative;}
		.topnav.responsive {
			display: block;
			width: 100%;
			text-align: left;
		}
		}
		@media only screen and (max-width: 768px) {
		/* For mobile phones: */
		[class*="col-"] {
			width: 100%;
		}
		}
</style>

	</head>
	<body >
		

	<div class="topnav" id="myTopnav">
		<?php if(isset($_SESSION['cus_ID'])){?>
		<a href="index.php"><img src="images/logo.png" style="width:60px " class="img-circle"></a>
		<a href="index.php">Home</a>
        <a href="tour.php">Tours</a>
		<a href="blog.php">Blog</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
		<a href="customer/index.php?id=<?php echo$_SESSION['cus_ID']?>"><?php echo$_SESSION['cus_name']?></a>
		<!-- <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> -->
				
		<?php }else{ ?>
		<a href="index.php"><img src="images/logo.png" style="width:60px " class="img-circle"></a>
		<a href="index.php">Home</a>
        <a href="tour.php">Tours</a>
		<a href="blog.php">Blog</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
		<a href="login.php">Login</a>
		<a href="signup.php">Sign up</a>
		<?php }?>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

		


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


</script>


	