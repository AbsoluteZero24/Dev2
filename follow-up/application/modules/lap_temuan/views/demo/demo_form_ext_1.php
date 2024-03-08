<!doctype html>
<html lang="en">

    <head>
        <title>Material Dashboard Pro by Creative Tim</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="<?php echo THEMES_PATH . THEMES; ?>/css/bootstrap.min.css" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="<?php echo THEMES_PATH . THEMES; ?>/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="<?php echo THEMES_PATH . THEMES; ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo THEMES_PATH . THEMES; ?>/img/sidebar-1.jpg">
                <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
                -->
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                        CT
                    </a>
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
            </div>
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">today</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Datetime Picker</h4>
                                        <div class="form-group">
                                            <label class="label-control">Datetime Picker</label>
                                            <input type="text" class="form-control datetimepicker" value="10/05/2016" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">library_books</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Datetime Picker</h4>
                                        <div class="form-group">
                                            <label class="label-control">Date Picker</label>
                                            <input type="text" class="form-control datepicker" value="10/10/2016" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">av_timer</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Datetime Picker</h4>
                                        <div class="form-group">
                                            <label class="label-control">Time Picker</label>
                                            <input type="text" class="form-control timepicker" value="14:00" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="sliderRegular" class="slider"></div>
                            <div id="sliderDouble" class="slider slider-info"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            md.initSliders()
                            demo.initFormExtendedDatetimepickers();
                        });
                    </script>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
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
    </body>

</html>