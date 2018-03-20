<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CASA BLANCA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/dist/css/skins/skin-blue-light.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- EDICION Bootstrap-->
  <link rel="stylesheet" href="http://localhost/gestor_clientes/recursos/bootstrap/css/edicion_bootstrap.css">
  </head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

    <?php echo $header ?>
          <!-- Left side column. contains the logo and sidebar -->
            <aside class='main-sidebar'>
              <!-- sidebar: style can be found in sidebar.less -->
              <section class='sidebar'>
                <!-- Sidebar user panel -->
                <!--<div class='user-panel'>
                  <div class='pull-left image'><img src='http://localhost/gestor_clientes/recursos/images/foto_perfil/foto_default.png' class='img-circle' alt='User Image'>  </div>
                  <div class='pull-left info'>
                    <p>adrian sirianni</p>
                    <a href='#'><i class='fa fa-circle text-success'></i> Online</a>
                  </div>
                </div>--> <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class='sidebar-menu'>
                  <li class='header'>MENU DE NAVEGACION</li><li><a href='http://localhost/gestor_clientes/index.php/Vendedor'>
                    <?=$menu?>
              </section>
              <!-- /.sidebar -->
            </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Escritorio
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-desktop"></i> Escritorio</a></li>
        <!--<li class="active">Dashboard</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        
        <div class="col-md-offset-1 col-md-10">
            <button style="margin-top: 20px;margin-bottom: 20px;" id="btn_exportar_excel" type="button" class="btn btn-success botonExcel" onclick="$('#FormularioExportacion').submit();"><i class="fa fa-file-excel-o"></i> Exportar</button>
            <form action="<?php echo base_url()?>index.php/Welcome/exportar_mi_lista_productos" method="post" target="_blank" id="FormularioExportacion" hidden="">
            </form>
            <div class='pull-right'>
                <div class="cart">
                    <a href="#" onclick="mostrarModal();">
                        <h3> 
                            <div class="total">
                                <!-- <span class='simpleCart_total'></span>	(<span id='simpleCart_quantity' class='simpleCart_quantity'></span> )-->
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> $ <span id="total_final_menu">0</span>
                            </div>
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table id="listado" class="table table-bordered">
                <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th style='width: 50px;'></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($listado_productos as $value)
                        {
                          echo "<tr>
                                    <td>".$value["descripcion"]."</td>
                                    <td>$".$value["precio"]."</td>
                                    <td>
                                        <button class='btn btn-primary' onClick='agregar_producto(".$value["id"].",&#34;".$value["descripcion"]."&#34;,".$value["precio"].")'><i class='fa fa-cart-arrow-down'></i> Agregar</button>
                                    </td>
                                </tr>";
                        }
                    ?>
                </tbody>
                
            </table>
        </div>
    </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer ?>
  
          <!-- Control Sidebar -->
            <aside class='control-sidebar control-sidebar-dark'>
              <!-- Create the tabs -->
              <ul class='nav nav-tabs nav-justified control-sidebar-tabs'>
                <li><a href='#control-sidebar-home-tab' data-toggle='tab'><i class='fa fa-home'></i></a></li>
                <li><a href='#control-sidebar-settings-tab' data-toggle='tab'><i class='fa fa-gears'></i></a></li>
              </ul>
              <!-- Tab panes -->
              <div class='tab-content'>
                <!-- Home tab content -->
                <div class='tab-pane' id='control-sidebar-home-tab'>
                  <h3 class='control-sidebar-heading'>Recent Activity</h3>
                  <ul class='control-sidebar-menu'>
                    <li>
                      <a href='javascript:void(0)'>
                        <i class='menu-icon fa fa-birthday-cake bg-red'></i>

                        <div class='menu-info'>
                          <h4 class='control-sidebar-subheading'>Langdon's Birthday</h4>

                          <p>Will be 23 on April 24th</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <i class='menu-icon fa fa-user bg-yellow'></i>

                        <div class='menu-info'>
                          <h4 class='control-sidebar-subheading'>Frodo Updated His Profile</h4>

                          <p>New phone +1(800)555-1234</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <i class='menu-icon fa fa-envelope-o bg-light-blue'></i>

                        <div class='menu-info'>
                          <h4 class='control-sidebar-subheading'>Nora Joined Mailing List</h4>

                          <p>nora@example.com</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <i class='menu-icon fa fa-file-code-o bg-green'></i>

                        <div class='menu-info'>
                          <h4 class='control-sidebar-subheading'>Cron Job 254 Executed</h4>

                          <p>Execution time 5 seconds</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->

                  <h3 class='control-sidebar-heading'>Tasks Progress</h3>
                  <ul class='control-sidebar-menu'>
                    <li>
                      <a href='javascript:void(0)'>
                        <h4 class='control-sidebar-subheading'>
                          Custom Template Design
                          <span class='label label-danger pull-right'>70%</span>
                        </h4>

                        <div class='progress progress-xxs'>
                          <div class='progress-bar progress-bar-danger' style='width: 70%'></div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <h4 class='control-sidebar-subheading'>
                          Update Resume
                          <span class='label label-success pull-right'>95%</span>
                        </h4>

                        <div class='progress progress-xxs'>
                          <div class='progress-bar progress-bar-success' style='width: 95%'></div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <h4 class='control-sidebar-subheading'>
                          Laravel Integration
                          <span class='label label-danger pull-right'>50%</span>
                        </h4>

                        <div class='progress progress-xxs'>
                          <div class='progress-bar progress-bar-danger' style='width: 50%'></div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href='javascript:void(0)'>
                        <h4 class='control-sidebar-subheading'>
                          Back End Framework
                          <span class='label label-primary pull-right'>68%</span>
                        </h4>

                        <div class='progress progress-xxs'>
                          <div class='progress-bar progress-bar-primary' style='width: 68%'></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class='tab-pane' id='control-sidebar-stats-tab'>Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class='tab-pane' id='control-sidebar-settings-tab'>
                  <form method='post'>
                    <h3 class='control-sidebar-heading'>General Settings</h3>

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Report panel usage
                        <input type='checkbox' class='pull-right' checked>
                      </label>

                      <p>
                        Some information about this general settings option
                      </p>
                    </div>
                    <!-- /.form-group -->

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Allow mail redirect
                        <input type='checkbox' class='pull-right' checked>
                      </label>

                      <p>
                        Other sets of options are available
                      </p>
                    </div>
                    <!-- /.form-group -->

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Expose author name in posts
                        <input type='checkbox' class='pull-right' checked>
                      </label>

                      <p>
                        Allow the user to show his name in blog posts
                      </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class='control-sidebar-heading'>Chat Settings</h3>

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Show me as online
                        <input type='checkbox' class='pull-right' checked>
                      </label>
                    </div>
                    <!-- /.form-group -->

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Turn off notifications
                        <input type='checkbox' class='pull-right'>
                      </label>
                    </div>
                    <!-- /.form-group -->

                    <div class='form-group'>
                      <label class='control-sidebar-subheading'>
                        Delete chat history
                        <a href='javascript:void(0)' class='text-red pull-right'><i class='fa fa-trash-o'></i></a>
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
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="http://localhost/gestor_clientes/recursos/plugins/jQuery/jquery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="http://localhost/gestor_clientes/recursos/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://localhost/gestor_clientes/recursos/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/gestor_clientes/recursos/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://localhost/gestor_clientes/recursos/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/gestor_clientes/recursos/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/gestor_clientes/recursos/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="http://localhost/gestor_clientes/recursos/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/gestor_clientes/recursos/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/gestor_clientes/recursos/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/gestor_clientes/recursos/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/gestor_clientes/recursos/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/gestor_clientes/recursos/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/gestor_clientes/recursos/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/gestor_clientes/recursos/dist/js/demo.js"></script>
<script type='text/javascript'>
(function(){ var widget_id = '5NG0U82TVz';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>


