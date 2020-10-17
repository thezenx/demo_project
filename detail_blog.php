<?php


// 

include "include/connect.php";
$sql = "SELECT * FROM `news` WHERE new_ID = '".$_GET['id']."' ";
$result = $con ->query($sql) ;
$rowdeteil =$result ->fetch_assoc() ;
?>


<?php include "include/navbar.php" ?>


<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/<?php echo $rowdeteil['news_img'] ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1><?php echo$rowdeteil['topic'] ?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
</aside>





            <div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3 class="text-center"><br>Detail blog</h3>
						<div class="row contact-info-wrap">
                            <h3><?php echo $rowdeteil['news_report'] ?></h3>
						</div>
					</div>
				</div>
			</div>


<?php include "include/footer.php" ?>