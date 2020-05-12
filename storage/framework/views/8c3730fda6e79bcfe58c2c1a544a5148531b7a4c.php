<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Form Advance | ThemeKit - Admin Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo e(URL::to('public/backend/favicon.ico')); ?>" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/fontawesome-free/css/all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/ionicons/dist/css/ionicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/icon-kit/dist/css/iconkit.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/select2/dist/css/select2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/summernote/dist/summernote-bs4.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/mohithg-switchery/dist/switchery.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/dist/css/theme.min.css')); ?>">
        <script src="<?php echo e(URL::to('public/backend/src/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            
                        <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span> 
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="<?php echo e(asset('public/backend/img/users/1.jpg')); ?>" class="rounded-circle" alt="">
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span> 
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span> 
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>
                            <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                                </div>
                            </div>
                            <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="username">
                                        <?php
                                            $name = Session::get('nd_ten');
                                            if ($name)
                                                echo $name;
                                        ?>
                                    </span>
                                    
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.html')}}"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                    <a class="dropdown-item" href="<?php echo e(URL::to('/logout')); ?>"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            

            <div class="page-wrap">
                
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html')}}">
                            <div class="logo-img">
                               <img src="<?php echo e(asset('public/backend/src/img/brand-white.svg')); ?>" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">ThemeKit</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item active">
                                    <a href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(URL::to('/manage-order')); ?>"><i class="ik ik-file-text"></i><span>Quản lý đơn hàng</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-package"></i><span>Quản lý sản phẩm</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(URL::to('/add-product')); ?>" class="menu-item">Thêm sản phẩm</a>
                                        <a href="<?php echo e(URL::to('/manage-product')); ?>" class="menu-item">Danh sách sản phẩm</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Quản lý thương hiệu</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(URL::to('/add-brand')); ?>" class="menu-item">Thêm thương hiệu</a>
                                        <a href="<?php echo e(URL::to('/manage-brand')); ?>" class="menu-item">Danh sách thương hiệu</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Quản lý danh mục</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(URL::to('/add-category')); ?>" class="menu-item">Thêm danh mục</a>
                                        <a href="<?php echo e(URL::to('/manage-category')); ?>" class="menu-item">Danh sách danh mục</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-home"></i><span>Quản lý kho</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(URL::to('/add-goods-receipt')); ?>" class="menu-item">Nhập hàng</a>
                                        <a href="<?php echo e(URL::to('/stock')); ?>" class="menu-item">Tồn kho</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/navbar.html')); ?>"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> <span class="badge badge-danger">150+</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/widgets.html')); ?>" class="menu-item">Basic</a>
                                        <a href="<?php echo e(asset('public/backend/pages/widget-statistic.html')); ?>" class="menu-item">Statistic</a>
                                        <a href="<?php echo e(asset('public/backend/pages/widget-data.html')); ?>" class="menu-item">Data</a>
                                        <a href="<?php echo e(asset('public/backend/pages/widget-chart.html')); ?>" class="menu-item">Chart Widget</a>
                                    </div>
                                </div>
                                <div class="nav-lavel">UI Element</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-box"></i><span>Basic</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/ui/alerts.html')); ?>" class="menu-item">Alerts</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/badges.html')); ?>" class="menu-item">Badges</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/buttons.html')); ?>" class="menu-item">Buttons</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/navigation.html')); ?>" class="menu-item">Navigation</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-gitlab"></i><span>Advance</span> <span class="badge badge-success">New</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/ui/modals.html')); ?>" class="menu-item">Modals</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/notifications.html')); ?>" class="menu-item">Notifications</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/carousel.html')); ?>" class="menu-item">Slider</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/range-slider.html')); ?>" class="menu-item">Range Slider</a>
                                        <a href="<?php echo e(asset('public/backend/pages/ui/rating.html')); ?>" class="menu-item">Rating</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-package"></i><span>Extra</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/ui/session-timeout.html')); ?>" class="menu-item">Session Timeout</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/ui/icons.html')); ?>"><i class="ik ik-command"></i><span>Icons</span></a>
                                </div>
                                <div class="nav-lavel">Forms</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/form-components.html')); ?>" class="menu-item">Components</a>
                                        <a href="<?php echo e(asset('public/backend/pages/form-addon.html')); ?>" class="menu-item">Add-On</a>
                                        <a href="<?php echo e(asset('public/backend/pages/form-advance.html')); ?>" class="menu-item">Advance</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/form-picker.html')); ?>"><i class="ik ik-terminal"></i><span>Form Picker</span> <span class="badge badge-success">New</span></a>
                                </div>

                                <div class="nav-lavel">Tables</div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/table-bootstrap.html')); ?>"><i class="ik ik-credit-card"></i><span>Bootstrap Table</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/table-datatable.html')); ?>"><i class="ik ik-inbox"></i><span>Data Table</span></a>
                                </div>

                                <div class="nav-lavel">Charts</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Charts</span> <span class="badge badge-success">New</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/charts-chartist.html')); ?>" class="menu-item active">Chartist</a>
                                        <a href="<?php echo e(asset('public/backend/pages/charts-flot.html')); ?>" class="menu-item">Flot</a>
                                        <a href="<?php echo e(asset('public/backend/pages/charts-knob.html')); ?>" class="menu-item">Knob</a>
                                        <a href="<?php echo e(asset('public/backend/pages/charts-amcharts.html')); ?>" class="menu-item">Amcharts</a>
                                    </div>
                                </div>

                                <div class="nav-lavel">Apps</div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/calendar.html')); ?>"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/taskboard.html')); ?>"><i class="ik ik-server"></i><span>Taskboard</span></a>
                                </div>

                                <div class="nav-lavel">Pages</div>

                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/login.html')); ?>" class="menu-item">Login</a>
                                        <a href="<?php echo e(asset('public/backend/pages/register.html')); ?>" class="menu-item">Register</a>
                                        <a href="<?php echo e(asset('public/backend/pages/forgot-password.html')); ?>" class="menu-item">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-file-text"></i><span>Other</span></a>
                                    <div class="submenu-content">
                                        <a href="<?php echo e(asset('public/backend/pages/profile.html')); ?>" class="menu-item">Profile</a>
                                        <a href="<?php echo e(asset('public/backend/pages/invoice.html')); ?>" class="menu-item">Invoice</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo e(asset('public/backend/pages/layouts.html')); ?>"><i class="ik ik-layout"></i><span>Layouts</span><span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-lavel">Other</div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Levels</span></a>
                                    <div class="submenu-content">
                                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                                        <div class="nav-item has-sub">
                                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                                            <div class="submenu-content">
                                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)" class="disabled"><i class="ik ik-slash"></i><span>Disabled Menu</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Sample Page</span></a>
                                </div>
                                <div class="nav-lavel">Support</div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Advance</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('public/backend/index.html')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Advance</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card hidden">
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                                
                                                <input type="checkbox hidden" class="js-single" checked />
                                            </div>
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                                
                                                <input type="checkbox" class="js-switch" checked />
                                                <input type="checkbox" class="js-switch" checked />
                                                <input type="checkbox" class="js-switch" checked />
                                            </div>
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                               
                                                <input type="checkbox" class="js-dynamic-state" checked />
                                                <button class="btn btn-primary js-dynamic-enable">Enable</button>
                                                <button class="btn btn-inverse js-dynamic-disable">Disable</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <input type="checkbox" class="js-default" checked />
                                                <input type="checkbox" class="js-primary" checked />
                                                <input type="checkbox" class="js-success" checked />
                                                <input type="checkbox" class="js-info" checked />
                                                <input type="checkbox" class="js-warning" checked />
                                                <input type="checkbox" class="js-danger" checked />
                                                <input type="checkbox" class="js-inverse" checked />
                                            </div>
                                            <div class="col-sm-4">
                                                
                                                <input type="checkbox" class="js-large" checked />
                                                <input type="checkbox" class="js-medium" checked />
                                                <input type="checkbox" class="js-small" checked />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                        <div class="row">
                           
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header"><h3>Form Repeater</h3></div>
                                    <div class="card-body">
                                       
                                        <form class="form-inline repeater">
                                            
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="d-flex mb-2">
                                                    <label for="exampleInputName1">Tên sản phẩm </label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <label for="exampleInputName1">Tên sản phẩm </label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <label for="exampleInputName1">Tên sản phẩm </label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="tel" class="form-control" placeholder="Phone No">
                                                    </div>
                                                    <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                                </div>
                                            </div>
                                            
                                            <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2"><i class="ik ik-plus"></i></button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo e(URL::to('public/backend/src/js/vendor/jquery-3.3.1.min.js')); ?>"><\/script>')</script>
        <script src="<?php echo e(URL::to('public/backend/plugins/popper.js/dist/umd/popper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/select2/dist/js/select2.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/jquery.repeater/jquery.repeater.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/mohithg-switchery/dist/switchery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/dist/js/theme.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/js/form-advanced.js')); ?>"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/add_goods_receipt.blade.php ENDPATH**/ ?>