<?php 
include_once "../../../include/connect.php"; 
$_GET['id'];

$sql = "UPDATE book SET status = 'true' WHERE order_id = '".$_GET['id']."' ";
$result = $con->query($sql) or die($con->error);
if($result){
    http_response_code(200);
    $response = array('message' => 'OK');
    header('Refresh:0; url=index.php');
}else{
    http_response_code(400);
    $response = array('message' => 'ERROR');
}

?>