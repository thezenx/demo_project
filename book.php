<?php

$date = $_GET['date'];

include_once "include/connect.php";
$sql = "SELECT month.ID,month.date,tour.Tour_name ,tour.Tour_deteil ,tour.Tour_img ,tour.Tour_sub ,tour.Chid_price,tour.Advlt_price,tour.Tour_ID   FROM month INNER JOIN tour ON month.Tour_ID = tour.Tour_ID WHERE  month.date= '".$_GET['date']."' AND tour.Tour_ID = '".$_GET['id']."' ";
// $sql = "SELECT * FROM `tour`  WHERE Tour_ID = '".$_GET['id']."'"; 
$result = $con->query($sql) or die($con->error);
$rowdeteil =$result ->fetch_assoc() ;


?>





<?php include "include/navbar.php" ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<!--img head-->
<aside id="colorlib-hero">
<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/gallery/DSCN7994.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/gallery/DSCN7498.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">

				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/gallery/DSCN3156.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">

				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/gallery/DSCN3217.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
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
<!-- Book -->
<div class="site-section bg-light">
      <div class="container"><h1 class="text-center">BOOKING</h1>
        <div class="row">
        
          <div class="col-md-7 mb-5">

            <form name="frmMain" action="adbook.php" class="p-5 bg-white"  method="post" enctype="multipart/form-data">
            

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <font size="6">Tour Name</font>
                  <input type="hidden" id="fname" name="tourid" class="form-control" value="<?php echo $rowdeteil['Tour_ID']?>" readonly>
                  <input type="text" id="fname" name="tourname" class="form-control-lg bg-light" value="<?php echo $rowdeteil['Tour_name']?>" readonly>
                </div>

                <?php if ($_SESSION) { ?>
                  <div class="col-md-6">
                    <font size="6">Customer Name</font>
                    <input type="text" id="lname" class="form-control-lg bg-light" value="<?php echo$_SESSION['cus_name']?>" readonly>
                  </div>
                  <?php }else { ?>
                    <div class="col-md-6">
                      <font size="6">Customer Name</font>
                      <input type="text" id="lname" class="form-control-lg bg-light" placeholder="Customer name" readonly>
                    </div>
                  <?php }?>

                
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <font size="6">Date of Travel</font> 
                  <input type="hidden" id="fname" name="ID" class="form-control" value="<?php echo $rowdeteil['ID']?>" readonly>
                  <input type="text" id="date" name="date" class="form-control-lg bg-light  " placeholder="Date of visit" value="<?php echo $rowdeteil['date'] ?>" readonly>
                </div>
               
                <div class="col-md-6">
                  <font size="6">Email</font>
                  <?php if ($_SESSION) { ?>
                  <input type="email" id="email" name="email" class="form-control-lg bg-light" value="<?php echo$_SESSION['cus_email']?>" readonly placeholder="Email">
                  <?php }else { ?>
                    <input type="email" id="email" name="email" class="form-control-lg bg-light"  readonly placeholder="Email">
                  <?php }?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <font size="6">How Many Adult</font></Br>
                  <span class="text-danger">Limited to 12 people</span></Br>
                  <input type="number"  name="txtNumberA" class="form-control-lg" min="0" max="8" value="0" placeholder="Adult" OnChange="fncSum();">
                  <input type="hidden"  name="txtNumberB" class="form-control" value="<?php echo $rowdeteil ['Advlt_price']; ?>" OnChange="fncSum();" readonly>
                </div>
                <div class="col-md-6">
                  <font size="6">How Many Child</font></Br>
                  </Br>
                  <!-- <span class="text-danger">**Max 4 people</span>  -->
                  <input type="number"  name="txtNumberc" class="form-control-lg"  min="0" max="4" value="0" placeholder="Child" OnChange="fncSum();">
                  <input type="hidden"  name="txtNumberd" class="form-control" value="<?php echo $rowdeteil ['Chid_price']; ?>" OnChange="fncSum();" readonly>
                </div>
              </div>

                  
                

              <div class="row form-group">
                <div class="col-md-12">
                  <font size="6">Payment</font>
                  <input type="text"  name="txtNumberC" class="form-control-lg bg-light" readonly>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <?php if ($_SESSION) { ?>
                    <input type="submit" name="submit" value="Book" class="btn btn-primary py-2 px-5 text-white">
                  <?php }else { ?>
                    <a href="login.php"><button  type="button" class="btn btn-success">Login</button></a>
                  <?php }?>
                  
                </div>
              </div>

            
            </form>
            
          </div>

          <div class="col-md-5">
            <div class="p-4 mb-3 bg-white">
              <img src="images/<?php echo$rowdeteil['Tour_img'] ?>" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3"><?php echo$rowdeteil['Tour_name'] ?></h3>
              <p><?php echo$rowdeteil['Tour_sub'] ?></p>
              
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white" data-toggle="modal" data-target="#exampleModalLong">Learn More</a></p>
                  
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Tour</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <div class="modal-body">
                                        <?php echo$rowdeteil['Tour_deteil'] ?>
                                    </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /Modal -->
            </div>
          </div>
        
        </div>
      </div>
    </div>

    


    <script >
	function fncSum()
	{
		 if(isNaN(document.frmMain.txtNumberA.value) || document.frmMain.txtNumberA.value == "")
		 {
			alert('(Number A)Please input Number only.');
			document.frmMain.txtNumberA.focus();
			return;
		 }

		 if(isNaN(document.frmMain.txtNumberB.value) || document.frmMain.txtNumberB.value == "")
		 {
			alert('(Number B)Please input Number only.');
			document.frmMain.txtNumberB.focus();
			return;
		 }

		 document.frmMain.txtNumberC.value = parseFloat(document.frmMain.txtNumberA.value) * parseFloat(document.frmMain.txtNumberB.value) + parseFloat(document.frmMain.txtNumberc.value) * parseFloat(document.frmMain.txtNumberd.value) ;
	}
</script>

<?php include "include/footer.php" ?>

