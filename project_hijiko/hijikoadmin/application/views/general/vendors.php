<div class="wrapper" ng-controller="vendorsCtrl">

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
      <li class="treeview active" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>General</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="users"><i class="glyphicon glyphicon-triangle-right"></i> <span>User</span></a></li>
          <li class="active"><a href="vendors"><i class="glyphicon glyphicon-triangle-right"></i> <span>Vendor</span></a></li>
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
        Vendor
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Vendor Management</li>
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
              <div class="box-title pull-right" style="margin-right: 5px;">
                <a ng-click="refreshTable()"><button type="button" class="btn btn-block btn-primary" title="Refresh Table"><i class="fa fa-refresh"> </i></button></a>
              </div>
            </div>
            <!-- /.box-header -->

            <table class="table table-hover">
              <thead>
                <tr>
                  <th ng-click="sort('vendorId')">Id
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorId'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('vendorFirstName')">First Name
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorFirstName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('vendorLastName')">Last Name
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorLastName'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('vendorEmail')">Email
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorEmail'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('vendorVerified')">Verified
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorVerified'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th ng-click="sort('vendorStatus')">Status
                    <span class="glyphicon sort-icon" ng-show="sortKey=='vendorStatus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                  </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr dir-paginate="vendor in vendors|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
                  <td>{{vendor.vendorId}}</td>
                  <td>{{vendor.vendorFirstName}}</td>
                  <td>{{vendor.vendorLastName}}</td>
                  <td>{{vendor.vendorEmail}}</td>
                  <td><span ng-class='whatClassIsIt(vendor.vendorVerified)'>{{vendor.vendorVerified}}</span></td>
                  <td><span ng-class='whatClassIsIt(vendor.vendorStatus)'>{{vendor.vendorStatus}}</span></td>
                  <td>
                    <a class="btn btn-social-icon btn-primary" ng-click="activeRow(vendor)" data-toggle="modal" data-target=".modal-profile-view" title="Update"><i class="fa fa-info"></i></a>
                    <a class="btn btn-social-icon btn-danger" ng-click="activeRowVerification(vendor)" title="Change Status"><i class="fa fa-check-circle"></i></a>
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
  <footer class="main-footer" align="center
  ">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Hi Jiko</a>.</strong> All rights reserved.
  </footer>


  <div class="modal modal-info modal-profile-view">
    <div class="modal-dialog" style="width:90%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Vendor Info</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="/#step1" data-toggle="tab">Step 1</a></li>
                  <li class=""><a href="/#step2" data-toggle="tab">Step 2</a></li>
                  <li><a href="/#step3" data-toggle="tab">Step 3</a></li>
                </ul>
                <div class="tab-content">
                  <!-- /.tab-pane -->
                <div class="active tab-pane" id="step1">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body" style="color: black;">
                          <div class="form-group">
                            <label>Location: </label>
                            {{activeItem.vendorLocation}}
                          </div>
                          <div class="form-group">
                            <label>Primary Language: </label>
                            {{activeItem.vendorPLanguage}}
                          </div>
                          <div class="form-group">
                            <label>Secondary Languages: </label>
                            {{activeItem.vdSLanguages}}
                          </div>
                          <div class="form-group">
                            <label>Product Categories: </label>
                            {{activeItem.vdPCategories}}
                          </div>
                          <div class="form-group">
                            <label>Country: </label>
                            {{activeItem.vendorCountry}}
                          </div>
                          <div class="form-group">
                            <label>State: </label>
                            {{activeItem.vendorState}}
                          </div>
                          <div class="form-group">
                            <label>City: </label>
                            {{activeItem.vendorCity}}
                          </div>
                          <div class="form-group">
                            <label>Street Address: </label>
                            {{activeItem.vendorStreetAddress}}
                          </div>
                          <div class="form-group">
                            <label>Blogs: </label>
                            {{activeItem.vendorWebsites}}
                          </div>
                          <div class="form-group">
                            <label>ZIP Code: </label>
                            {{activeItem.vendorZIPCode}}
                          </div>
                        </div>
                      </div>
                    </div>

                </div>

                  <div class="tab-pane" id="step2">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body" style="color: black;">
                          <div class="form-group">
                            <label>Photo Id: </label><br>
                            <img src="{{activeItem.vendorPhotoIdImageLink}}" height="180" width="180"><br>
                          </div>
                          <div class="form-group">
                            <label>Verified Email: </label>
                            {{activeItem.vendorVerifiedEmail}}
                          </div>
                          <div class="form-group">
                            <label>Verified Mobile No: </label>
                            {{activeItem.vendorVerifiedMobile}}
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="step3">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body" style="color: black;">
                          <div class="form-group">
                            <label>Profile Photo: </label><br>
                            <img src="{{activeItem.vendorProfileImageLink}}" height="180" width="180"><br>
                          </div>
                          <div class="form-group">
                            <label>About Yourself: </label>
                            {{activeItem.vendorAboutYourself}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="modal modal-primary modal-status-confirmation">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Vendor Verification</h4>
      </div>
      <div class="modal-body">
      <p>Do you really want to verify this Vendor?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-outline" ng-click="submitVerification()">Yes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->







</div>
<!-- ./wrapper -->