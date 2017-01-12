<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>JK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HiJiko</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu" title="Logout">
            <!-- Menu toggle button -->
            <a href="dashboard/logout">
              <i class="glyphicon glyphicon-log-out"></i>
            </a>
          </li>
          <!-- /.messages-menu -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/admin-icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata['logged_user']['userFullName']?></p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
      <li class="menu-dashboard active"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>General</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="users"><i class="glyphicon glyphicon-triangle-right"></i> <span>User</span></a></li>
          <li><a href="vendors"><i class="glyphicon glyphicon-triangle-right"></i> <span>Vendor</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Order</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Products</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>User Activity</span></a></li>
        </ul>
      </li>
      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Product Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="product_category"><i class="glyphicon glyphicon-triangle-right"></i> <span>Product Category</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Product Tags</span></a></li>
        </ul>
      </li>
      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Multinational Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="languages"><i class="glyphicon glyphicon-triangle-right"></i> <span>Languages</span></a></li>
          <li><a href="currencies"><i class="glyphicon glyphicon-triangle-right"></i> <span>Currencies</span></a></li>
          <li><a href="locations"><i class="glyphicon glyphicon-triangle-right"></i> <span>Locations</span></a></li></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Web Contents</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="frontpage"><i class="glyphicon glyphicon-triangle-right"></i> <span>Front Pages</span></a></li>
          <li><a href="coupons"><i class="glyphicon glyphicon-triangle-right"></i> <span>Coupons</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Sales Report</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Commissions</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Payment</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Setting</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href=""><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Commission</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="commission"><i class="glyphicon glyphicon-triangle-right"></i> <span>Commission Setting</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Notification</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Email</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>SMS</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Promotion</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>Promotion Content</span></a></li>
        </ul>
      </li>

      <li class="treeview" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Social Media</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> <span>SNS Connection Manager</span></a></li>
        </ul>
      </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Main</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="row" align="center">
        <img src="<?php echo base_url();?>assets/dist/img/hijikodashboard.jpg" height="900" width="600" align="center">
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer" align="center
  ">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Hi Jiko</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->