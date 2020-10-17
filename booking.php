<?php
include_once "include/connect.php";

$sql = "SELECT month.ID,month.date,month.status,tour.Tour_name,tour.Tour_deteil , tour.Chid_price,tour.Advlt_price ,tour.Tour_ID   
FROM month  INNER JOIN tour ON month.Tour_ID = tour.Tour_ID WHERE tour.Tour_ID = '".$_GET['id']."' AND month.status = 'true' ";  
$result = $con->query($sql) or die($con->error);
$rowdeteil =$result ->fetch_assoc() ;


?>



<?php include_once "include/navbar.php" ?>



<!-- detail -->
<div class="container-fluid bg-info">
    <div class="container-fluid">
        <h1 class="text-center"><br>Detail Tour</h1>
        
    </div>
</div>


<div class="container-fluid">
    <div class="container-fluid">
        <div class="col"><br><h2 class="text-center"><?php echo $rowdeteil['Tour_deteil'] ?></h2></div>
    </div>
</div>




<div class="colorlib-tour colorlib-light">
    <div class="container-fluid ">
    
        <table class="table table-bordered-responsive">
            <thead class="text-center">
                <tr>
                <th scope="col"><h1 class="font-weight-bold">Date of Travel</h1></th>
                <th scope="col"><h1 class="font-weight-bold text-right">Price Adult</h1><span><h4></h4></span></th>
                <th scope="col"><h1 class="font-weight-bold text-right">Price Child</h1><span><h6 class="text-danger text-right">aged 12 or under</h6></span></th>
                <th scope="col"><h1 class="font-weight-bold">Remaining<br>seats</h1></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="text-center"> 
            <?php while($row=$result->fetch_assoc() ) {?> 
               
                <?php if ($row[ 'status']=='true'){?>
                    <tr>
                        <th ><label>
                            <h2><?php echo$row['date']  ?></h2> <span><?php echo$row['Tour_name']  ?></span>
                            
                        </label></th>          
                        <td><h2 class="text-right"><?php echo$row['Advlt_price'] ?> ฿</h2></td>
                        <td><h2 class="text-right"><?php echo$row['Chid_price'] ?> ฿</h2></td>
                        <td><h2 class="text-danger">Limited to 12 people</h2>  </td>
                        <td>
                        
                            <a href="book.php?date=<?php echo $row['date'] ?>&id=<?php echo $row['Tour_ID'] ?>"  class="btn btn-primary float-center active " role="button" aria-pressed="true">Book</a>
                        
                        </td>
                    </tr>
                
                <?php } elseif ($row[ 'status']=='false'){?>
                <?php }?>
                

                <?php } ?>
            </tbody>
        </table>
    </div>    
</div>

<?php include_once "include/footer.php" ?>