
<?php 
    include "../../../include/connect.php";
  
  
    if(isset($_POST['submit'])){

    $temp =  explode('.',$_FILES['file']['name']);
    $detail = str_replace('../../../','./',$_POST['detail']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../../../images/'.$new_name;
    if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){   
     
     $sql = "UPDATE `news`
     SET  topic	 = '".$_POST['subject']."',
        date	 = '".$_POST['date']."',
        news_img	 = '".$new_name."',
        news_report	 = '".$detail."'
    
     WHERE new_ID = '".$_POST['id']."'   ";
     $result = $con->query($sql) or die($con->error);
   
   if($result){
     echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
     header('Refresh:0; url=index.php');
        }
    }
}
?>