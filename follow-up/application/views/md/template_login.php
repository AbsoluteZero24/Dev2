<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEMES_PATH . THEMES; ?>/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="<?php echo THEMES_PATH . THEMES; ?>/img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $this->config->item('site_title') ?></title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="<?php echo THEMES_PATH . THEMES; ?>/css/bootstrap.min.css" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="<?php echo THEMES_PATH . THEMES; ?>/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?php echo THEMES_PATH . THEMES; ?>/css/demo.css" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body class="off-canvas-sidebar">
        <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=" ../dashboard.html ">Panel Kegiatan<br>Divisi Pengembangan Strategi</a>
                </div>
            </div>
        </nav>
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="<?php echo THEMES_PATH . THEMES; ?>/img/login.jpeg">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                                <?php $this->load->view($view); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <p class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.ptsi.co.id"> Divisi Teknologi Informasi </a>, at your service
                        </p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/material.min.js" type="text/javascript"></script>
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/arrive.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/moment.min.js"></script>
    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/chartist.min.js"></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/bootstrap-notify.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/bootstrap-datetimepicker.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery-jvectormap.js"></script>
    <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/nouislider.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/sweetalert2.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/fullcalendar.min.js"></script>
    <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/material-dashboard.js?v=1.2.1"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo THEMES_PATH . THEMES; ?>/js/demo.js"></script>
    <script type="text/javascript">
                                $().ready(function () {
                                    demo.checkFullPageBackgroundImage();

                                    setTimeout(function () {
                                        // after 1000 ms we add the class animated to the login/register card
                                        $('.card').removeClass('card-hidden');
                                    }, 700)
                                });
    </script>

</html>