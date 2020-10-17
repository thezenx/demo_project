<?php include "../../../include/connect.php"; ?>
<?php

if (isset($_GET['id'])){
    $sql = "DELETE FROM `news` WHERE `new_ID` = '".$_GET['id']."' ";
    $result = $con->query($sql);

    if( $con->affected_rows ){
        echo '<script> alert("Finished Deleting!")</script>'; 
        header('Refresh:0; url=index.php'); 
    } else {
        echo '<script> alert("No Data!")</script>'; 
        header('Refresh:0; url=index.php');
    }

} else {
    header('Refresh:0; url=index.php');
}


?>