<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">
   .delete {
    background: rgba(0, 0, 0, 0) url("http://localhost/cakephp3/webroot/img/remove-icon.png") repeat scroll left top;
    display: inline-block;
    height: 18px;
    overflow: hidden;
    position: relative;
    text-indent: -9999em;
    top: 3px;
    width: 18px;

}
  .fa-dashboard::before, .fa-tachometer::before  ,.fa-th::before, .fa-calendar::before ,.fa-envelope:before ,.fa-envelope::before{
    margin-left: 80%;
}
.litext
{
      margin-left: 9% !important;
    color: #FFFFFF;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li {
    
    }
.user-panel {
    margin-top: -19%;
  }

.main-sidebar, .left-side {
    padding-top: 0px;

  }
  .clearfix
  {
    margin-bottom:5%;
  }
  .buttonheader {
  /*background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
  background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
  background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
  background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
  background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
  background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
  background-color:#ededed;
  -moz-border-radius:15px;
  -webkit-border-radius:15px;*/
    border: 1px solid #c8c8c8;
    border-radius: 15px;
    color: #000000;
    cursor: pointer;
    display: inline-block;
    font-family: Arial;
    font-size: 17px;
    padding: 7px 25px;
    text-decoration: none;
    text-shadow: 0 1px 0 #e1e2ed;
}
.buttonheader:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
  background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
  background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
  background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
  background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
  background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
  background-color:#c8c8c8;
  color: #000000;
}
.buttonheader:active {
  position:relative;
  top:1px;
}


.fa-remove::before, .fa-close::before, .fa-times::before {
   
   
}

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile | Campustop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <script src="<?= SITEURL; ?>webroot/js/jquery.min.js"></script> 
    
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= SITEURL; ?>webroot/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= SITEURL; ?>webroot/AdminLTE/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="<?= SITEURL; ?>webroot/AdminLTE/css/skins/_all-skins.min.css">


    

      <link rel="stylesheet" href="<?= SITEURL; ?>webroot/css/bootstrap-select.min.css">

     <script src="<?= SITEURL; ?>webroot/AdminLTE/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
   

   <script src="<?= SITEURL; ?>webroot/AdminLTE/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= SITEURL; ?>webroot/AdminLTE/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= SITEURL; ?>webroot/AdminLTE/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= SITEURL; ?>webroot/AdminLTE/js/demo.js"></script>

     

    <script src="<?= SITEURL; ?>webroot/js/custom.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery-ui.js"></script>
  
     <script src="<?= SITEURL; ?>webroot/js/tag-it.js"></script>
     
     <link rel="stylesheet" href="<?= SITEURL; ?>webroot/css/jquery-ui.css">
     <link rel="stylesheet" href="<?= SITEURL; ?>webroot/css/jquery.tagit.css">

     <link rel="stylesheet" href="<?= SITEURL; ?>webroot/css/tagit.ui-zendesk.css">
 <script src="<?= SITEURL; ?>webroot/js/jquery.filer.min.js"></script>


  <script src="<?= SITEURL; ?>webroot/js/bootstrap.min.js"></script>

     <script src="<?= SITEURL; ?>webroot/js/jquery.appear.js"></script>
    <!-- SlimScroll -->
    <script src="<?= SITEURL; ?>webroot/js/bootstrapValidator.min.js"></script>

     <script src="<?= SITEURL; ?>webroot/js/bootstrap-select.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
  <div>  <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
       
        <nav class="navbar navbar-static-top" role="navigation" style="min-height: 65px;background-color:#F1F1F1;border-bottom: 1px solid #D3D7DA;">
          <!-- Sidebar toggle button-->
          <!--<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>-->
          <a href="<?= SITEURL; ?>home" class="buttonheader">Home</a>
       
        </nav>
      </header>


      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <?php 
            $userpic = $this->request->session()->read('userpic1');
           /// pr($this->request->session()->read('Auth.User.name'));

            if (isset($userpic)) {
              ?>
            <img src="<?= SITEURL; ?>webroot/img/uploads/profilepic/<?=$userpic ?>" class="img-circle" alt="User Image">
            <?php
              } else {
                ?>
            <img src="<?= SITEURL; ?>webroot/img/profile_image.jpg" class="img-circle" alt="User Image">
            <?php
            }
             
            ?>
              
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          
            <li class="treeview <?php if($this->request->param('controller')=="home"){ echo "active"; } ?>">
              <a href="<?= SITEURL; ?>home">
                <i class="fa fa-dashboard"></i><br><p class="litext">Home</p>
              </a>
              
            </li>
          
            
            <li class="treeview <?php if($this->request->param('controller')=="changepassword"){ echo "active"; } ?>">
            <a href="<?= SITEURL; ?>changepassword">
                <i class="fa fa-th"></i> <br><p class="">Settings</p>
              </a>
            </li>
            
           
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>-->
           
            <li class="<?php if($this->request->param('controller')=="note"){ echo "active"; } ?>">
              <a href="<?= SITEURL; ?>note">
                <i class="fa fa-calendar"></i> <br><p class="">Uploads</p>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li >
              <a href="">
                <i class="fa fa-envelope"></i> <br><p class="">downloads</p>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="<?php if($this->request->param('controller')=="home/logout"){ echo "active"; } ?>">
              <a href="<?= SITEURL; ?>home/logout">
                <i class="fa fa-envelope"></i> <br><p class="">Logout</p>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
          
           
           <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> -->
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?= $this->fetch('content'); ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>Copyright &copy; 2014-2015 <a href="http://cs.spunktek.com/campustop/">AKMYDH Inc.</a> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
</div>
    <!-- jQuery 2.1.4 -->

  </body>
</html>
