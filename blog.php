<?php




include "include/connect.php";
$sql = "SELECT * FROM `news`";
$result = $con ->query($sql) ;

?>


<?php include "include/navbar.php" ?>

<!--img head-->
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/booking.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>News</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
</aside>
<!--blog-->
<div id="colorlib-blog">
	<div class="container">
		<div class="row">
		<?php while($row=$result->fetch_assoc() ) {?>
			<div class="col-md-6 ">
				<div class="wrap-division">
						<article class="animate-box">
							<div class="blog-img" style="background-image: url(images/<?php echo$row['news_img'] ?>);"></div>
								<div class="desc">
									<div class="meta">
										<p>
										<span><?php echo$row['date'] ?></span>
										</p>
									</div>
										<h2><?php echo$row['topic'] ?></a></h2>
										<p><a href="detail_blog.php?id=<?php echo $row['new_ID'] ?>">Learn More</a></p>
											
								
							</div>
						</article>	
				</div>
			</div>
		<?php } ?>
		</div>	
	</div>
</div>
    

					<?php include "include/footer.php" ?>