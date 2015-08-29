<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>CASINO 9618 | Admin Dashboard Template</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="index.html">
         <img src="assets/img/logo.png" alt="logo" class="img-responsive" />
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-warning-sign"></i>
               <span class="badge">6</span>
               </a>
               <ul class="dropdown-menu extended notification">
                  <li>
                     <p>You have 14 new notifications</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-success"><i class="icon-plus"></i></span>
                           New user registered. 
                           <span class="time">Just now</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Server #12 overloaded. 
                           <span class="time">15 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-warning"><i class="icon-bell"></i></span>
                           Server #2 not responding.
                           <span class="time">22 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-info"><i class="icon-bullhorn"></i></span>
                           Application error.
                           <span class="time">40 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Database overloaded 68%. 
                           <span class="time">2 hrs</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           2 user IP blocked.
                           <span class="time">5 hrs</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-warning"><i class="icon-bell"></i></span>
                           Storage Server #4 not responding.
                           <span class="time">45 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-info"><i class="icon-bullhorn"></i></span>
                           System Error.
                           <span class="time">55 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Database overloaded 68%. 
                           <span class="time">2 hrs</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-envelope"></i>
               <span class="badge">5</span>
               </a>
               <ul class="dropdown-menu extended inbox">
                  <li>
                     <p>You have 12 new messages</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="./assets/img/avatar2.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">Just Now</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="./assets/img/avatar3.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">16 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="./assets/img/avatar1.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Bob Nilson</span>
                           <span class="time">2 hrs</span>
                           </span>
                           <span class="message">
                           Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="./assets/img/avatar2.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">40 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor 40% nibh congue nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="./assets/img/avatar3.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">46 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <i class="icon-tasks"></i>
               <span class="badge">5</span>
               </a>
               <ul class="dropdown-menu extended tasks">
                  <li>
                     <p>You have 12 pending tasks</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">New release v1.2</span>
                           <span class="percent">30%</span>
                           </span>
                           <span class="progress">
                           <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">40% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Application deployment</span>
                           <span class="percent">65%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">65% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Mobile app release</span>
                           <span class="percent">98%</span>
                           </span>
                           <span class="progress">
                           <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">98% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Database migration</span>
                           <span class="percent">10%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">10% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Web server upgrade</span>
                           <span class="percent">58%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">58% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Mobile development</span>
                           <span class="percent">85%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">85% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">New UI release</span>
                           <span class="percent">18%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">18% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="assets/img/avatar1_small.jpg"/>
               <span class="username">Bob Nilson</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a>
                  </li>
                  <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a>
                  </li>
                  <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a>
                  </li>
                  <li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">7</span></a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li>
                  <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
                  </li>
                  <li><a href="login.html"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
               <a href="index.html">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Layouts</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="layout_language_bar.html">
                     <span class="badge badge-roundless badge-important">new</span>Language Switch Bar</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_sidebar_menu.html">
                     Horizontal & Sidebar Menu</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_menu1.html">
                     Horizontal Menu 1</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_menu2.html">
                     Horizontal Menu 2</a>
                  </li><li >
                     <a href="layout_disabled_menu.html">
                     Disabled Menu Links</a>
                  </li>
                  <li >
                     <a href="layout_sidebar_fixed.html">
                     Sidebar Fixed Page</a>
                  </li>
                  <li >
                     <a href="layout_sidebar_closed.html">
                     Sidebar Closed Page</a>
                  </li>
                  <li >
                     <a href="layout_blank_page.html">
                     Blank Page</a>
                  </li>
                  <li >
                     <a href="layout_boxed_page.html">
                     Boxed Page</a>
                  </li>
                  <li >
                     <a href="layout_boxed_not_responsive.html">
                     Non-Responsive Boxed Layout</a>
                  </li>
                  <li >
                     <a href="layout_promo.html">
                     Promo Page</a>
                  </li>
                  <li >
                     <a href="layout_email.html">
                     Email Templates</a>
                  </li>
                  <li >
                     <a href="layout_ajax.html">
                     Content Loading via Ajax</a>
                  </li>
               </ul>
            </li>
            <li class="tooltips" data-placement="left" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
               <a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
               <i class="icon-gift"></i> 
               <span class="title">Frontend Theme</span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-bookmark-empty"></i> 
               <span class="title">UI Features</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="ui_general.html">
                     General</a>
                  </li>
                  <li >
                     <a href="ui_buttons.html">
                     Buttons</a>
                  </li>
                  <li >
                     <a href="ui_typography.html">
                     Typography</a>
                  </li>
                  <li >
                     <a href="ui_modals.html">
                     Modals</a>
                  </li>
                  <li>
                     <a href="ui_extended_modals.html">
                     Extended Modals</a>
                  </li>
                  <li >
                     <a href="ui_tabs_accordions_navs.html">
                     Tabs, Accordions & Navs</a>
                  </li>
                  <li >
                     <a href="ui_tiles.html">
                     Tiles</a>
                  </li>
                  <li >
                     <a href="ui_toastr.html">
                     <span class="badge badge-roundless badge-warning">new</span>Toastr Notifications</a>
                  </li>
                  <li >
                     <a href="ui_tree.html">
                     Tree View</a>
                  </li>
                  <li >
                     <a href="ui_nestable.html">
                     Nestable List</a>
                  </li>
                  <li >
                     <a href="ui_ion_sliders.html">
                     <span class="badge badge-roundless badge-important">new</span>Ion Range Sliders</a>
                  </li>
                  <li >
                     <a href="ui_noui_sliders.html">
                     <span class="badge badge-roundless badge-success">new</span>NoUI Range Sliders</a>
                  </li>
                  <li >
                     <a href="ui_jqueryui_sliders.html">
                     jQuery UI Sliders</a>
                  </li>
                  <li >
                     <a href="ui_knob.html">
                     Knob Circle Dials</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-table"></i> 
               <span class="title">Form Stuff</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="form_controls.html">
                     Form Controls</a>
                  </li>
                  <li >
                     <a href="form_layouts.html">
                     Form Layouts</a>
                  </li>
                  <li >
                     <a href="form_component.html">
                     Form Components</a>
                  </li>
                  <li >
                     <a href="form_editable.html">
                     <span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
                  </li>
                  <li >
                     <a href="form_wizard.html">
                     Form Wizard</a>
                  </li>
                  <li >
                     <a href="form_validation.html">
                     Form Validation</a>
                  </li>
                  <li >
                     <a href="form_image_crop.html">
                     <span class="badge badge-roundless badge-important">new</span>Image Cropping</a>
                  </li>
                  <li >
                     <a href="form_fileupload.html">
                     Multiple File Upload</a>
                  </li>
                  <li >
                     <a href="form_dropzone.html">
                     Dropzone File Upload</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-sitemap"></i> 
               <span class="title">Pages</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="page_portfolio.html">
                     <i class="icon-briefcase"></i>
                     <span class="badge badge-warning badge-roundless">new</span>Portfolio</a>
                  </li>
                  <li >
                     <a href="page_timeline.html">
                     <i class="icon-time"></i>
                     <span class="badge badge-info">4</span>Timeline</a>
                  </li>
                  <li >
                     <a href="page_coming_soon.html">
                     <i class="icon-cogs"></i>
                     Coming Soon</a>
                  </li>
                  <li >
                     <a href="page_blog.html">
                     <i class="icon-comments"></i>
                     Blog</a>
                  </li>
                  <li >
                     <a href="page_blog_item.html">
                     <i class="icon-font"></i>
                     Blog Post</a>
                  </li>
                  <li >
                     <a href="page_news.html">
                     <i class="icon-coffee"></i>
                     <span class="badge badge-success">9</span>News</a>
                  </li>
                  <li >
                     <a href="page_news_item.html">
                     <i class="icon-bell"></i>
                     News View</a>
                  </li>
                  <li >
                     <a href="page_about.html">
                     <i class="icon-group"></i>
                     About Us</a>
                  </li>
                  <li >
                     <a href="page_contact.html">
                     <i class="icon-envelope-alt"></i>
                     Contact Us</a>
                  </li>
                  <li >
                     <a href="page_calendar.html">
                     <i class="icon-calendar"></i>
                     <span class="badge badge-important">14</span>Calendar</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-gift"></i> 
               <span class="title">Extra</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="extra_profile.html">
                     User Profile</a>
                  </li>
                  <li >
                     <a href="extra_lock.html">
                     Lock Screen</a>
                  </li>
                  <li >
                     <a href="extra_faq.html">
                     FAQ</a>
                  </li>
                  <li >
                     <a href="inbox.html">
                     <span class="badge badge-important">4</span>Inbox</a>
                  </li>
                  <li >
                     <a href="extra_search.html">
                     Search Results</a>
                  </li>
                  <li >
                     <a href="extra_invoice.html">
                     Invoice</a>
                  </li>
                  <li >
                     <a href="extra_pricing_table.html">
                     Pricing Tables</a>
                  </li>
                  <li >
                     <a href="extra_404_option1.html">
                     404 Page Option 1</a>
                  </li>
                  <li >
                     <a href="extra_404_option2.html">
                     404 Page Option 2</a>
                  </li>
                  <li >
                     <a href="extra_404_option3.html">
                     404 Page Option 3</a>
                  </li>
                  <li >
                     <a href="extra_500_option1.html">
                     500 Page Option 1</a>
                  </li>
                  <li >
                     <a href="extra_500_option2.html">
                     500 Page Option 2</a>
                  </li>
               </ul>
            </li>
            <li>
               <a class="active" href="javascript:;">
               <i class="icon-leaf"></i> 
               <span class="title">3 Level Menu</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li>
                     <a href="javascript:;">
                     Item 1
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 2</a></li>
                        <li><a href="#">Sample Link 3</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:;">
                     Item 1
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                     Item 3
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="javascript:;">
               <i class="icon-folder-open"></i> 
               <span class="title">4 Level Menu</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li>
                     <a href="javascript:;">
                     <i class="icon-cogs"></i> 
                     Item 1
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                        <li>
                           <a href="javascript:;">
                           <i class="icon-user"></i>
                           Sample Link 1
                           <span class="arrow"></span>
                           </a>
                           <ul class="sub-menu">
                              <li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
                              <li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
                              <li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
                           </ul>
                        </li>
                        <li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>
                        <li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:;">
                     <i class="icon-globe"></i> 
                     Item 2
                     <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                        <li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                     <i class="icon-folder-open"></i>
                     Item 3
                     </a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-user"></i> 
               <span class="title">Login Options</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="login.html">
                     Login Form 1</a>
                  </li>
                  <li >
                     <a href="login_soft.html">
                     Login Form 2</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-th"></i> 
               <span class="title">Data Tables</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="table_basic.html">
                     Basic Tables</a>
                  </li>
                  <li >
                     <a href="table_responsive.html">
                     Responsive Tables</a>
                  </li>
                  <li >
                     <a href="table_managed.html">
                     Managed Tables</a>
                  </li>
                  <li >
                     <a href="table_editable.html">
                     Editable Tables</a>
                  </li>
                  <li >
                     <a href="table_advanced.html">
                     Advanced Tables</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-file-text"></i> 
               <span class="title">Portlets</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="portlet_general.html">
                     General Portlets</a>
                  </li>
                  <li >
                     <a href="portlet_draggable.html">
                     Draggable Portlets</a>
                  </li>
               </ul>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-map-marker"></i> 
               <span class="title">Maps</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="maps_google.html">
                     Google Maps</a>
                  </li>
                  <li >
                     <a href="maps_vector.html">
                     Vector Maps</a>
                  </li>
               </ul>
            </li>
            <li class="last ">
               <a href="charts.html">
               <i class="icon-bar-chart"></i> 
               <span class="title">Visual Charts</span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>THEME COLOR</span>
                  <ul>
                     <li class="color-black current color-default" data-style="default"></li>
                     <li class="color-blue" data-style="blue"></li>
                     <li class="color-brown" data-style="brown"></li>
                     <li class="color-purple" data-style="purple"></li>
                     <li class="color-grey" data-style="grey"></li>
                     <li class="color-white color-light" data-style="light"></li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>Layout</span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Header</span>
                  <select class="header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Sidebar</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Footer</span>
                  <select class="footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END BEGIN STYLE CUSTOMIZER -->  
         
         
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h1 class="page-title">
               <img src="Logo/IMG_2623.JPG" width="205" height="202">CASINO 9618 </h1>
               
               <ul class="page-breadcrumb breadcrumb">
               <li> <a href="index.html">หน้าแรก</a> | สมัคร CASINO 9618 | โปรโมชั่น CASINO 9618 | วิธีแทงบอล | ติดต่อเรา</li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
              </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
           </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat blue">
                  <div class="visual">
                     <i class="icon-comments"></i>
                  </div>
                  <div class="details">
                     <div class="number">สมัครสมาชิก</div>
                     <div class="desc">สมัครสมาชิก CASINO 9618</div>
                  </div>
                  <a class="more" href="#">รายละเอียดเพิ่มเติม <i class="m-icon-swapright m-icon-white"></i></a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="dashboard-stat green">
                <div class="visual">
                     <i class="icon-shopping-cart"></i>
                 </div>
                 <div class="details">
                    <div class="number">โปรโมชั่น</div>
                    <div class="desc">ข้อมูลโปรโมชั่นของเรา</div>
                 </div>
                 <a class="more" href="#">รายละเอียดเพิ่มเติม <i class="m-icon-swapright m-icon-white"></i></a>                 
               </div>
            </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat purple">
                  <div class="visual">
                     <i class="icon-globe"></i>
                  </div>
                  <div class="details">
                     <div class="number">วิธีแทงบอล</div>
                     <div class="desc">ข้อมูลวิธีการแทงบอล</div>
                  </div>
                  <a class="more" href="#">รายละเอียดเพิ่มเติม<i class="m-icon-swapright m-icon-white"></i></a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat yellow">
                  <div class="visual">
                     <i class="icon-bar-chart"></i>
                  </div>
                  <div class="details">
                     <div class="number">ติดต่อเรา</div>
                     <div class="desc">ข้อมูลการติดต่อเรา</div>
                  </div>
                  <a class="more" href="#">รายละเอียดเพิ่มเติม<i class="m-icon-swapright m-icon-white"></i></a>                 
               </div>
            </div>
         </div>
         
         <!-- END DASHBOARD STATS -->
         
         
         
         <div class="clearfix"></div>
         <div class="row"></div>
        <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-bell"></i>Recent Activities</div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-sm default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filter By
                           <i class="icon-angle-down"></i>
                           </a>
                           <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                              <label><input type="checkbox" /> Finance</label>
                              <label><input type="checkbox" checked="" /> Membership</label>
                              <label><input type="checkbox" /> Customer Support</label>
                              <label><input type="checkbox" checked="" /> HR</label>
                              <label><input type="checkbox" /> System</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 4 pending tasks.
                                          <span class="label label-sm label-warning ">
                                          Take action 
                                          <i class="icon-share-alt"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    Just now
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-success">                        
                                             <i class="icon-bar-chart"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             Finance Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-danger">                      
                                          <i class="icon-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 5 pending membership that requires a quick review.                       
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-shopping-cart"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          New order received with <span class="label label-sm label-success">Reference Number: DR23923</span>             
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    30 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-success">                      
                                          <i class="icon-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 5 pending membership that requires a quick review.                       
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-default">                        
                                          <i class="icon-bell-alt"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          Web server hardware needs to be upgraded. 
                                          <span class="label label-sm label-default ">Overdue</span>             
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    2 hours
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-default">                        
                                             <i class="icon-briefcase"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             IPO Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 4 pending tasks.
                                          <span class="label label-sm label-warning ">
                                          Take action 
                                          <i class="icon-share-alt"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    Just now
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-danger">                        
                                             <i class="icon-bar-chart"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             Finance Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-default">                      
                                          <i class="icon-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 5 pending membership that requires a quick review.                       
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-shopping-cart"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          New order received with <span class="label label-sm label-success">Reference Number: DR23923</span>             
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    30 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-success">                      
                                          <i class="icon-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          You have 5 pending membership that requires a quick review.                       
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-warning">                        
                                          <i class="icon-bell-alt"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          Web server hardware needs to be upgraded. 
                                          <span class="label label-sm label-default ">Overdue</span>             
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    2 hours
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="col1">
                                    <div class="cont">
                                       <div class="cont-col1">
                                          <div class="label label-sm label-info">                        
                                             <i class="icon-briefcase"></i>
                                          </div>
                                       </div>
                                       <div class="cont-col2">
                                          <div class="desc">
                                             IPO Report for year 2013 has been released.   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col2">
                                    <div class="date">
                                       20 mins
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="pull-right">
                           <a href="#">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
