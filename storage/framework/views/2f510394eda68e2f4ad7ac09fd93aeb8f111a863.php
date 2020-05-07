<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/fontawesome-free/css/all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/icon-kit/dist/css/iconkit.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/ionicons/dist/css/ionicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>">
        <?php echo $__env->yieldContent('head_repeat'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/jvectormap/jquery-jvectormap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/weather-icons/css/weather-icons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/c3/c3.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/owl.carousel/dist/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/dist/css/theme.min.css')); ?>">
        <script src="<?php echo e(asset('public/backend/src/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
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
                           
                        </div>
                        <div class="top-menu d-flex align-items-center">

                           
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
                                   
                                    <a class="dropdown-item" href="<?php echo e(URL::to('/logout')); ?>"><i class="ik ik-power dropdown-icon"></i>Đăng xuất</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="#">
                            
                            <span class="text">Admin</span>
                        </a>
                       
                      
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                               
                                <div class="nav-item">
                                    <a id="dashboard" class="" href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a id="donhang" href="<?php echo e(URL::to('/manage-order')); ?>"><i class="ik ik-file-text"></i><span>Quản lý đơn hàng</span></a>
                                </div>
                                 <div class="nav-item has-sub">
                                       <a id="nguoidung" href="javascript:void(0)"><i class="ik ik-users"></i><span>Quản lý người dùng</span> <span class="badge badge-danger"></span></a>
                                       <div class="submenu-content">
                                            <a id="vohieuhoa" href="<?php echo e(URL::to('/manage-customer')); ?>" class="menu-item">Vô hiệu hóa người dùng</a>
                                            <a id="lichsumua" href="<?php echo e(URL::to('/history-customer')); ?>" class="menu-item">Lịch sử mua hàng của người dùng</a>
                                        </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="sanpham" href="javascript:void(0)"><i class="ik ik-package"></i><span>Quản lý sản phẩm</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themsanpham" href="<?php echo e(URL::to('/add-product')); ?>" class="menu-item">Thêm sản phẩm</a>

                                        <a id="danhsachsanpham" href="<?php echo e(URL::to('/manage-product')); ?>" class="menu-item">Danh sách sản phẩm</a>
                                        <a id="kichco" href="<?php echo e(URL::to('/manage-size')); ?>" class="menu-item">Quản lý kích cỡ</a>
                                        <a id="mausac" href="<?php echo e(URL::to('/manage-color')); ?>" class="menu-item">Quản lý màu sắc</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="thuonghieu" href="javascript:void(0)"><i class="ik ik-award"></i><span>Quản lý thương hiệu</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themthuonghieu" href="<?php echo e(URL::to('/add-brand')); ?>" class="menu-item">Thêm thương hiệu</a>
                                        <a id="danhsachthuonghieu" href="<?php echo e(URL::to('/manage-brand')); ?>" class="menu-item">Danh sách thương hiệu</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="danhmuc" href="javascript:void(0)"><i class="ik ik-list"></i><span>Quản lý danh mục</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themdanhmuc" href="<?php echo e(URL::to('/add-category')); ?>" class="menu-item">Thêm danh mục</a>
                                        <a id="danhsachdanhmuc" href="<?php echo e(URL::to('/manage-category')); ?>" class="menu-item">Danh sách danh mục</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="nhacungcap" href="javascript:void(0)"><i class="ik ik-home"></i><span>Quản lý nhà cung cấp</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themnhacungcap" href="<?php echo e(URL::to('/add-supplier')); ?>" class="menu-item">Thêm nhà cung cấp</a>
                                        <a id="danhsachnhacungcap" href="<?php echo e(URL::to('/manage-suppliers')); ?>" class="menu-item">Danh sách nhà cung cấp</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="kho" href="javascript:void(0)"><i class="ik ik-archive"></i><span>Quản lý kho</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="nhaphang" href="<?php echo e(URL::to('/add-goods-receipt')); ?>" class="menu-item">Nhập hàng</a>
                                        <a id="phieunhap" href="<?php echo e(URL::to('/manage-goods-receipt')); ?>" class="menu-item">Quản lý phiếu nhập</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="vanchuyen" href="javascript:void(0)"><i class="ik ik-truck"></i><span>Hình thức vận chuyển</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themvanchuyen" href="<?php echo e(URL::to('/add-transport')); ?>" class="menu-item">Thêm hình thức vận chuyển</a>
                                        <a id="danhsachvanchuyen" href="<?php echo e(URL::to('/manage-transport')); ?>" class="menu-item">Danh sách hình thức <br> vận chuyển</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a id="thanhtoan" href="javascript:void(0)"><i class="ik ik-dollar-sign"></i><span>Hình thức thanh toán</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themthanhtoan" href="<?php echo e(URL::to('/add-pay')); ?>" class="menu-item">Thêm hình thức thanh toán</a>
                                        <a id="danhsachthanhtoan" href="<?php echo e(URL::to('/manage-pay')); ?>" class="menu-item">Danh sách hình thức <br> thanh toán</a>
                                       
                                    </div>
                                </div>
                                 <!-- Start Ngân (1/4/2020) -->
                                <div class="nav-item has-sub">
                                    <a id="thongke" href="javascript:void(0)"><i class="ik ik-bar-chart-2"></i><span>Thống kê</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="theosanpham" href="<?php echo e(URL::to('/statistical_order')); ?>" class="menu-item">Theo sản phẩm</a>
                                        <a id="theodoanhthu" href= "<?php echo e(URL::to('/statistical_Revenue')); ?>" class="menu-item">Theo doanh thu</a>
                                       
                                    </div>
                                </div>
                                <!-- Start Ngân (13/3/2020) -->
                                <div class="nav-item has-sub">
                                    <a id="khuyenmai" href="javascript:void(0)"><i class="ik ik-gift"></i><span>Quản lý khuyến mãi</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themkhuyenmai" href="<?php echo e(URL::to('/add-coupon')); ?>" class="menu-item">Thêm khuyến mãi</a>
                                        <a id="danhsachkhuyenmai" href="<?php echo e(URL::to('/manage-coupon')); ?>" class="menu-item">Danh sách khuyến mãi</a>
                                        
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)" id= "quangcao"><i class="ik ik-tv"></i><span>Quản lý quảng cáo</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a id="themquangcao" href="<?php echo e(URL::to('/add-advertisement')); ?>" class="menu-item">Thêm quảng cáo</a>
                                        <a id="danhsachquangcao" href="<?php echo e(URL::to('/manage-advertisement')); ?>" class="menu-item">Danh sách quảng cáo</a>
                                        
                                    </div>
                                </div>
                               
                                 <div class="nav-item">
                                    <a id="binhluan" href="<?php echo e(URL::to('/manage-comment')); ?>"><i class="ik ik-file-text"></i><span>Quản lý bình luận</span></a>
                                </div>
                                <!-- End Ngân (1/4/2020) -->
                               
                            </nav>
                        </div>
                    </div>
                </div>

                <?php echo $__env->yieldContent('content'); ?>
                
            </div>
        </div>
        
        
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        
            
        </script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo e(asset('public/backend/src/js/vendor/jquery-3.3.1.min.js')); ?>"><\/script>')</script>
        <script src="<?php echo e(asset('public/backend/plugins/popper.js/dist/umd/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')); ?>"></script>
        <?php echo $__env->yieldContent('script_repeat'); ?>
        <script src="<?php echo e(asset('public/backend/plugins/screenfull/dist/screenfull.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/moment/moment.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/d3/dist/d3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/plugins/c3/c3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/tables.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/widgets.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/charts.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/dist/js/theme.min.js')); ?>"></script>
        
        <?php echo $__env->yieldContent('script_components'); ?>
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
<?php /**PATH D:\xampp\htdocs\shoesshop7\ShoesShop\resources\views/admin_layout.blade.php ENDPATH**/ ?>