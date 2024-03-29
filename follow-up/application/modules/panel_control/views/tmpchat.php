<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>

                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Working with AdminLTE on a great new app! Wanna join?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                I would love to.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date pull-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Sarah Doe
                                            <small class="contacts-list-date pull-right">2/23/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">I will be waiting for...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Nadia Jolie
                                            <small class="contacts-list-date pull-right">2/20/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">I'll call you back at...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Nora S. Vans
                                            <small class="contacts-list-date pull-right">2/10/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">Where is your new...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            John K.
                                            <small class="contacts-list-date pull-right">1/27/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">Can I take a look at...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Kenneth M.
                                            <small class="contacts-list-date pull-right">1/4/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">Never mind I found...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-warning btn-flat">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>
</html>
