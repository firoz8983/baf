<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD --><head>
        <meta charset="utf-8" />
        <title>BAF</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
     
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('dashboard')}}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
     
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('dashboard')}}/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('dashboard')}}/assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard')}}/assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link rel="stylesheet" href="file:///D:/assets/layouts/layout2/css/fontawesome.min.css">
        <link href="{{asset('dashboard')}}/assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->


    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
               <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../assets/layouts/layout2/img/logo-default.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
         
            </div>
            <!-- END HEADER INNER -->
      
        </div>

        
       
        <!-- END HEADER -->
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                       
                            <li class="nav-item start active open">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        
                        </li>
                      

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="title">profile</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{route('addcomment')}} " class="nav-link ">
                                        <span class="title"> Add Comment</span>
                                    </a>
                                </li>
                                
                                 
                                  
                                  
                            </ul>

                        </li> 
                        
                            
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-key"></i>
                                <span class="title">change password</span>
                                <span class="arrow"></span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            

                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i> {{ Auth::user()->name }} </i>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="{{URL::to('/flush')}} "><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                        </li>
                   
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->

            @yield('systemuser_content')

            
             <!-- BEGIN FOOTER -->
        <div class="page-footer">
      
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
        
            </div>
            <!-- END FOOTER -->
            
            <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
        <![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('dashboard')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('dashboard')}}/assets/global/plugins/moment.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
          
        
        
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('dashboard')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('dashboard')}}/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('dashboard')}}/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="{{asset('dashboard')}}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="file:///D:/metronic/assets/layouts/layout2/scripts/fontawesome.min.js"></script>
            <script src="{{asset('dashboard')}}/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
        
        </body>
        
        </html>