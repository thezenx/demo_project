<?php 
    include "include/connect.php";
  
  
    if(isset($_POST['submit'])){



    $temp =  explode('.',$_FILES['file']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = 'images/'.$new_name;
    if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){   
     
     $sql = "UPDATE `book`
     SET  book_img	 = '".$new_name."'  
     WHERE order_id = '".$_POST['id']."' ";
     $result = $con->query($sql) or die($con->error);
   
   if($result){
     echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
     header('Refresh:0; url=index.php');
        }
    }
}
?>