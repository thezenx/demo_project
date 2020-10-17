<?php

include "include/connect.php";
$sql = "SELECT * FROM `tour`";
$result = $con ->query($sql) ;
?>


<?php include "include/navbar.php" ?>
<!---->
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image:  url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>Find Tours</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
			
</aside>
		
<!--tour-->
					<center><h1>Tours</h1></center>
						
					<div class="container-fluid">		
						<div class="row">
							<div class="col-md-12  col-sm-12 col-xs-12">
							<?php while($row=$result->fetch_assoc() ) {?>
								<div class="col-md-6 col-sm-12 animate-box">
									<div class="tour">
											<a href="booking.php?id=<?php echo$row['Tour_ID']?>" class="tour-img" style="background-image: url(images/<?php echo$row['Tour_img'] ?>);">
												<p class="price"><span>Adult ฿<?php echo$row['Advlt_price'] ?></span> <small>/ Chid ฿<?php echo$row['Chid_price'] ?></small></p>
											</a>
											<span class="desc">
												<h1><a href="booking.php?id=<?php echo$row['Tour_ID']?>"><?php echo$row['Tour_name'] ?></a></h1>
												<h4 class="city"><?php echo$row['Tour_sub'] ?></h4>
											</span>
									</div>
								</div>
							<?php } ?>	
							</div>	
						</div>					
					</div>			


						


						
			

				
					
		
        

		<?php include "include/footer.php" ?>