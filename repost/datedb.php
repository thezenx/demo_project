



            <?php
           include_once "../../../include/connect.php"; 
           $dateTime = date("yy-m-d");
// print_r($_POST);

//  echo "<br/>";

 $result = $_POST['daterange'];  // value ที่ส่งมา
             $result_explode = explode('-', $result);   // ขั้นด้วย '-
          //  echo "ds: ". $result_explode[0]."<br />";  // 0 คือค่าก่อน '-'
          // echo "de: ". $result_explode[1]."<br />"; // 1 ค่าหลัง '-'
 
// ยกตัวแปรเพื่อเก็บเข้าฐานข้อมูลต่อไปแ
      
            $datestart = $result_explode[0];
            $dateend =$result_explode[1];
            



            
            // $sql = "SELECT job_proceduves.job_id,job_proceduves.repair_number,job_proceduves.ID_number,job_proceduves.price,job_proceduves.Details,job_proceduves.reason,job_proceduves.update_at,job_proceduves.note,repair.created_at,repair.repair_number,repair.repair_img,repair.repair_case,repair.equipment_ID,repair.status_ID,repair.ID_number,members.name,
            // department.department_Name,status.status_Name ,equipment.equipment_Name ,members.phone FROM (((((job_proceduves 
            // INNER JOIN repair ON job_proceduves.repair_number = repair.repair_number ) 
            // INNER JOIN members ON members.ID_number = repair.ID_number )
            // INNER JOIN department ON department.department_ID = members.department_ID )
            // INNER JOIN status ON status.status_ID = repair.status_ID )
            // INNER JOIN equipment ON equipment.equipment_ID = repair.equipment_ID ) WHERE repair.created_at BETWEEN '".$datestart."' AND '".$dateend."' AND job_proceduves.ID_number= '".$_SESSION['ID_number']."'  ";
            // $result = $conn->query($sql);
            // '".$_SESSION['ID_number']."'
            $sql = " SELECT book.order_id,book.status,book.Advlt,book.Chid,book.date,book.datebook,book.payments,book.Tour_ID,customer.cus_name 
            FROM `book` 
            INNER JOIN customer ON book.cus_ID = customer.cus_ID WHERE status ='true' AND book.date BETWEEN '".$datestart."' AND '".$dateend."'   ";
            $result2 = $con ->query($sql) ;
          
          
          ?>
          
          <?PHP 
          
          // $sql ="SELECT SUM(price) AS value_sum FROM job_proceduves   " ;
          // $result1 = $conn->query($sql);
          // $row = $result1->fetch_assoc();
          // $sum = $row['value_sum'];
          
          
          // $result = "SELECT SUM(price) AS value_sum FROM job_proceduves " ;
          // // $result1 = $conn->query($sql); 
          // $row = mysql_fetch_assoc($result); 
          // $sum = $row['value_sum'];
          
          
          ?>
          <!DOCTYPE html>
          <html>
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><p class="text-center">บริษัท JJ Adventure tour<br>รายงานจองทัวร์ประจำเดือน <br>ระหว่างวันที่ <?php echo ($datestart)?>-<?php echo ($dateend)?></p><h6>วันที่พิมพ์เอกสาร <?php echo $dateTime; ?></h6></title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Favicons -->
            <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
            <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
            <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
            <meta name="theme-color" content="#ffffff">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <!-- DataTables -->
            <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
          </head>
          <body class="hold-transition sidebar-mini">
          
          <!-- Site wrapper -->
          <div class="wrapper">
            <!-- Navbar & Main Sidebar Container -->
          
            <?php include_once('../includes/sidebar.php') ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1>รายงานจองทัวร์ประจำเดือน</h1>
                      
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">รายงานจองทัวร์ประจำเดือน</li>
                      </ol>
                    </div>
                  </div>
                </div><!-- /.container-fluid -->
              </section>
          
              <!-- Main content -->
              <section class="content">
          
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                   
                    <h3 class="card-title text-center">รายการจองทัวร์ประจำเดือน</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="dataTable" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th> เลขที่ใบสั่งจอง </th>
                            <th> เลขที่ทัวร์ </th>
                            <th> ชื่อลูกค้า </th>
                            <th> วันที่ทำทัวร์ </th>
                            <th> วันที่จองทัวร์ </th>
                            <th> จำนวนผู้ใหญ่ </th>
                            <th> จำนวนเด็ก </th>
                            <th> ราคาชำระรวม หน่วย:บาท</th>
                            <!-- <th> หลักฐานการชำระ </th> -->
                          
                            <th> ยืนยันการชำระ</th>
                            
                        
                            
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $num = 0;
                            while($row = $result2->fetch_assoc()){
                              $num++;
                          ?>
                          <tr>
                              <td><?php echo $num; ?></td>
                              <td><?php echo $row['order_id']; ?></td>
                              <td><?php echo $row['Tour_ID']; ?></td>
                              <td><?php echo $row['cus_name']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['datebook']; ?></td>
                              <td><?php echo $row['Advlt']; ?></td>
                              <td><?php echo $row['Chid']; ?></td>
                              <td class="text-right"><?php echo $row['payments']; ?></td>
                              <td>  
               
                              <p>อนุมัติแล้ว</p>
                            </td>
                            
                         
                        
                          </tr>
                          <?php } ?>
                          </tbody>
                       
                         
                       
                      </table>
          
          
          
          
                  </div>
                   
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
          
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- footer -->
            <?php include_once('../includes/footer.php') ?>
            
          </div>
          <!-- ./wrapper -->
          
          <!-- jQuery -->
          <script src="../../plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- SlimScroll -->
          <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
          <!-- FastClick -->
          <script src="../../plugins/fastclick/fastclick.js"></script>
          <!-- AdminLTE App -->
          <script src="../../dist/js/adminlte.min.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="../../dist/js/demo.js"></script>
          <!-- DataTables -->
          <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
          <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
          
          
          <script>
            $(function () {
              $('#dataTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                dom: 'Bfrtip',
                buttons: [
                  'copy',  'excel', 'print'
                ]
              });
            });
          </script>
          
          </body>
          </html>
          

















