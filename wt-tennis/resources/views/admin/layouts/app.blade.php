<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>@yield('title')</title>

        <script src="{{ URL::asset('admin_asset/tinymce/tinymce.min.js') }}"></script>

        <!-- Base Css Files -->
        <link href="{{ URL::asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- ckeditor -->
        <link rel="stylesheet" href="{{ URL::asset('admin_asset/dist/css/skins/_all-skins.min.css') }}">
        <script src="{{ URL::asset('admin_asset/ckeditor/ckeditor.js') }}"></script>

        <!-- Font Icons -->
        <link href="{{ URL::asset('admin_asset/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('admin_asset/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('admin_asset/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ URL::asset('admin_asset/css/animate.css') }}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ URL::asset('admin_asset/css/waves-effect.css') }}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ URL::asset('admin_asset/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
        <!-- DataTables -->
        <link href="{{ URL::asset('admin_asset/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Custom Files -->
        <link href="{{ URL::asset('admin_asset/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('admin_asset/css/style.css') }}" rel="stylesheet" type="text/css" />


        <!-- Select2 css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ URL::asset('admin_asset/js/modernizr.min.js') }}"></script>
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ action('AdminController@index') }}" class="logo"><i class="md md-terrain"></i> <span>Admin</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                @if (Auth::guest())
                                    <li class="dropdown hidden-xs"><a href="{{ url('/login') }}">Login</a></li>
                                    <li class="dropdown hidden-xs"><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::asset('admin_asset/images/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="{{ url('/logout') }}"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ URL::asset('admin_asset/images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ action('AdminController@index') }}" class="waves-effect {{ Request::segment(2) === 'home' ? 'active' : null }}"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i><span> Content </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li class="{{ Request::segment(2) === 'news' ? 'active' : null }}">
                                      <a href="{{ action('NewsController@index') }}" class="waves-effect {{ Request::segment(2) === 'news' ? 'active' : null }}"><i class="fa fa-newspaper-o"></i><span> News </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}">
                                      <a href="{{ action('GalleryController@index') }}" class="waves-effect {{ Request::segment(2) === 'gallery' ? 'active' : null }}"><i class="fa fa-picture-o"></i><span> Gallery </span></a>
                                  </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ action('UserAdminController@index') }}" class="waves-effect {{ Request::segment(2) === 'user' ? 'active' : null }}"><i class="fa fa-user"></i><span> User </span></a>
                            </li>
                            <li>
                                <a href="{{ action('SponsorController@index') }}" class="waves-effect {{ Request::segment(2) === 'sponsor' ? 'active' : null }}"><i class="ion-person-stalker"></i><span> Sponsor </span></a>
                            </li>
                            <li>
                                <a href="{{ action('ParticipantController@index') }}" class="waves-effect {{ Request::segment(2) === 'participant' ? 'active' : null }}"><i class="fa fa-users"></i><span> Participant </span></a>
                            </li>
                            <li>
                                <a href="{{ action('EventController@index') }}" class="waves-effect {{ Request::segment(2) === 'event' ? 'active' : null }}"><i class="fa fa-folder-open"></i><span> Events </span></a>
                            </li>
                            <li>
                                <a href="{{ action('EventMatchController@index') }}" class="waves-effect {{ Request::segment(2) === 'event-match' ? 'active' : null }}"><i class="fa fa-gamepad"></i><span> Match </span></a>
                            </li>
                            <li>
                                <a href="{{ action('EventBracketController@index') }}" class="waves-effect {{ Request::segment(2) === 'event-bracket' ? 'active' : null }}"><i class="fa fa-sitemap"></i><span> Bracket </span></a>
                            </li>
                            <li>
                                <a href="{{ action('EventMatchScoreController@index') }}" class="waves-effect {{ Request::segment(2) === 'match-score' ? 'active' : null }}"><i class="md-system-update"></i><span> Update Score </span></a>
                            </li>

                            <!-- <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="email-compose.html">Compose Mail</a></li>
                                    <li><a href="email-read.html">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Icons </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="material-icon.html">Material Design</a></li>
                                    <li><a href="ion-icons.html">Ion Icons</a></li>
                                    <li><a href="font-awesome.html">Font awesome</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                    <li><a href="code-editor.html">Code Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Data Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables.html">Basic Tables</a></li>
                                    <li><a href="table-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="responsive-table.html">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chartjs.html">Chartjs</a></li>
                                    <li><a href="flot-chart.html">Flot Chart</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="chart-radial.html">Radial charts</a></li>
                                    <li><a href="other-chart.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="gmap.html"> Google Map</a></li>
                                    <li><a href="vector-map.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="email-template.html">Email template</a></li>
                                    <li><a href="contact.html">Contact-list</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="recoverpw.html">Recover Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming-soon</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="404_alt.html">404 alt</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Multi Level </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('content')
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-1.jpg') }}" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-2.jpg') }}" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-3.jpg') }}" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-4.jpg') }}" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-5.jpg') }}" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-6.jpg') }}" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-7.jpg') }}" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-8.jpg') }}" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-9.jpg') }}" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-10.jpg') }}" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ URL::asset('admin_asset/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/js/waves.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('admin_asset/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/chat/moment-2.2.1.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

        <!-- sweet alerts -->
        <script src="{{ URL::asset('admin_asset/assets/sweet-alert/sweet-alert.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/sweet-alert/sweet-alert.init.js') }}"></script>

        <!-- flot Chart -->
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.selection.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.stack.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

        <!-- Counter-up -->
        <script src="{{ URL::asset('admin_asset/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('admin_asset/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

        <!-- CUSTOM JS -->
        <script src="{{ URL::asset('admin_asset/js/jquery.app.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/datatables/dataTables.bootstrap.js') }}"></script>

        <!-- Dashboard -->
        <script src="{{ URL::asset('admin_asset/js/jquery.dashboard.js') }}"></script>

        <!-- Chat -->
        <script src="{{ URL::asset('admin_asset/js/jquery.chat.js') }}"></script>

        <!-- Todo -->
        <script src="{{ URL::asset('admin_asset/js/jquery.todo.js') }}"></script>

        <!-- Select2 JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <!-- Datatables JQuery -->
        <!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <!-- App scripts -->
        @stack('scripts')

        @yield('footer')
    </body>
</html>
