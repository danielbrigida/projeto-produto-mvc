<div> Principalll </div>
<!--[if lt IE 7]>

    <html class="lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->

    <!--[if IE 7]>

    <html class="lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->

    <!--[if IE 8]>

    <html class="lt-ie9" lang="pt-br"> <![endif]-->

    <!--[if gt IE 8]><!-->

<html class="no-ie" lang="pt-br"> <!--<![endif]-->

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <title>Produtos MVC</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->

      <link rel="stylesheet" href="/plugins/bootstrap-tagsinput-latest/bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.min.css">
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/plugins/dataTable/datatables.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="/plugins/ionicons/ionicons.min.css"> 
      <!-- Pace style -->
      <link rel="stylesheet" href="/plugins/pace/pace.min.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="/plugins/iCheck/all.css">
      <!-- Bootstrap time Picker -->
      <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
      <!-- Select2 -->
      <link rel="stylesheet" href="/plugins/select2/select2.min.css">
      <!-- bootstrap-toggle -->
      <link rel="stylesheet" href="/plugins/bootstrap-toggle/css/bootstrap-toggle.min.css">
        <!-- Theme style -->
      <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="/plugins/DropZone/min/dropzone.min.css"> 
      <link rel="stylesheet" href="/plugins/DropZone/min/basic.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <script src="/plugins/JQuery1.8/jquery-1.8.2.min.js"></script>
      <link rel="stylesheet" href="/plugins/datetimepicker/jquery.datetimepicker.min.css">
      <!-- OrgChart -->
      <!--<link rel="stylesheet" href="https://cdn.rawgit.com/FortAwesome/Font-Awesome/master/css/font-awesome.min.css">!-->
      <link rel="stylesheet" href="/plugins/OrgChart/dist/css/jquery.orgchart.min.css">
      <link rel="stylesheet" href="/plugins/mentionsInput/css/jquery.mentionsInput.css">
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


    <!-- jQuery 2.2.0 -->
    <script src="/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    
   
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>    

        <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>ADM</b></span>

              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>MVC PRODUTOS</b> </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
            
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
                   
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav" >

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="hidden-xs">
                             
                        </span>
                      </a>
                      <ul class="dropdown-menu">

                      </ul>
                    </li>
                    <li>
                      <a href="/" title="Sair do Sistema"><i class="glyphicon glyphicon-log-out text-red"></i></a>
                    </li>
                </ul>
              </div>
            </nav>
          </header>

          <div id="menu_principal" >
            <aside class="main-sidebar" >
              <section class="sidebar" >
                <ul class="sidebar-menu"  data-widget="tree">
                  <li class="header">MENU</li>
                  <li class="treeview">
                    <a href="javascript: void(0);" id="menu_produto_index">
                            <span>Produtos</span>
                            <span class="pull-right-container"><i class="fa fa-support pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu" style="display: block;">
                        <li>
                          <a href="/produtos"> <i class="fa fa-th-list"></i> Gerenciar</a>
                        </li>
                        <li>
                          <a href="/produtos/save"> <i class="fa fa-save"></i> Cadastrar</a>
                        </li>         
                    </ul>

                    <a href="javascript: void(0);" id="menu_pedidos_index">
                        <span>Pedidos</span>
                        <span class="pull-right-container"><i class="fa fa-support pull-right"></i></span>
                    </a>

                    <ul class="treeview-menu" style="display: block;">
                        <li>
                          <a href="/pedidos"> <i class="fa fa-th-list"></i> Gerenciar</a>
                        </li>
                        <li>
                          <a href="/pedidos/save"> <i class="fa fa-save"></i> Cadastrar</a>
                        </li>         
                    </ul>
                    <a href="javascript: void(0);"  onclick="location.href='/produtos';">
                        <span>Sair</span>
                        <span class="pull-right-container"><i class="fa fa-support pull-right"></i></span>
                    </a>
                  </li>
                </ul>  
              </section>
            </aside>
          </div>

          <!-- =============================================== -->
          <div class="content-wrapper">
            <section class="content">
                <?php 
                    if($layout){
                        require_once $layout; 
                    }
                ?>
            </section>
          </div>
             
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
            </div>
            <strong>
            </strong> 
        </footer>  
          
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
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                        <p>Will be 23 on April 24th</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-user bg-yellow"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                        <p>New phone +1(800)555-1234</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                        <p>nora@example.com</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-file-code-o bg-green"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                        <p>Execution time 5 seconds</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:void(0)">
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
                    <a href="javascript:void(0)">
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
                    <a href="javascript:void(0)">
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
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Back End Framework
                        <span class="label label-primary pull-right">68%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

              </div>
              <!-- /.tab-pane -->
              <!-- Stats tab content -->
              <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
              <!-- /.tab-pane -->
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
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Allow mail redirect
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Other sets of options are available
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Expose author name in posts
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Allow the user to show his name in blog posts
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <h3 class="control-sidebar-heading">Chat Settings</h3>

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Show me as online
                      <input type="checkbox" class="pull-right" checked>
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Turn off notifications
                      <input type="checkbox" class="pull-right">
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Delete chat history
                      <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                  </div>
                  <!-- /.form-group -->
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
          </aside>
          <!-- /.control-sidebar -->
          <!-- Add the sidebar's background. This div must be placed
               immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>
        </div>
     
        <script src="/plugins/dataTable/datatables.min.js"></script>
        <script src="/plugins/select2/select2.full.min.js"></script>
        <script src="/plugins/jQuery/jquery.maskedinput-1.2.2.min.js"></script>
        <script src="/plugins/jQuery/jquery.tabledit.min.js"></script>
        <script src="/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
       
       
        <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="/plugins/fastclick/fastclick.js"></script>
        <script src="/dist/js/app.min.js"></script>
        <script src="/dist/js/demo.js"></script>
        <script src="/plugins/pace/pace.min.js"></script>

        <!-- InputMask -->
        <script src="/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>

       
        <!-- bootstrap datepicker -->
        <script src="/plugins/datepicker/bootstrap-datepicker.min.js"></script>
        <script src="/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="/plugins/iCheck/icheck.js"></script>
        <!-- Bootbox -->
        <script src="/plugins/bootbox/bootbox.min.js"></script>
        <!-- jQuery UI -->
        <script src="/plugins/jQueryUI/jquery-ui.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script type="text/javascript" src="/plugins/ckeditor-autocomplete-suggestions-plugin/resources/libs/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="/plugins/ckeditor-autocomplete-suggestions-plugin/resources/libs/ckeditor/adapters/jquery.js"></script>
        <!-- DropZone -->
        <script src="/plugins/DropZone/min/dropzone.min.js"></script>
        <script src="/plugins/DropZone/min/dropzone-amd-module.min.js"></script>
        <!-- DateTimePicker !-->
        <script src="/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>
        <script src="/plugins/bootstrap-treeview-1.2.0/dist/bootstrap-treeview.min.js"></script>
        <script src="/plugins/OrgChart/dist/js/jquery.orgchart.min.js"></script>
                        
        <script src="/plugins/html2canvas-master/dist/html2canvas.min.js"></script>
        <script src="/plugins/mentionsInput/js/underscore.min.js"></script>
        <script src="/plugins/mentionsInput/js/jquery.elastic.min.js"></script>
        <script src="/plugins/mentionsInput/js/jquery.events.input.min.js"></script>
        <script src="/plugins/accounting/accounting.min.js"></script>
        <script src="/plugins/lodash/lodash.core.min.js"></script>
        <script src="/plugins/clipboard.js-master/dist/clipboard.min.js"></script>
        <script src="/plugins/jmoney/jquery.maskMoney.min.js"></script>
        <script src="/plugins/printThis/printThis.min.js"></script>
        <script src="/plugins/bootstrap-tagsinput-latest/bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.min.js"></script>
        <script src="/js/functions.js"></script>                
    </body>
</html>