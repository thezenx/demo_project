<?php	
include_once "include/connect.php";
if (isset($_POST['submit'])) {
$sql = "SELECT * FROM `book` ";
$result = $con ->query($sql) ;


$tour =$_POST['tourid'];
$ID =$_POST['ID'];




$sql = "INSERT INTO `book` (`date`,`datebook`,`Advlt`,`Chid`,`payments`,`Tour_ID`,`ID`,`cus_ID`) 
VALUES ('" . $_POST['date'] . "',
		'".date("Y-m-d")."',
		'" . $_POST['txtNumberA'] . "',
		'" . $_POST['txtNumberc'] . "',
		'" . $_POST['txtNumberC'] . "',
		'" . $tour . "',
		'" . $ID . "',
		'" .  $_SESSION['cus_ID'] ."')";
$result = $con->query($sql) or die($con->error);


if ($result) {
	sendToLine() ;
	echo  '<script> alert("Successfully")</script>';
	header('Refresh:0; url=order_detail_pay.php');
} else {
	echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
	header('Refresh:0; url=index.php');
}

}


// echo '<pre>',print_r($_POST),'</pre>';


function sendToLine (){
	$text = "มีผู้ติดต่อมา จองทัวร์ \n";
	$text .= "ชื่อทัวร์ ".$_POST['tourname']."\n";
	$text .= "วันที่จอง: ".$_POST['date']."\n";
	$text .= "ผู้ใหญ่: ".$_POST['txtNumberA']."\n"; 
	$text .= "เด็ก: ".$_POST['txtNumberc']."\n";  
	$text .= "ยอดจอง ".$_POST['txtNumberC']."\n";  
	$text .= "คลิกที่นี้เพื่อดูรายละเอียดและมอบหมายงานให้แก้ช่าง: ". ('http://localhost/final/Order/login.php'). "\n";
	$message = array(
		'message' => $text
	);
	notify_message($message);
}

function notify_message($message) {
	// $LINE_TOKEN = $_SESSION['Line'] ;
	define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN',"rrzH5Y6qyzH3W1YKVbZ0JBpseNEYZek264sVzkEx0qn");
	$queryData = http_build_query($message,'','&');
	$headerOptions = array(
		'http' => array(
			'method' => 'POST',
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
			'content'=> $queryData
		)
	);

	$context = stream_context_create($headerOptions);
	$result = file_get_contents(LINE_API,FALSE,$context);
	$resp = json_decode($result);
	if ($resp->status == 200) {
		// echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>'; 
		// header('Refresh:0; url=../index.php');
	} else {
	//    echo '<script> alert("ส่งข้อมูลไม่สำเร็จ โปรดติดต่อ.....")</script>'; 
	//    header('Refresh:0; url=../index.php');
	}
}
?>


