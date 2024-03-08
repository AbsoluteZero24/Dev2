<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $this->config->item('site_title') ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/Ionicons/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/select2/dist/css/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/dist/css/skins/_all-skins.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo THEMES_PATH . THEMES; ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- jQuery 3 -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue">
        <div class="">

            <header class="main-header" style="border-bottom: 2px solid black">
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" style="margin-left: 0px">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle pull-left" data-toggle="push-menu" role="button" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="#" class="navbar-brand pull-left" style="padding-top: 0px; padding-left: 0px; padding-right: 0px">
                        <img title="ver-migas" src="<?php echo base_url() ?>images/logo_mb_only.png" height=50>
                    </a>
                    <a class="navbar-brand pull-left " style="padding-top: 15px; padding-left: 10px">
                        Layanan Digital
                    </a>
                    <div class="navbar-custom-menu">
                        <?php $this->load->view(THEMES . '/layout/chat'); ?>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="">
                <!-- Content Header (Page header) -->
                <section class=""  id="content_filter">
                    <?php $this->load->view(THEMES . '/header'); ?>
                </section>

                <!-- Main content -->
                <section class="">
                    <?php $this->load->view($view); ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php $this->load->view(THEMES . '/layout/footer'); ?>
            </footer>

            <!-- Control Sidebar -->
            <?php //$this->load->view(THEMES . '/layout/sidebar'); ?>

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- Sparkline -->
        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

        <script src="<?php echo THEMES_PATH . THEMES; ?>/bower_components/chart.js/Chart.js"></script>
    </body>
</html>
