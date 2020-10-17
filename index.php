<?php

include_once "include/connect.php";
$sql = "SELECT * FROM `tour`";
$result = $con ->query($sql) ;

$sql1 = "SELECT * FROM `news` WHERE new_ID = '2124'";
$result1 = $con ->query($sql1) ;
$rowdeteil =$result1 ->fetch_assoc() ;

$sql1 = "SELECT * FROM `news` WHERE new_ID = '2127'";
$result2 = $con ->query($sql1) ;
$rowdeteil1 =$result2 ->fetch_assoc() ;

?>



<?php include "include/navbar.php" ?>
<!-- <slider> -->
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/toursl1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>1 Days Tour</h2>
				   					<h1>Amazing  Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/toursl2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>10 Days Cruises</h2>
				   					<h1>From Greece to Spain</h1> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/toursl3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>Explore our most tavel agency</h2>
				   					<h1>Our Travel Agency</h1> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/gallery/RSCN8334.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
			  </div>
		</div>
		</div>
		</div>
</aside>
			<!-- services -->
			<div id="colorlib-services colorlib-light-grey">
				<div class="container">
					
						<div class="col-md-3 animate-box text-center aside-stretch">
							<div class="services">
								<span class="icon">
									<i class="fas fa-route"></i>
								</span>
								<h2>GREAT DESTINATIONS</h2>
								<h5>We know and love Khao Yai, and pride ourselves on great, off-the-beaten track local knowledge to introduce this beautiful . </h5>
							</div>
						</div>
						<div class="col-md-3 animate-box text-center">
							<div class="services">
								<span class="icon">
									<i class="fas fa-hiking"></i>
								</span>
								<h2>LIKE-MINDED PEOPLE</h2>
								<h5>We create plans that bring people together! If you want to meet fantastic fellow-travelers whilst having the best kind adventure, this is for you</h5>
							</div>
						</div>
						<div class="col-md-3 animate-box text-center">
							<div class="services">
								<span class="icon">
									<i class="fas fa-wallet"></i>
								</span>
								<h2>AFFORDABLE TRAVEL</h2>
								<h5>Whether you’re a backpacker, a solo-traveler, or part of a group, we can introduce travel plans and activities to suit every budget and interest. </h5>
							</div>
						</div>
						<div class="col-md-3 animate-box text-center">
							<div class="services">
								<span class="icon">
									<i class="flaticon-postcard"></i>
								</span>
								<h2>Nice Support</h2>
								<h5>Our multilingual team are on hand to support you every step of the way, and our local guides and drivers will make sure you have the best fun possible on your trip. </h5>
							</div>
						</div>
					
				</div>
			</div>
			<!-- <Gallery> -->
			
				
					<div class="row">
						<div class="col-12">
							<h2  class="text-center ">Gallery</h2>
						</div>
							<div class="row">
								<div class="col-md-3"><img src="images/gallery/DSCN7401.jpg" style="width:100%"   alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN7702.jpg" style="width:100%" alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN3229.jpg" style="width:100%" alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN7400.jpg" style="width:100%" alt="..." class="img-rounded"></div>
							</div>
							<div class="row">
								<div class="col-md-3"><img src="images/gallery/DSCN3364.jpg" style="width:100%"   alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN9212.jpg" style="width:100%" alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN9340.jpg" style="width:100%" alt="..." class="img-rounded"></div>
								<div class="col-md-3"><img src="images/gallery/DSCN2810.jpg" style="width:100%" alt="..." class="img-rounded"></div>
							</div>
					</div>
				
			
														
			<!-- <package> -->
			<div class="colorlib-tour colorlib-light">
				<div class="tour-wrap">
				
				 <?php while($row=$result->fetch_assoc() ) {?>
					<a href="booking.php?id=<?php echo$row['Tour_ID']?>" class="tour-entry animate-box">
						<div class="tour-img" style="background-image: url(images/<?php echo$row['Tour_img'] ?>);">
						</div>
						<span class="desc">	
							<h2><?php echo$row['Tour_name'] ?></h2>
							<span class="city"><?php echo$row['Tour_sub'] ?></span>
							<span class="text-dark">Adult : ฿<?php echo$row['Advlt_price'] ?> Child : ฿<?php echo$row['Chid_price'] ?></span>
						</span>
					</a>
					<?php } ?>
				</div>
				
			</div>							
			<!-- Blog-->
			<div class="colorlib-tour colorlib-light-grey">
				<div class="container">
					<h2 class="text-center ">Blog</h2>
					<div class="row">
						
						<div class="col-md-6">
								<article class="animate-box">
										<div class="blog-img" style="background-image: url(images/<?php echo$rowdeteil['news_img'] ?>);"></div>
										<div class="desc">
											<div class="meta">
												<p>
													<span><?php echo$rowdeteil['date'] ?></span>
												</p>
											</div>
											<h2><?php echo$rowdeteil['topic'] ?></a></h2>
											<p><a href="detail_blog.php?id=<?php echo $rowdeteil['new_ID'] ?>">Learn More</a></p>
										</div>
										
								</article>		
							</div>
						
							<div class="col-md-6">
							<article class="animate-box">
										<div class="blog-img" style="background-image: url(images/<?php echo$rowdeteil1['news_img'] ?>);"></div>
										<div class="desc">
											<div class="meta">
												<p>
													<span><?php echo$rowdeteil1['date'] ?></span>
												</p>
											</div>
											<h2><?php echo$rowdeteil['topic'] ?></a></h2>
											<p><a href="detail_blog.php?id=<?php echo $rowdeteil1['new_ID'] ?>">Learn More</a></p>
										</div>
										
								</article>	
							</div>
						</div>
					<div class="col-md-6 col-md-offset-3 text-center  animate-box">
						<a href="blog.php" class="btn btn-outline-primary border-2 py-3 px-5">View All Blog Posts</a>
					</div>
					</div>
				</div>
			</div>

			
		
		
		

		



		<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



<?php include "include/footer.php" ?>