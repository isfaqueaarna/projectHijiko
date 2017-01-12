<div ng-controller="locationsCtrl" class="wrapper">

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
          <li><a href="languages"><i class="glyphicon glyphicon-triangle-right"></i> <span>Languages</span></a></li>
          <li><a href="currencies"><i class="glyphicon glyphicon-triangle-right"></i> <span>Currencies</span></a></li>
          <li class="active"><a href="locations"><i class="glyphicon glyphicon-triangle-right"></i> <span>Locations</span></a></li></a></li>
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
        Location
        <small>Setting</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Location Setting</li>
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
                <a href=""><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modal-add-country"><i class="fa fa-plus"> </i>  Add Country</button></a>
              </div>
              <div class="box-title pull-right" style="margin-right: 5px;">
                <a ng-click="refreshTable()"><button type="button" class="btn btn-block btn-primary" title="Refresh Table"><i class="fa fa-refresh"> </i></button></a>
              </div>
            </div>
            <!-- /.box-header -->

            <table class="table table-hover">
              <thead>
                <tr>
                  <th ng-click="sort('mncoId')">Id
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mncoId'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mncoSName')">Country SName
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mncoSName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mncoFName')">Country FName
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mncoFName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('mncoStatus')">Status
                    <span class="glyphicon sort-icon" ng-show="sortKey=='mncoStatus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr dir-paginate="country in countries|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
                  <td>{{country.mncoId}}</td>
                  <td>{{country.mncoSName}}</td>
                  <td>{{country.mncoFName}}</td>
                  <td><span ng-class='whatClassIsIt(country.mncoStatus)'>{{country.mncoStatus}}</span></td>
                  <td>
                    <a class="btn btn-social-icon btn-primary" data-toggle="modal" data-target=".modal-update-country"  ng-click="editRow(country)" title="Update"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-social-icon btn-danger" ng-click="changeStatus(country)" title="Change Status"><i class="fa fa-check-circle"></i></a>
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


  <div class="modal modal-add-country">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Country</h4>
        </div>
        <div class="modal-body">

          <form name="addForm" novalidate>
            <div class="box-body">

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mncoFName">Country Full Name*</label>
                <input type="text" class="form-control" ng-model="mncoFName" name="mncoFName" placeholder="Country Full Name" required>
                <span style="color:red;" ng-show="addForm.mncoFName.$dirty && addForm.mncoFName.$invalid">
                  <span ng-show="addForm.mncoFName.$error.required">Country Full Name is required</span>
                </span>
              </div>
            </div>

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mncoSName">Currency Short Name*</label>
                <input type="text" class="form-control" ng-model="mncoSName" name="mncoSName" placeholder="Country Short Name" required>
                <span style="color:red;" ng-show="addForm.mncoSName.$dirty && addForm.mncoSName.$invalid">
                  <span ng-show="addForm.mncoSName.$error.required">Country Short Name is required</span>
                </span>
              </div>
            </div>

          </div>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" ng-click="addCountry()" ng-disabled="addForm.$invalid">Save</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="modal modal-update-country">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Update Country</h4>
        </div>
        <div class="modal-body">

          <form name="updateForm" novalidate>
            <div class="box-body">

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mncoFName">Currency Full Name*</label>
                <input type="text" class="form-control" ng-model="editingItem.mncoFName" name="mncoFName" placeholder="Country Full Name" required>
                <span style="color:red;" ng-show="updateForm.mncoFName.$dirty && updateForm.mncoFName.$invalid">
                  <span ng-show="updateForm.mncoFName.$error.required">Country Full Name is required</span>
                </span>
              </div>
            </div>

            <div class="row col-md-12">
              <div class="form-group col-md-12">
                <label for="mncoSName">Country Short Name*</label>
                <input type="text" class="form-control" ng-model="editingItem.mncoSName" name="mncoSName" placeholder="Currency Short Name" required>
                <span style="color:red;" ng-show="updateForm.mncoSName.$dirty && updateForm.mncoSName.$invalid">
                  <span ng-show="updateForm.mncoSName.$error.required">Country Short Name is required</span>
                </span>
              </div>
            </div>

          </div>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" ng-click="updateCountry()" ng-disabled="updateForm.$invalid">Update</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->






</div>
<!-- ./wrapper -->