</div>
         <div class="clearfix"></div>
         <div class="row "></div>
        <div class="clearfix"></div>
         <div class="row ">
           <div class="col-md-6 col-sm-6">
              <!-- BEGIN PORTLET-->
            <div class="portlet paddingless">
                  <div class="portlet-title line">
                     <div class="caption"><i class="icon-bell"></i>Feeds</div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <!--BEGIN TABS-->
                     <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#tab_1_1" data-toggle="tab">System</a></li>
                           <li><a href="#tab_1_2" data-toggle="tab">Activities</a></li>
                           <li><a href="#tab_1_3" data-toggle="tab">Recent Users</a></li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_1_1">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
                                 <ul class="feeds">
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bell"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   You have 4 pending tasks.
                                                   <span class="label label-sm label-danger ">
                                                   Take action 
                                                   <i class="icon-share-alt"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             Just now
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New version v1.4 just lunched!   
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                20 mins
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">                      
                                                   <i class="icon-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Database server #12 overloaded. Please fix the issue.                      
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             30 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             40 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">                        
                                                   <i class="icon-plus"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New user registered.                
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             1.5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bell-alt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Web server hardware needs to be upgraded. 
                                                   <span class="label label-sm label-default ">Overdue</span>             
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             2 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             3 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             18 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                          
<div class="tab-pane" id="tab_1_2">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <ul class="feeds">
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New order received 
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                10 mins
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">                      
                                                   <i class="icon-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Order #24DOP4 has been rejected.    
                                                   <span class="label label-sm label-danger ">Take action <i class="icon-share-alt"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                          
<div class="tab-pane" id="tab_1_3">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Robert Nilson</a> 
                                             <span class="label label-sm label-success label-mini">Approved</span>
                                          </div>
                                          <div>29 Jan 2013 10:45AM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 10:45AM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div><a href="#">Eric Kim</a> <span class="label label-sm label-info">Pending</span></div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div><a href="#">Eric Kim</a> <span class="label label-sm label-info">Pending</span></div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--END TABS-->
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row "></div>
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2013 &copy; Metronic by keenthemes.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
   <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/index.js" type="text/javascript"></script>
   <script src="assets/scripts/tasks.js" type="text/javascript"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>