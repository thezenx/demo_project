<?php


 include_once "../../../include/connect.php";

 if (isset($_POST['submit'])) {
    
    

    $temp =  explode('.',$_FILES['file']['name']);
    $detail = str_replace('../../../','./',$_POST['detail']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../../../images/'.$new_name;
    if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
    
        $sql = "INSERT INTO `news` (`topic`,`date`,`news_img`,`news_report`)  
        VALUES ('".$_POST['subject']."', 
             '".$_POST['date']."',
             '".$new_name."',   
           '".$detail."')";
       
       $result = $con->query($sql) or die($con->error);
        
       if($result){
            echo '<script> alert("เพิ่มข้อมูลสำเร็จ") </script>';
            header('Refresh:0; url=index.php');
        }
        } else {
        echo 'No';
        }
    } else {
    header('location:index.php');
    }
    
      
?>

