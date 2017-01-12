<div class="wrapper" ng-controller="frontpageCtrl">

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

      <li class="treeview active" class="contentsmenu">
        <a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> <span>Web Contents</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="frontpage"><i class="glyphicon glyphicon-triangle-right"></i> <span>Front Pages</span></a></li>
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
        Front Page
        <small>Content</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Front Page Content</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Image 1</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormSI1">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileSI1" name="fileSI1"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormSI1.fileSI1.$error.required">*required</i><br>
                      <i ng-show="myFormSI1.fileSI1.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormSI1.fileSI1.$valid" ngf-thumbnail="picFileSI1" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileSI1 = null" class="btn btn-danger" ng-show="picFileSI1" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormSI1.$valid" 
                              ng-click="uploadPicSIOne(picFileSI1)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileSI1.progress >= 0">
                        <div style="width:{{picFileSI1.progress}}%" 
                            ng-bind="picFileSI1.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileSI1.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{siOneImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Image 2</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormSI2">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileSI2" name="fileSI2"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormSI2.fileSI2.$error.required">*required</i><br>
                      <i ng-show="myFormSI2.fileSI2.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormSI2.fileSI2.$valid" ngf-thumbnail="picFileSI2" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileSI2 = null" class="btn btn-danger" ng-show="picFileSI2" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormSI2.$valid" 
                              ng-click="uploadPicSITwo(picFileSI2)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileSI2.progress >= 0">
                        <div style="width:{{picFileSI2.progress}}%" 
                            ng-bind="picFileSI2.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileSI2.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{siTwoImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Image 3</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormSI3">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileSI3" name="fileSI1"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormSI3.fileSI3.$error.required">*required</i><br>
                      <i ng-show="myFormSI3.fileSI3.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormSI3.fileSI3.$valid" ngf-thumbnail="picFileSI3" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileSI3 = null" class="btn btn-danger" ng-show="picFileSI3" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormSI3.$valid" 
                              ng-click="uploadPicSIThree(picFileSI3)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileSI3.progress >= 0">
                        <div style="width:{{picFileSI3.progress}}%" 
                            ng-bind="picFileSI3.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileSI3.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{siThreeImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Image 1</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormTI1">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileTI1" name="fileTI1"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormTI1.fileTI1.$error.required">*required</i><br>
                      <i ng-show="myFormTI1.fileTI1.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormTI1.fileTI1.$valid" ngf-thumbnail="picFileTI1" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileTI1 = null" class="btn btn-danger" ng-show="picFileTI1" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormTI1.$valid" 
                              ng-click="uploadPicTIOne(picFileTI1)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileTI1.progress >= 0">
                        <div style="width:{{picFileTI1.progress}}%" 
                            ng-bind="picFileTI1.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileTI1.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{tiOneImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Image 2</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormTI2">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileTI2" name="fileTI2"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormTI2.fileTI2.$error.required">*required</i><br>
                      <i ng-show="myFormTI2.fileTI2.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormTI2.fileTI2.$valid" ngf-thumbnail="picFileTI2" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileTI2 = null" class="btn btn-danger" ng-show="picFileTI2" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormTI2.$valid" 
                              ng-click="uploadPicTITwo(picFileTI2)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileTI2.progress >= 0">
                        <div style="width:{{picFileTI2.progress}}%" 
                            ng-bind="picFileTI2.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileTI2.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{tiTwoImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Image 3</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormTI3">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileTI3" name="fileTI3"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormTI3.fileTI3.$error.required">*required</i><br>
                      <i ng-show="myFormTI3.fileTI3.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormTI3.fileTI3.$valid" ngf-thumbnail="picFileTI3" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileTI3 = null" class="btn btn-danger" ng-show="picFileTI3" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormTI3.$valid" 
                              ng-click="uploadPicTIThree(picFileTI3)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileTI2.progress >= 0">
                        <div style="width:{{picFileTI3.progress}}%" 
                            ng-bind="picFileTI3.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileTI3.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{tiThreeImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Image 4</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row col-md-12">
                <div class="form-group col-md-12">
                  <form name="myFormTI4">
                    <fieldset>
                       <h5><b>Select Image:</b></h5>
                      <input type="file" ngf-select ng-model="picFileTI4" name="fileTI4"    
                             accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
                      <i ng-show="myFormTI4.fileTI4.$error.required">*required</i><br>
                      <i ng-show="myFormTI4.fileTI4.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                      <img ng-show="myFormTI4.fileTI4.$valid" ngf-thumbnail="picFileTI4" class="thumb" width="200" height="200"><br><br> <button ng-click="picFileTI4 = null" class="btn btn-danger" ng-show="picFileTI4" style="margin-right:25px;"><i class="fa fa-remove"> </i> Remove</button>
                      
                      <button ng-disabled="!myFormTI4.$valid" 
                              ng-click="uploadPicTIFour(picFileTI4)" class="btn btn-primary"><i class="fa fa-check"> </i> Submit</button>
                      <span class="progress" ng-show="picFileTI4.progress >= 0">
                        <div style="width:{{picFileTI4.progress}}%" 
                            ng-bind="picFileTI4.progress + '%'"></div>
                      </span>
                      <span ng-show="picFileTI4.result">Upload Successful</span>
                      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </fieldset>
                    <br>
                  </form>
                </div>
                <div class="form-group col-md-12">
                  <img src="{{tiFourImageName}}" style="max-width: 100%; height: auto;">
                </div>
              </div>
            </div>
          </div>
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

</div>
<!-- ./wrapper -->