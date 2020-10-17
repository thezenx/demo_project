<?php


 require_once "include/connect.php";

 if (isset($_POST['submit'])) {

    // $uname =$_POST['username'];
    $pass = $_POST['password'];
    // $email =$_POST['cus_email'];
    $phone =$_POST['phone'];
    
    
    $sql = "INSERT INTO `customer` (`cus_name`,`cus_last`,`cus_email`,`phone`,`username`,`password`) 
    VALUES ('" . $_POST['name'] . "',
            '" . $_POST['lname'] . "',
            '" . $_POST['cus_email'] . "', 
            '" . $phone . "',
            '" . $_POST['username'] . "',
            '" . $pass ."')";
    $result = $con->query($sql) or die($con->error);
   
    
    if ($result) {
        echo '<script> alert("บันทึกข้อมูลอุปกรณ์เรียบร้อยแล้ว")</script>';
        header('Refresh:0; url=index.php');
    } else {
        echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
        header('Refresh:0; url=index.php');
    }

}

    // <?php echo $_SERVER['PHP_SELE'];



?>

  
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Sign up</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign up</p>

      <form action="signup.php" method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Name"  aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="text" name="lname" class="form-control" placeholder="Last Name"  aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="text" name="cus_email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"></span>
            </div>
            <input type="Password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
          </div><div class="col-6">
            <a href="index.php" type="submit"  class="btn btn-success btn-block btn-flat">Home</a>
          </div>
          <!-- /.col -->
        </div>
        
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>