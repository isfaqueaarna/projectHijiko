<div ng-controller="languagesCtrl" class="wrapper">

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
      <li class="menu-dashboard"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
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
      <li class="treeview active" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Multinational Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="languages"><i class="glyphicon glyphicon-triangle-right"></i> <span>Languages</span></a></li>
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
          <li><a href="coupons"><i class="glyphicon glyphicon-triangle-right"></i> <span>Coupon</span></a></li>
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
        Language
        <small>Setting</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Language Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="padding-left:10px; padding-right:10px;">
            <div class="box-header with-border">

              <div class="box-title">
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" ng-model="search" class="form-control" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
              <div class="box-title pull-right">
                <a href=""><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modal-add-language"><i class="fa fa-plus"> </i>  Add Language</button></a>
              </div>
              <div class="box-title pull-right" style="margin-right: 5px;">
                <a ng-click="refreshTable()"><button type="button" class="btn btn-block btn-primary" title="Refresh Table"><i class="fa fa-refresh"> </i></button></a>
              </div>
            </div>
            <!-- /.box-header -->

            <table class="table table-hover">
              <thead>
                <tr>
                  <th ng-click="sort('mnlangId')">Id
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mnlangId'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mnlangSName')">Language SName
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mnlangSName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mnlangFName')">Language FName
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mnlangFName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mnlangStatus')">Status
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mnlangStatus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr dir-paginate="language in languages|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
                  <td>{{language.mnlangId}}</td>
                  <td>{{language.mnlangSName}}</td>
                  <td>{{language.mnlangFName}}</td>
                  <td><span ng-class='whatClassIsIt(language.mnlangStatus)'>{{language.mnlangStatus}}</span></td>
                  <td>
                    <a class="btn btn-social-icon btn-primary" data-toggle="modal" data-target=".modal-update-language"  ng-click="editRow(language)" title="Update"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-social-icon btn-danger" ng-click="changeStatus(language)" title="Change Status"><i class="fa fa-check-circle"></i></a>
                  </td>
                </tr>
              </tbody>
              </table>

              <div ng-if="dataloading" class="row" align="center">
                <div class="row">
                  <img src="<?php echo base_url();?>assets/dist/img/infinity.gif"> 
                </div>
              </div>

              <dir-pagination-controls
                max-size="5"
                direction-links="true"
                boundary-links="true" >
              </dir-pagination-controls>
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Hi Jiko</a>.</strong> All rights reserved.
  </footer>


  <div class="modal modal-add-language">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Language</h4>
        </div>
        <div class="modal-body">

          <form name="addForm" novalidate>
            <div class="box-body">

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mnlangFName">Language Full Name*</label>
                <input type="text" class="form-control" ng-model="mnlangFName" name="mnlangFName" placeholder="Language Full Name" required>
                <span style="color:red;" ng-show="addForm.mnlangFName.$dirty && addForm.mnlangFName.$invalid">
                  <span ng-show="addForm.mnlangFName.$error.required">Language Full Name is required</span>
                </span>
              </div>
            </div>

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mnlangSName">Language Short Name*</label>
                <input type="text" class="form-control" ng-model="mnlangSName" name="mnlangSName" placeholder="Language Short Name" required>
                <span style="color:red;" ng-show="addForm.mnlangSName.$dirty && addForm.mnlangSName.$invalid">
                  <span ng-show="addForm.mnlangSName.$error.required">Language Short Name is required</span>
                </span>
              </div>
            </div>

          </div>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" ng-click="addLanguage()" ng-disabled="addForm.$invalid">Save</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="modal modal-update-language">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Update Language</h4>
        </div>
        <div class="modal-body">

          <form name="updateForm" novalidate>
            <div class="box-body">

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mnlangFName">Currency Full Name*</label>
                <input type="text" class="form-control" ng-model="editingItem.mnlangFName" name="mnlangFName" placeholder="Language Full Name" required>
                <span style="color:red;" ng-show="updateForm.mnlangFName.$dirty && updateForm.mnlangFName.$invalid">
                  <span ng-show="updateForm.mnlangFName.$error.required">Language Full Name is required</span>
                </span>
              </div>
            </div>

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mncoSName">Language Short Name*</label>
                <input type="text" class="form-control" ng-model="editingItem.mnlangSName" name="mnlangSName" placeholder="Language Short Name" required>
                <span style="color:red;" ng-show="updateForm.mnlangSName.$dirty && updateForm.mnlangSName.$invalid">
                  <span ng-show="updateForm.mnlangSName.$error.required">Language Short Name is required</span>
                </span>
              </div>
            </div>

          </div>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" ng-click="updateLanguage()" ng-disabled="updateForm.$invalid">Update</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->






</div>
<!-- ./wrapper -->

