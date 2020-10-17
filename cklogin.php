
<?php include "include/connect.php"; 

if(isset($_POST['submit'])){

    $user =$_POST['uname'];
    $pass =$_POST['psw'] ;

    $sql = "SELECT * FROM customer WHERE username =  '".$user."' AND password ='".$pass."' " ;

    $result = $con->query($sql);
    $row = $result-> fetch_assoc();



    

    // print_r($result);
    

    if(!empty($row) ){
        
            $_SESSION['cus_ID'] = $row['cus_ID'];
            $_SESSION['cus_name'] = $row['cus_name'];
            $_SESSION['cus_last'] = $row['cus_last'];
            $_SESSION['cus_email'] = $row['cus_email'];

            echo'<script> alert("สำเร็จ")</script>';
        header('location:index.php');
        
    }else{
        echo'<script> alert("ไม่มีผู้ใช้")</script>';
        header('Refresh:0; url=index.php');
       
    }
    
}


?>