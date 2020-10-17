<?php 
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$name = $link_array[count($link_array) - 2];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block">JJ ADVENTURE TOUR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/favicon.ico" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="../calender" class="nav-link <?php echo $name == 'calender' ? 'active': '' ?>">
              <i class="fa fa-calendar nav-icon"></i>
              <p>Calender</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="../articles" class="nav-link <?php echo $name == 'articles' ? 'active': '' ?>">
            <i class="fa fa-file nav-icon"></i>
              <p>Articles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../Tour" class="nav-link <?php echo $name == 'Tour' ? 'active': '' ?>">
            <i class="fa fa-address-book nav-icon"></i>
              <p>Tour</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../date" class="nav-link <?php echo $name == 'Date' ? 'active': '' ?>">
            <i class="fa fa-calendar nav-icon"></i>
              <p>Date</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../Order" class="nav-link <?php echo $name == 'Order' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>Order</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../contacts" class="nav-link <?php echo $name == 'contacts' ? 'active': '' ?>">
            <i class="fa fa-phone-square nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-header">Account Settings</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>